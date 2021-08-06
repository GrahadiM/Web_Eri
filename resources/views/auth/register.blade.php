<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ __('Registerasi') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('frontend') }}/img/core-img/favicon1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend') }}/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="container-login100" style="background-image: url('{{ asset('frontend') }}/img/BahanFoto/6.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf

				<span class="login100-form-title p-b-37">
					{{ __('Sign Up') }}
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Name">
					<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					<span class="focus-input100"></span>

					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter Email">
					<input class="input100 @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
					<span class="focus-input100"></span>

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
                <div class="wrap-input100 validate-input m-b-25" data-validate="Enter password">
					<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="password" required autocomplete="new-password">
					<span class="focus-input100"></span>

					@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter Konfirmasi Password">
					<input class="input100" type="password" name="password_confirmation" placeholder="Konfirmasi Password" required autocomplete="new-password">
					<span class="focus-input100"></span>
				</div>
				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
							{{ __('Sign Up') }}
					</button>
				</div>
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						{{ __('Or Create Account') }}
					</span>
				</div>
				<div class="text-center">
					<a href="{{ route('login') }}" class="txt2 hov1">
						{{ __('Sign In') }}
					</a>
				</div>
			</form>			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{ asset('frontend') }}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{ asset('frontend') }}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('frontend') }}/js/main.js"></script>

</body>
</html>