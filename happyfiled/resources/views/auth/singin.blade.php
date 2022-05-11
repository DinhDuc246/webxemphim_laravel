<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.0/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 16:19:25 GMT -->
<head>
	<base href="{{asset('public/')}}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="{{asset('public/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    


	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('public/icon/favicon-32x32.png')}}" sizes="32x32">
	<link rel="apple-touch-icon" href="icon/favicon-32x32.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	
	<title>HotFlix – Online Movies, TV Shows & Cinema HTML Template</title>
</head>

<body class="body">

<?php
                      use Illuminate\Support\Facades\Session;
                            $message = Session::get('message');
                            if($message){
                              echo '  <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                         <center><strong>Hoàn Thành!</strong> '.$message.'</center>
                                      </div>';
                                Session::put('message',null);
                            }
                            ?>
	<div class="sign section--bg" data-bg="{{('public/backend/img/section/section.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
					
						<!-- authorization form -->
						<form action="{{URL::to('/Luu-login')}}" method="POST" >
							{{csrf_field()}}
							<a href="index.html" class="sign__logo">
								<h1 style="color: red"><a style="color: red" href="">PHIMLAU.NET</a></h1>
							</a>

							<div class="sign__group">
								<label for="exampleInputEmail1" style="font-size: 20px;color: white">Email</label>
								<input type="text" class="sign__input" name="email" placeholder="Email">
							</div>

							<div class="sign__group">
								 <label for="exampleInputEmail1"  style="font-size: 20px;color: white">pass</label>
								<input type="password" class="sign__input" name="pass" placeholder="Password">
							</div>
							<div class="sign__group">
								<label for="exampleInputEmail1"  style="font-size: 20px;color: white">phone</label>
								<input  class="sign__input" name="phone" placeholder="Phone">
							</div>
							<div class="sign__group">
								 <label for="exampleInputEmail1"  style="font-size: 20px;color: white">Name</label>
								<input  class="sign__input" name="name" placeholder="Name">
							</div>

							<div class="sign__group sign__group--checkbox">
								
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="submit">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="{{URL::to('/dangnhap')}}">Đăng Ký</a></span>

							<span class="sign__text"><a href="forgot.html">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- JS -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.mousewheel.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.min.js"></script>
	<script src="js/wNumb.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.morelines.min.js"></script>
	<script src="js/plyr.min.js"></script>
	<script src="js/photoswipe.min.js"></script>
	<script src="js/photoswipe-ui-default.min.js"></script>
	<script src="js/main.js"></script>
</body>

<!-- Mirrored from dmitryvolkov.me/demo/hotflix2.0/main/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Nov 2020 16:19:25 GMT -->
</html>