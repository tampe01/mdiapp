<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdi_model extends CI_Model {

    public function get_all_table_query($user)
	{
        //SELECT TABLE_NAME FROM information_schema.tables WHERE TABLE_SCHEMA = "codeigniter"
		$this->db->select('TABLE_NAME');
        $this->db->from('information_schema.tables');
        $this->db->where('TABLE_SCHEMA','codeigniter');
        $this->db->like('TABLE_NAME',$user);
		$query = $this->db->get();
		return $result = $query->result();
    }

    public function get_alter_table_query($table,$val1)
	{
        //ALTER TABLE '.$table[0].' ADD '.$val1.' VARCHAR(1000) NOT NULL 
		// $query = $this->db->query("ALTER TABLE $table ADD $val1 VARCHAR(1000) NOT NULL");
		// return $result = $query->result();
    }
    
}
