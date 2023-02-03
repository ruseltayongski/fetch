<x-layout>
	<section>
		@include('sweetalert::alert')
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
					<div class="login100-pic js-tilt" data-tilt>
						<img src="images/img-01.png" alt="IMG">
					</div>
	
					<form class="login100-form validate-form" method="POST" action="/users/authenticate">
						@csrf
						<span class="login100-form-title">
							Member Login
						</span>
	
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email" placeholder="Email" value="{{ old('email') }}">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>

							@error('email')
							<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
							@enderror
								
							
						</div>
	
						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input id="password-field" class="input100" type="password" name="password" placeholder="Password" value="{{ old('password') }}">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>

							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>

							@error('password')
							<p class="text-red-500 text-xs mt-1">{{ $message }}</p>
							@enderror
						</div>
						
						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Login
							</button>
						</div>
						
						<div class="text">
							<div class="text-center">
								<span class="txt1">
									Forgot
								</span>
								<a class="txt2" href="#">
									Username / Password?
								</a>
							</div>
							
							<div class="text-center">
								<a class="txt2" href="/register">
									Create your Account
									<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
								</a>
							</div>
							<div class="google">
								<p>Or</p>
							</div>
							<a href="{{ route('google-auth') }}">
								<div class="googleWrapper">
									<p>Log in With Google</p>
								</div>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</x-layout>


