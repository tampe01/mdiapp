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
		<link rel="icon" href="<?php echo base_url().'assets/'; ?>favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

		<!-- Title -->
		<title>Plight – Admin Bootstrap4 Responsive Webapp Dashboard Template</title>
		<link rel="stylesheet" href="<?php echo base_url().'assets/'; ?>/fonts/fonts/font-awesome.min.css">

		<!-- Font Family-->
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

		<!-- Dashboard Css -->
		<link href="<?php echo base_url().'assets/'; ?>/css/dashboard.css" rel="stylesheet" />

		<!-- c3.js Charts Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

		<!-- Morris.js Charts Plugin -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/morris/morris.css" rel="stylesheet" />

		<!-- Sidemenu Css -->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/toggle-sidebar/sidemenu.css" rel="stylesheet" />

		<!-- Custom scroll bar css-->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

		<!---Font icons-->
		<link href="<?php echo base_url().'assets/'; ?>/plugins/iconfonts/plugin.css" rel="stylesheet" />
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
							<h4 class="page-title">Dashboard</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
							</ol>
						</div>

						<div class="row row-cards">
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card card-img-holder">
									<div class="card-body list-icons">
										<div class="clearfix">
											<div class="float-left  mt-2">
												<span class="text-warning ">
													<i class="si si-basket-loaded "></i>
												</span>
											</div>
											<div class="float-right text-right">
												<p class="card-text text-muted font-weight-semibold mb-1">Orders</p>
												<h2>656</h2>
											</div>
										</div>
										<div class="card-footer p-0">
											<p class="text-muted mb-0 pt-4"><i class="si si-arrow-down-circle text-warning mr-1" aria-hidden="true"></i> Today Orders</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card card-img-holder">
									<div class="card-body list-icons">
										<div class="clearfix">
											<div class="float-left  mt-2">
												<span class="text-success ">
													<i class="si si-credit-card "></i>
												</span>
											</div>
											<div class="float-right text-right">
												<p class="card-text text-muted font-weight-semibold mb-1">Revenue</p>
												<h2>$ 35,264</h2>
											</div>
										</div>
										<div class="card-footer p-0">
											<p class="text-muted mb-0 pt-4"><i class="si si-arrow-up-circle text-success mr-1"></i>Today Sales</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card card-img-holder">
									<div class="card-body list-icons">
										<div class="clearfix">
											<div class="float-left  mt-2">
												<span class="text-info ">
													<i class="si si-chart"></i>
												</span>
											</div>
											<div class="float-right text-right">
												<p class="card-text text-muted font-weight-semibold mb-1">Profit</p>
												<h2>65%</h2>
											</div>
										</div>
										<div class="card-footer p-0">
											<p class="text-muted mb-0 pt-4"><i class="si si-exclamation text-info mr-1" ></i>Today profit</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-6 col-xl-3">
								<div class="card card-img-holder">
									<div class="card-body list-icons">
										<div class="clearfix">
											<div class="float-left  mt-2">
												<span class="text-primary ">
													<i class="si si-social-facebook "></i>
												</span>
											</div>
											<div class="float-right text-right">
												<p class="card-text text-muted font-weight-semibold mb-1">Followers</p>
												<h2>65K</h2>
											</div>
										</div>
										<div class="card-footer p-0">
											<p class="text-muted mb-0 pt-4"><i class="si si-check mr-1 text-primary" ></i> Recent Activities</p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row row-deck">
							<div class="col-lg-12 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Company Growth Yearly</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="echart1" class="chartsh chart-dropshadow"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<div class="card-title">Monthly View</div>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body p-4">
										<div class="chats-wrap">
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Sales</span>
													<span class="float-right p-1 bg-primary btn btn-sm text-white">
													<b>70</b>%</span>
												</h4>
												<div class="progress progress-md mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 70%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Profit</span>
													<span class="float-right p-1 bg-secondary  btn btn-sm text-white">
														<b>60</b>%</span>
												</h4>
												<div class="progress progress-md mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 60%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Users</span>
													<span class="float-right p-1 bg-cyan btn btn-sm text-white">
														<b>47%</b>
													</span>
												</h4>
												<div class="progress progress-md mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-cyan" style="width: 47%"></div>
												</div>
											</div>
											<div class="chat-details mb-1 p-3">
												<h4 class="mb-0">
													<span class="h5 font-weight-normal">Growth</span>
													<span class="float-right p-1 bg-danger btn btn-sm text-white">
														<b>25%</b>
													</span>
												</h4>
												<div class="progress progress-md mt-3">
													<div class="progress-bar progress-bar-striped progress-bar-animated  bg-danger" style="width: 25%"></div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-8 col-sm-12">
								<div class="card ">
									<div class="card-header">
										<h3 class="card-title">Daily Vistors</h3>
										<div class="card-options ">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
										<div id="echart8" class="chartsh chart-dropshadow"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row mg-t-20">
							<div class="col-12">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title ">Projects</h3>
										<div class="card-options">
											<button id="add__new__list" type="button" class="btn btn-sm btn-success " data-toggle="modal" data-target=".bd-example-modal-lg"><i class="fa fa-plus"></i> Add a new Project</button>

										</div>
									</div>
									<div class="table-responsive">
										<table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
											<thead>
											  <tr>
												<th scope="col">ID</th>
												<th scope="col">Project Name</th>
												<th scope="col">Backend</th>
												<th scope="col">Deadline</th>
												<th scope="col">Team Members</th>
												<th scope="col">Edit Project Details </th>
												<th scope="col">list info</th>
											  </tr>
											</thead>
											<tbody>
											  <tr>
												<th scope="row">1</th>
												<td>At vero eos et accusamus et iusto odio</td>
												<td>PHP</td>
												<td>15/11/2018</td>
												<td>15 Members</td>
												<td>
													<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
													<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
												</td>
												<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
											  </tr>
											  <tr>
												<th scope="row">2</th>
												<td>voluptatum deleniti atque corrupti quos</td>
												<td>Angular js</td>
												<td>25/11/2018</td>
												<td>12 Members</td>
												<td>
													<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
													<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
												</td>
												<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
											  </tr>
											  <tr>
												<th scope="row">3</th>
												<td >dignissimos ducimus qui blanditiis praesentium </td>
												<td >Java</td>
												<td >5/12/2018</td>
												<td >20 Members</td>
												<td>
													<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
													<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
												</td>
												<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
											  </tr>
											  <tr>
												<th scope="row">4</th>
												<td >deleniti atque corrupti quos dolores  </td>
												<td >Phython</td>
												<td >14/12/2018</td>
												<td >10 Members</td>
												<td>
													<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
													<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
												</td>
												<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
											  </tr>
											  <tr>
												<th scope="row">5</th>
												<td >et quas molestias excepturi sint occaecati</td>
												<td >Phython</td>
												<td >4/12/2018</td>
												<td >17 Members</td>
												<td>
													<a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
													<a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
												</td>
												<td><a class="btn btn-sm btn-info" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
											  </tr>
											</tbody>
										  </table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
							Copyright © 2018 <a href="#">Plight</a>. Designed by <a href="#">Spruko</a> All rights reserved.
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->
		</div>
		<div class="modal  bd-example-modal-lg" tabindex="-1" role="dialog"  aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel2">Enter Project Details</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="card-body">
						<form>
							<div class="form-group">
								<label for="listname">Project name</label>
								<input type="text" class="form-control" name="listname" id="listname" placeholder="Enter your listname">
							</div>
							<div class="form-group">
								<label for="listname">Backend</label>
								<select name="Language" id="select-Language" class="form-control custom-select">
									<option value="ph" data-data="">PHP</option>
									<option value="aj" data-data="">Angular js</option>
									<option value="jv" data-data="">Java</option>
									<option value="nt" data-data="" selected="">.Net</option>
									<option value="py" data-data="" >Phython</option>
									<option value="js" data-data="" >Javascript</option>
									<option value="ui" data-data="" >UI Design</option>
								</select>
							</div>
							<div class="form-group">
								<label >Deadline</label>
								<input type="Date" name="Date" class="form-control"  >
							</div>
							<div class="form-group">
								<label for="listname">Team Members</label>
								<input type="text" class="form-control" name="listname" id="listname2" placeholder="How many Team memebers?">
							</div>
							<div class="form-group">
								<label for="listname">Description</label>
								<textarea class="form-control" name="example-textarea-input" rows="3" placeholder="text here.."></textarea>
							</div>
							<div class="form-group">
								<label>Add a list item</label>
								<div class="custom-file">
									<input type="file" class="custom-file-input" name="example-file-input-custom">
									<label class="custom-file-label">Choose file</label>
								</div>
							</div>
							<div class="form-group text-center">
								<button type="submit" class="btn btn-block btn-primary">Sign in</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Back to top -->
		<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

		<!-- Dashboard Core -->
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery-3.2.1.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery.sparkline.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/selectize.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/jquery.tablesorter.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/vendors/circle-progress.min.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/rating/jquery.rating-stars.js"></script>


		<!-- Echarts Js-->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/echarts/echarts.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/js/index1.js"></script>

		<!--Morris.js Charts Plugin -->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/am-chart/amcharts.js"></script>
		<script src="<?php echo base_url().'assets/'; ?>/plugins/am-chart/serial.js"></script>

		<!-- Fullside-menu Js-->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/toggle-sidebar/sidemenu.js"></script>

		<!-- Custom scroll bar Js-->
		<script src="<?php echo base_url().'assets/'; ?>/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- Custom Js-->
		<script src="<?php echo base_url().'assets/'; ?>/js/custom.js"></script>

	</body>

</html>