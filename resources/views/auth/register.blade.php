<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from laravel.spruko.com/dashtic/Leftmenu-Icon-DarkSidebar-ltr/register-3 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 13:40:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="Admin, Admin Template, Dashboard, Responsive, Admin Dashboard, Bootstrap, Bootstrap 4, Clean, Backend, Jquery, Modern, Web App, Admin Panel, Ui, Premium Admin Templates, Flat, Admin Theme, Ui Kit, Bootstrap Admin, Responsive Admin, Application, Template, Admin Themes, Dashboard Template"/>
		<!-- Title -->
<title>Dashtic - Bootstrap Webapp Responsive Dashboard Simple Admin Panel Premium HTML5 Template</title>
<!--Favicon -->
<link rel="icon" href="fuck/images/brand/favicon.ico" type="image/x-icon"/>
<!-- Bootstrap css -->
<link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />
<!-- Style css -->
<link href="fuck/css/style.css" rel="stylesheet" />
<!-- Dark css -->
<link href="fuck/css/dark.css" rel="stylesheet" />
<!-- Skins css -->
<link href="fuck/css/skins.css" rel="stylesheet" />
<!-- Animate css -->
<link href="fuck/css/animated.css" rel="stylesheet" />
<!---Icons css-->
<link href="assets/plugins/web-fonts/icons.css" rel="stylesheet" />
<link href="assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
<link href="assets/plugins/web-fonts/plugin.css" rel="stylesheet" />
	</head>

	<body class="h-100vh page-style1 dark-mode dark-sidebar">
				<div class="page">
			<div class="page-single">
				<div class="p-5">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-xl-8">
									<div class="card-group mb-0">
										<div class="card p-4 page-content">
											<div class="card-body page-single-content">
												<div class="w-100">
												<h1 class="mb-2">Register</h1>
												<p class="text-muted">Create New Account</p>
												<div class="btn-list d-sm-flex">
													<a href="https://www.google.com/gmail/" class="btn btn-google btn-block">Google</a>
													<a href="https://twitter.com/" class="btn btn-twitter d-block d-sm-inline mr-0 mr-sm-2">Twitter</a>
													<a href="https://www.facebook.com/" class="btn btn-facebook d-block d-sm-inline">Facebook</a>
												</div>
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
												<hr class="divider my-6">
												<div class="input-group mb-3">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 16c-2.69 0-5.77 1.28-6 2h12c-.2-.71-3.3-2-6-2z" opacity=".3"/><circle cx="12" cy="8" opacity=".3" r="2"/><path d="M12 14c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm-6 4c.22-.72 3.31-2 6-2 2.7 0 5.8 1.29 6 2H6zm6-6c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0-6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"/></svg></span>
													<input type="text" class="form-control" placeholder="Username" name="name" :value="old('name')" required autofocus autocomplete="name"/>
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 8l-8 5-8-5v10h16zm0-2H4l8 4.99z" opacity=".3"/><path d="M4 20h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2zM20 6l-8 4.99L4 6h16zM4 8l8 5 8-5v10H4V8z"/></svg></span>
													<input class="form-control" placeholder="Enetr Email" type="email" name="email" :value="old('email')" required />
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></span>
													<input type="password" class="form-control" placeholder="Password"name="password" required autocomplete="new-password" >
												</div>
												<div class="input-group mb-4">
													<span class="input-group-addon"><svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><g fill="none"><path d="M0 0h24v24H0V0z"/><path d="M0 0h24v24H0V0z" opacity=".87"/></g><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg></span>
													<input type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password" />
												</div>
												<div class="row">
													<div class="col-12">
														<button type="submit" class="btn  btn-lg btn-primary btn-block px-4"><i class="fe fe-arrow-right"></i> Create a new account</button>
													</div>

												</div>
                                                </form>
											</div>
											</div>
										</div>
										<div class="card text-white bg-primary py-5 d-md-down-none page-content mt-0">
											<div class="card-body text-center justify-content-center page-single-content">
												<img src="fuck/images/pattern/login.png" alt="img">
											</div>
										</div>
									</div>
									<div class="text-center pt-4">
										<div class="font-weight-normal fs-16">You Already have an account <a class="btn-link font-weight-normal" href="#">Login Here</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Jquery js-->
<script src="assets/js/vendors/jquery-3.5.1.min.js"></script>
<!-- Bootstrap4 js-->
<script src="assets/plugins/bootstrap/popper.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--Othercharts js-->
<script src="assets/plugins/othercharts/jquery.sparkline.min.js"></script>
<!-- Circle-progress js-->
<script src="assets/js/vendors/circle-progress.min.js"></script>
<!-- Jquery-rating js-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

	</body>

<!-- Mirrored from laravel.spruko.com/dashtic/Leftmenu-Icon-DarkSidebar-ltr/register-3 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Jul 2021 13:40:24 GMT -->
</html>
