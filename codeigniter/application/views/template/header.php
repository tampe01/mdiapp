<div class="app-header header py-1 d-flex">
					<div class="container-fluid">
						<div class="d-flex">
							<a class="header-brand" href="index">MDI
								<img src="<?php echo base_url().'assets/'; ?>/images/brand/nsia-logo.png" class="header-brand-img" alt="Plight logo">
							</a>
							<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
							<div class="mt-2">
								<div class="searching mt-3 ml-2">
									<a href="javascript:void(0)" class="search-open mt-3">
										<i class="fa fa-search text-white"></i>
									</a>
									<div class="search-inline">
										<form>
											<input type="text" class="form-control" placeholder="Search here">
											<button type="submit">
												<i class="fa fa-search"></i>
											</button>
											<a href="javascript:void(0)" class="search-close">
												<i class="fa fa-times"></i>
											</a>
										</form>
									</div>
								</div>
							</div>
							<div class="d-flex order-lg-2 ml-auto">
								<div class="dropdown d-none d-md-flex mt-1" >
									<a  class="nav-link icon full-screen-link">
										<i class="fe fe-maximize floating"  id="fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-none d-md-flex mt-1">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell floating"></i>
										<span class="nav-unread bg-danger"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-thumbs-o-up"></i>
											</div>
											<div>
												<strong>Someone likes our posts.</strong>
												<div class="small text-muted">3 hours ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-commenting-o"></i>
											</div>
											<div>
												<strong> 3 New Comments</strong>
												<div class="small text-muted">5  hour ago</div>
											</div>
										</a>
										<a href="#" class="dropdown-item d-flex pb-3">
											<div class="notifyimg">
												<i class="fa fa-cogs"></i>
											</div>
											<div>
												<strong> Server Rebooted.</strong>
												<div class="small text-muted">45 mintues ago</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<a href="#" class="dropdown-item text-center">View all Notification</a>
									</div>
								</div>
								<div class="dropdown d-none d-md-flex mt-1">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-grid floating"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow p-0">
										<ul class="drop-icon-wrap p-0 m-0">
											<li>
												<a href="email.html" class="drop-icon-item">
													<i class="fe fe-mail"></i>
													<span class="block"> E-mail</span>
												</a>
											</li>
											<li>
												<a href="calendar2.html" class="drop-icon-item">
													<i class="fe fe-calendar"></i>
													<span class="block">calendar</span>
												</a>
											</li>
											<li>
												<a href="maps.html" class="drop-icon-item">
													<i class="fe fe-map-pin"></i>
													<span class="block">map</span>
												</a>
											</li>
											<li>
												<a href="cart.html" class="drop-icon-item">
													<i class="fe fe-shopping-cart"></i>
													<span class="block">Cart</span>
												</a>
											</li>
											<li>
												<a href="chat.html" class="drop-icon-item">
													<i class="fe fe-message-square"></i>
													<span class="block">chat</span>
												</a>
											</li>
											<li>
												<a href="profile.html" class="drop-icon-item">
													<i class="fe fe-phone-outgoing"></i>
													<span class="block">contact</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="dropdown mt-1">
									<a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
										<span class="avatar avatar-md brround" style="background-image: url(<?php echo base_url().'assets/'; ?>/images/faces/nsia.png)"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
										<div class="text-center">
											<a href="#" class="dropdown-item text-center font-weight-sembold user"><?php echo $user->first_name . '' . $user->last_name ; ?></a>
											<span class="text-center user-semi-title text-dark">web designer</span>
											<div class="dropdown-divider"></div>
										</div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-account-outline "></i> Profile
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon  mdi mdi-settings"></i> Settings
										</a>
										<a class="dropdown-item" href="#">
											<span class="float-right"><span class="badge badge-primary">6</span></span>
											<i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
										</a>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
										</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">
											<i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
										</a>
										<a class="dropdown-item" href="<?php echo site_url().'/auth/logout'; ?>">
											<i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>