

<!doctype html>
<html lang="en">
  <head>
  	<title>Register </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{asset("assets/front/css/style1.css")}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Register</h2>
								{{-- <p>Do have an account?</p> --}}
								<a href="{{ route('login') }}" class="btn btn-white btn-outline-white">Already registered?</a>
                               
                            </div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h2 class="mb-4">Sign Up</h2>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
                      </div>
                      
       <!-- Validation Errors -->
       <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}" class="signin-form">
            @csrf
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Name</label>
                              <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                            </div>
                          <div class="form-group mb-3">
                            <label class="label" for="email">Email</label>
                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Password</label>
                            <x-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" /></div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password_confirmation">Confirm Password</label>
                        <x-input id="password_confirmation" class="form-control"
                                type="password"
                                name="password_confirmation" required />
		            </div>
		            <div class="form-group">
                        <x-button class="form-control btn btn-primary submit px-3">
                            {{ __('Register') }}
                        </x-button>
                    </div>
        </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset("assets/front/js/jquery.min.js")}}"></script>
  <script src="{{asset("assets/front/js/popper.js")}}"></script>
  <script src="{{asset("js/bootstrap.min.js")}}"></script>
  <script src="{{asset("js/main.js")}}"></script>

	</body>
</html>




        

    
