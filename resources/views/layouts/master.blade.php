<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>Celebratoo</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/plugins.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/templete.css') }}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{ asset('css/skin/skin-2.css') }}">
	
	
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper font-roboto">

	<!-- Modal LOGIN -->
		<div class="modal fade modal-bx-info" id="favorite" tabindex="-1" role="dialog" aria-labelledby="FavoriteModalLongTitle" aria-hidden="true">
			<div class="modal-dialog " role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="FavoriteModalLongTitle"><i class="la la-unlock"></i>LOGIN</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"><i class="la la-close"></i></span>
						</button>
					</div>
					<div class="modal-body">
						<div class="tab-content nav">
							<div id="login" class="tab-pane active">
								<form class="dlab-form">
									<div class="form-group">
										<input name="username" required="" class="form-control" placeholder="Votre email" type="text"/>
									</div>
									<div class="form-group">
										<input name="pwd" required="" class="form-control " placeholder="Votre mot de passe" type="password"/>
									</div>
									<div class="form-group field-btn text-left">
										
										<a data-toggle="tab" href="#forgot-password" class="btn-link forgot-password">  Mot de passe oublié</a>
									</div>
									<div class="form-group">
										<button class="site-button btn-block button-md">Se Connecter</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">Vous n'avez pas de compte ?  <a data-toggle="tab" href="#register" class="btn-link">Creer un compte</a> </p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Se Connecter via Facebook</a>
									</div>
								</form>
							</div>
							<div id="forgot-password" class="tab-pane fade">
								<form class="dlab-form">
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
									</div>
									<div class="form-group"> 
										<button class="site-button btn-block button-md">Get New Password</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login </a> | 
											<a data-toggle="tab" href="#register" class="btn-link">Register</a> 
										</p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
								</form>
							</div>
							<div id="register" class="tab-pane fade">
								<form class="dlab-form">
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Full Name" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Email Id" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Address" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="City/Town" type="text"/>
									</div>
									<h6 class="text-inherit m-b10">Enter your account details below: </h6>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="User Name" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Password" type="text"/>
									</div>
									<div class="form-group">
										<input name="dzName" required="" class="form-control" placeholder="Re-type Your Password" type="text"/>
									</div>
									<div class="form-group">
										<input type="checkbox" id="privacy-policy">
										<label for="privacy-policy">I agree to the <a href="#" class="btn-link">Terms of Service </a>& <a href="#" class="btn-link">Privacy Policy </a></label>
									</div>
									<div class="form-group"> 
										<button class="site-button button-md btn-block">Submit</button>
									</div>
									<div class="form-group">
										<p class="info-bottom">
											<a data-toggle="tab" href="#login" class="btn-link">Login with username and password?</a> 
										</p>
									</div>
									<div class="text-center">
										<a href="#" class="site-button facebook button-md btn-block"><i class="fa fa-facebook-official m-r10"></i> Log in with Facebook</a>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal End -->

@yield('content')

<!-- Footer -->
    <footer class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <img src="{{ Voyager::image( setting('admin.loader') ) }}" class="m-b15" alt="" width="180">
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="javascript:void(0);" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-5 col-md-7 col-sm-12 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">A propos</h5>
                            <ul class="list-2 list-line">
                                <li><a href="javascript:void(0);">Qui sommes-nous?</a></li>
                                <li><a href="javascript:void(0);">Devenir Partenaire</a></li>
                                <li><a href="javascript:void(0);">Politique d'annulation</a></li>
                                <li><a href="javascript:void(0);">Recrutement</a></li>

								<li><a href="javascript:void(0);">Aide & F.A.Q.</a></li>
                                <li><a href="javascript:void(0);">Informations légales </a></li>
                                <li><a href="javascript:void(0);">Nous contacter</a></li>
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white">Contact us</h5>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 SAFI Road Chi Minh City, Maroc </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support)</li>
								<li><i class="ti-email"></i><strong>email</strong>info@example.com</li>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
        </div>
		<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
						<span class="fbottom-like">© 2022  <a class="like-btn" href="javascript:void(0)"><i class="fa fa-heart"></i></a>Celebratoo  </span>
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->

    <button class="scroltop fa fa-chevron-up" ></button>
</div>


</div>
<!-- JAVASCRIPT FILES ========================================= -->

<script src="{{ asset('js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
<script src="{{ asset('plugins/bootstrap/js/popper.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
<script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script><!-- FORM JS -->
<script src="{{ asset('plugins/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
<script src="{{ asset('plugins/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
<script src="{{ asset('plugins/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
<script src="{{ asset('plugins/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
<script src="{{ asset('plugins/masonry/masonry-3.1.4.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/masonry/masonry.filter.js') }}"></script><!-- MASONRY -->
<script src="{{ asset('plugins/rangeslider/rangeslider.js') }}"></script><!-- RANGESLIDER -->
<script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script><!-- OWL SLIDER -->
<script src="{{ asset('js/custom.js') }}"></script><!-- CUSTOM FUCTIONS  -->
<script src="{{ asset('js/dz.carousel.js') }}"></script><!-- SORTCODE FUCTIONS  -->
<script src="{{ asset('js/dz.ajax.js') }}"></script><!-- CONTACT JS  -->
<script src="{{ asset('plugins/particles/particles.js') }}"></script>
<script src="{{ asset('plugins/particles/particles.app.js') }}"></script>
<script src="{{ asset('js/menuJs.js') }}"></script>

  <script type="text/javascript">
		 $(document).ready(function(){
		  $('[data-toggle="tooltip"]').tooltip();
		});
</script>
</body>
</html>