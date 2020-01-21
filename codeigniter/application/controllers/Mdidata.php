<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Auth
 * @property Ion_auth|Ion_auth_model $ion_auth        The ION Auth spark
 * @property CI_Form_validation      $form_validation The form validation library
 */
class Mdidata extends CI_Controller
{
	public $data = [];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(['ion_auth', 'form_validation']);
		$this->load->helper(['url', 'language']);
		$this->load->model('Mdi_model','mdi');
		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
	}
	
	public function index() {
	
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		else if (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			show_error('You must be an administrator to view this page.');
		}
		else
		{
			$this->data['title'] = $this->lang->line('index_heading');
			
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();

			$user = $this->ion_auth->user()->row();
			$data['user'] = $user;
			
			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
			
			// foreach ($this->data['users'] as $k => $user)
			// {
				// $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			// }

			$this->_render_page('' . DIRECTORY_SEPARATOR . 'index', $this->data);
		}
	}
	
	public function add_new($datas = [])
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}else {

			$user = $this->ion_auth->user()->row();
		
			$this->data['title'] = $this->lang->line('index_heading');
			
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();

			$data['user'] = $user;

			//affiche la liste des table
			$data['tbl_name'] = $this->mdi->get_all_table_query($user->first_name . '' . $user->last_name);
			//die();

			// $this->session->set_flashdata('success','New Donnée has been inserted successfully.'); 
			// $this->session->set_flashdata('error','You could not insert new donnée...!');
			
			//USAGE NOTE - you can do more complicated queries like this
			//$this->data['users'] = $this->ion_auth->where('field', 'value')->users()->result();
			
			// foreach ($this->data['users'] as $k => $user)
			// {
				// $this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			// }

			$this->_render_page('' . DIRECTORY_SEPARATOR . 'add_mdi', $data);
			//$this->load->view('add_mdi',$data);
		}
	}

	public function save()
	{
		if($this->input->post('importchamp')){
			$conn = mysqli_connect("localhost", "root", "", "codeigniter");

			// $fileNames = $this->input->post('input_data[tab]') ;
			// $chk_ext = explode(".",$fileNames);
			// $table = $input_data['tab']; 
	
			$input_data = $this->input->post('input_val');
			$ligne1=json_encode($input_data);
			$table = $this->input->post('input_table[tab]'); 
			$array=array($input_data);
			$ar=explode(";",$ligne1);

			
			//
			$arrays = array(0=>$ar[0]);
			$ar[0]=(isset($ar[0]) ) ? $ar[0] : Null;
			$champs1=explode(";",$ar[0]);
			
			// echo $ligne1;
			//
			$result = [];
			if(!empty($ar)){
				foreach ($ar as $key => $val) {
					$val1 = $ar[$key];

					$result[]=$val;
				
					$escaped_values = array_map(array($conn, 'real_escape_string'),array_values($result));
					$values  = implode('","', $escaped_values);
					$newdata = "'" . implode("','", $escaped_values) . "'";
					$champ_column = "'" . implode("','", $ar) . "'";

					// $quit = $input_data['quit'];
					// $mont = $input_data['mont'];
					// $debperiode = $input_data['debperiode'];
					// $finperiode = $input_data['finperiode'];

					// $tab_details = array('quit'=> $quit, 
					// 					'mont' => $mont, 
					// 					'debperiode' => $debperiode,
					// 					'finperiode' => $finperiode,
					// 				);

					foreach ($input_data as $key => $value) {
							//echo $value.',';
							$query = $this->db->query("ALTER TABLE $table ADD $value VARCHAR(1000) NOT NULL");
							//echo $query;
					}
					// var_dump($input_data);
					//alter table
					// $query = $this->db->query("ALTER TABLE $table ADD $quit VARCHAR(1000) NOT NULL");
					// echo $data['req'];
					// echo $query;
					
					// $sql1 = mysqli_query($conn,'ALTER TABLE '.$table.' ADD '.$val1.' VARCHAR(1000) NOT NULL ');
					// echo $sql1;
					// $conn->query($sql1);
				}
			}
			// die();
			//input_data['emp_pass'] = md5($this->input->post('emp_pass'));
			// $is_inserted = $this->don_model->new_donnees_query($input_data);
			
			//die();
			if($query)
				$this->session->set_flashdata('success','Le(s) Champ(s) ajouté(s) avec successfully.'); 
			else
				$this->session->set_flashdata('error','Vous ne pouvez pas ajouté le(s) champ(s)...!');
		}else{
			echo "No request...";
		}
		redirect(site_url('Mdidata/add_new'));
	}
	
	/**
	 * @param string     $view
	 * @param array|null $data
	 * @param bool       $returnhtml
	 *
	 * @return mixed
	 */
	public function _render_page($view, $data = NULL, $returnhtml = FALSE)//I think this makes more sense
	{

		$viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $viewdata, $returnhtml);

		// This will return html on 3rd argument being true
		if ($returnhtml)
		{
			return $view_html;
		}
	}
	
}

?>