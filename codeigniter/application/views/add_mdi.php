<?php

ini_set('max_execution_time',0);

$conn = mysqli_connect("localhost", "root", "", "codeigniter");

$tim = time();
$txt = $user->first_name . '' . $user->last_name;


$host='localhost';
$db = 'codeigniter';
$username = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$db";$username;$password;

// $table = "users";

try
{
    //Create a PostgreSQL database connection
      //$bd = new PDO ($dsn,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
        $bd = new PDO ("mysql:host=$host;dbname=$db",$username,$password ) ;

    //Display a message if connected to the PostgreSQL successfully
      if($bd)
      {
          //echo "La connexion  a la base de " . htmlspecialchars('données') . " <strong>$db</strong> a reussie !";
      }

}
catch(PDOException $e)
{
//die('Erreur de connexion à la bd : '.$e->getMessage());
    die('Erreur de connexion '.htmlspecialchars('à'). 'la base de '.htmlspecialchars('données'). ' : '.$e->getMessage());

}


if (isset($_POST["import"])){
    $fileNames = $_FILES["file"]["name"];
    $chk_ext = explode(".",$fileNames);
    $table = explode(".",$fileNames); 

	$convertedfile ="tescsvname.csv";

if(strtolower($chk_ext[1]) == "csv" || strtolower($chk_ext[1]) == "xls" || strtolower($chk_ext[1]) == "xlsx" ){
    $fileName = $_FILES["file"]["tmp_name"];
    if ($_FILES["file"]["size"] > 0) {
       
$row = 1;
$file = fopen($fileName, "r");
$file2 = fopen($convertedfile, "w");

$i = 0;

$ligne1=fgetss($file,4096);
$array=array();
$ar=explode(";",$ligne1);

/* verifier si une table existe si oui la supprimer*/
$arrays = array(0=>$ar[0]);
$ar[0]=(isset($ar[0]) ) ? $ar[0] : Null;
$champs1=explode(";",$ar[0]);

$sql = "CREATE TABLE $table[0]$txt (tempon VARCHAR(1000) NOT NULL)";
$bd->exec($sql);

if(!empty($ar)){
    foreach ($ar as $key => $val) {
        $val1 = $ar[$key];
        // var_dump($champs1);
        //var_dump($val1);
        $sql1 = mysqli_query($conn,'ALTER TABLE '.$table[0].''.$txt.' ADD  '.$val1.' VARCHAR(1000) NOT NULL');
		$conn->query($sql1);
    }
}

$sql2 = "ALTER TABLE $table[0]$txt DROP tempon";
$conn->query($sql2);


// $sql3 = "ALTER TABLE $table[0] RENAME TO $table[0]$tim";
// $conn->query($sql3);

	$changetitle = array('title1','title2');
	fputcsv($file2,$changetitle);

        while (($column = fgetcsv($file, 900000, ";")) !== FALSE) {

			// $newdatas = array();
			// $newdatas[] = mb_convert_encoding($column[0],'ISO-8859-15','utf-8');
			// $newdatas[] = mb_convert_encoding($column[1],'ISO-8859-15','utf-8');

			// fputcsv($file2,$newdatas);

			
			$val1 = [];
			foreach ($ar as $key => $val) {
				$val1 = $ar[$key];
			}

            
            $num = count($column);
            //echo "<p> $num fields in line $row: <br><p>\n";
            $row++;
            for($c = 0; $c < $num; $c++){
            //echo $ar[$c] . ' :' .$column[$c]. "<br>";

            }

            $result = [];
			foreach ($column as $valu) {
                //echo $column[$key1].'<br>';
				
				$result[]=$valu;
				
				$escaped_values = array_map(array($conn, 'real_escape_string'),array_values($result));
				$values  = implode('","', $escaped_values);
				$newdata = "'" . implode("','", $escaped_values) . "'";
				$champ_column = "'" . implode("','", $ar) . "'";
				
				
				$tampe = preg_replace('/\s/', '',$champ_column);
				// $tampe1 = str_replace(' ', array(),$champ_column);
				// $tampe2 = trim($champ_column,'');
				// var_dump($tampe);
				// var_dump($tampe1);
				// var_dump($tampe2);
				
				// var_dump($newdatas);
				// die();


				// function trim_value(&$value)
				// {
					// $value = trim($value,"\n\r\0\x0B");
				// }

				// $fruit = array('apple','banana ', ' cranberry ');
				// $tests = json_encode($ar);
				// var_dump($tests);

				// array_walk($fruit, 'trim_value');
				// var_dump($tests);

	// die();
	
              	$sql4 = "INSERT INTO $table[0]$txt  VALUES ($newdata)";
				$conn->query($sql4);

				

// echo $sql;



// if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
// } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
// }
         }

		 
		 

            if (!empty($result)) {
                $type = "success";
				$message = "CSV Data Imported into the Database";
				 
				echo "<script type='text/javascript'>alert('cette rubrique a été enregistrée avec success!')</script>";
				// redirect('Mdidata/add_new', 'refresh');
				echo "<script>
			  
				document.location='add_new'</script>";
				$this->session->set_flashdata('success','CSV Data Imported into the Database.');
            } else {
                $type = "error";
				$message = "Problem in Importing CSV Data";
				$this->session->set_flashdata('error','Problem in Importing CSV Data!');
            }
			$i++;
	

		}
		
		$sql5 = "ALTER TABLE $table[0]$txt ADD username VARCHAR(1000) NOT NULL";
		$conn->query($sql5);

		$sql6 = "UPDATE $table[0]$txt SET username = '$user->username'";
		$conn->query($sql6);

		// echo $sql6;
		// var_dump($user->username);
		// die();
		


// fclose($file);
// die();


    }

}
else{
echo "Invalid";
}
// redirect('Mdidata/add_new', 'refresh');
}
?>
<!doctype html>
<html lang="en" dir="ltr">
	
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="msapplication-TileColor" content="#0061da">
		<meta name="theme-color" content="#1643a3">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


		<!-- Title -->
		<title>Plight – Admin Bootstrap4 Responsive Webapp Dashboard Template</title>
		<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>/fonts/fonts/font-awesome.min.css">

		<!-- Font Family -->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />


		<!-- Dashboard Css -->
		<link href="<?php echo base_url().'assets/'; ?>/css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- select2 Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/select2/select2.min.css" rel="stylesheet" />

		<!-- Time picker Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

		<!-- Date Picker Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/date-picker/spectrum.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!-- file Uploads -->
        <link href="<?php echo base_url().'assets/'; ?>/plugins/fileuploads/css/dropify.css" rel="stylesheet" type="text/css" />
		<!---Font icons-->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/iconfonts/plugin.css" rel="stylesheet" />
		<script type="text/javascript">
		$(document).ready(function() {
			$("#frmCSVImport").on("submit", function () {

		   $("#response").attr("class", "");
				$("#response").html("");
				var fileType = ".";
				var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
				if (!regex.test($("#file").val().toLowerCase())) {
				   $("#response").addClass("error");
				   $("#response").addClass("display-block");
					$("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
					return false;
				}
				return true;
			});
		});
		</script>
		<style>
			.success {
				background: #c7efd9;
				border: #bbe2cd 1px solid;
			}

			.error {
				background: #fbcfcf;
				border: #f3c6c7 1px solid;
			}
			.test {
				//border: 1px solid red;
				position: relative;
				top: -8px
			}
		</style>
	</head>
	<body class="app sidebar-mini rtl">
		<div id="global-loader" ></div>
		<div class="page">
			<div class="page-main">
				<?php include('template/header.php'); ?>

				<!-- Sidebar menu-->
				<?php include('template/nav.php'); ?>

				<div class="app-content  my-3 my-md-5">
					<div class="side-app">
						<div class="page-header">
							<h4 class="page-title">MDI</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">MDI</a></li>
								<li class="breadcrumb-item active" aria-current="page">Charger un fichier</li>
							</ol>

						</div>
						<div class="row">
							<div class="col-md-6 ">
								<form class="card" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
									<div class="card-header">
										<h3 class="card-title">File Upload</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<input type="file" name="file" id="file" accept="." class="dropify" data-height="110" />
											</div>
											<div class="col-md-6">
												
												<div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>">
													<?php 
														if(!empty($message)) { echo $message; }
													?>
													<?php if($this->session->has_userdata('success')){ ?>
														<div class="alert alert-primary" role="alert">
														<?php echo $this->session->flashdata('success'); ?>
														</div>
													<?php } ?>
													<?php if($this->session->has_userdata('error')){ ?>
														<div class="alert alert-danger" role="alert">
														<?php echo $this->session->flashdata('error'); ?>
														</div>
													<?php } ?>
												</div>
											</div>
										</div>
										
									</div>
									<div class="card-body">
										<div class="form-footer">
											<button type="submit" id="submit" name="import" class="btn btn-primary btn-block">Charger</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-6 ">
								<form class="card" action="<?php echo site_url('Mdidata/save'); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
									<div class="card-header">
										<h3 class="card-title">Cochez les champs</h3>
									</div>
									<div class="card-body">
										<div class="row">
										<div class="col-md-12 col-lg-12">
												<div class="form-group">
													<label class="form-label">Choisir la table</label>
													<select readonly="readonly" name="input_table[tab]" id="select-countries" class="form-control custom-select">
														<?php if(count($tbl_name)>0) { ?>
															<?php foreach($tbl_name as $prj){ ?>
															<option value="<?php echo $prj->TABLE_NAME; ?>"><?php echo $prj->TABLE_NAME; ?></option>
															<?php } ?>
														<?php } ?>
													</select>
													
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group m-0">
													<label class="form-label"></label>
													<div class="row gutters-xs">
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[quit]" type="checkbox"  value="num_der_quittance" class="colorinput-input" />
																<span class="colorinput-color bg-azure"></span>
																<span class="custom-switch-description test">N° dernière quittance émise</span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[mont]" type="checkbox" value="mont_der_quittance" class="colorinput-input"  />
																<span class="colorinput-color bg-indigo"></span>
																<span class="custom-switch-description test">Montant dernière quittance émise</span>
																
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[debperiode]" type="checkbox" value="deb_per_couv" class="colorinput-input" />
																<span class="colorinput-color bg-purple"></span>
																<span class="custom-switch-description test">Début période couverture DQE</span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[finperiode]" type="checkbox" value="fin_per_couv" class="colorinput-input" />
																<span class="colorinput-color bg-pink"></span>
																<span class="custom-switch-description test">Fin période couverture DQE</span>
															</label>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group m-0">
													<div class="form-label"></div>
													<div class="row gutters-xs">
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[index]" type="checkbox" value="index_dqe" class="colorinput-input" />
																<span class="colorinput-color bg-red"></span>
																<span class="custom-switch-description test">Index DQE</span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[fineffetquit]" type="checkbox" value="dte_fin_eff" class="colorinput-input" />
																<span class="colorinput-color bg-orange"></span>
																<span class="custom-switch-description test">Date fin effet police</span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="input_val[etatpolice]" type="checkbox" value="etat_police" class="colorinput-input" />
																<span class="colorinput-color bg-yellow"></span>
																<span class="custom-switch-description test">Etat de la police</span>
															</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class=" card-body">
										<div class="form-footer">
											<input type="submit" name="importchamp" class="btn btn-primary btn-block" value="Ajouter un ou plusieurs champs">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">Plight</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>

		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>
		<!-- Dashboard Css -->
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/rating/jquery.rating-stars.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/toggle-sidebar/sidemenu.js"></script>


		<!--Select2 js -->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/select2/select2.full.min.js"></script>

		<!-- Timepicker js -->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/time-picker/jquery.timepicker.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/time-picker/toggles.min.js"></script>

		<!-- Datepicker js -->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/date-picker/spectrum.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/date-picker/jquery-ui.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/input-mask/jquery.maskedinput.js"></script>

		<!-- Inline js -->
		<script src="<?php echo base_url().'assets/'; ?>/js/select2.js"></script>
		<!-- file uploads js -->
        <script src="<?php echo base_url().'assets/'; ?>/plugins/fileuploads/js/dropify.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo base_url().'assets/'; ?>/js/custom.js"></script>

		<script >
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong appended.'
                },
                error: {
                    'fileSize': 'The file size is too big (2M max).'
                }
            });
        </script>

	</body>
</html>


