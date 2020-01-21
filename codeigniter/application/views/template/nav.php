<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body">
							<div>
								<img src="<?php echo base_url().'assets/'; ?>/images/faces/nsia.png" alt="user-img" class="avatar avatar-md brround">
							</div>
							<div class="user-info">
								<div class="mb-2">
								<a href="#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold text-white"><?php echo $user->first_name . '' . $user->last_name ; ?></span>  </a>
								<br><span class="text-gray">Ui Designer</span>
								</div>
								<a href="#" title="settings" class="user-button"><i class="fa fa-cogs"></i></a>
								<a href="#" title="mail" class="user-button"><i class="fa fa-envelope"></i></a>
								<a href="#" title="logout" class="user-button"><i class="fa fa-sign-out"></i></a>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tachometer"></i><span class="side-menu__label">Home</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="<?php echo site_url('Home/'); ?>">Dashboard 01</a></li>
							</ul>
						</li>
						<li class="slide" hidden>
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bandcamp"></i><span class="side-menu__label">UI Kit</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="alerts.html" class="slide-item">Alerts</a>
								</li>
								<li>
									<a href="buttons.html" class="slide-item">Buttons</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text-o"></i><span class="side-menu__label">MDI</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo site_url('Mdidata/add_new'); ?>" class="slide-item">Charger un fichier</a>
								</li>
							</ul>
						</li>

						<li class="slide" hidden>
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-lock"></i><span class="side-menu__label">Account</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="login.html" class="slide-item">Login</a>
								</li>
								<li>
									<a href="register.html" class="slide-item">Register</a>
								</li>
								<li>
									<a href="forgot-password.html" class="slide-item">Forgot password</a>
								</li>
								<li>
									<a href="lockscreen.html" class="slide-item">Lock screen</a>
								</li>

							</ul>
						</li>

					</ul>
				</aside>