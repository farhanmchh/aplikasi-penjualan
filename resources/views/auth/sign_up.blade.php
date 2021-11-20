
<!DOCTYPE html>
<html lang="en">
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>{{ $title }}</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

		<link href="/css/login.css" rel="stylesheet" type="text/css" />
		<link href="/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<div class="d-flex flex-column flex-root">
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
					<div class="position-absolute top-0 right-0 text-right mt-5 mb-15 mb-lg-0 flex-column-auto justify-content-center py-5 px-10">
						<span class="font-weight-bold text-dark-50">Have an already account?</span>
						<a href="/" class="font-weight-bold ml-2" id="kt_login_signup">Sign In!</a>
					</div>
					<div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
						<div class="login-form login-signin">
							<div class="text-center mb-10 mb-lg-20">
								<h3 class="font-size-h1">Sign Up</h3>
								<p class="text-muted font-weight-bold">Fill it for Sign Up</p>
							</div>
							<form class="form" action="/registration" method="POST">
                @csrf
								<div class="form-group">
									<input class="form-control form-control-solid @error('username') is-invalid @enderror h-auto py-5 px-6" type="text" placeholder="Username" name="username" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control form-control-solid @error('email') is-invalid @enderror h-auto py-5 px-6" type="text" placeholder="Email" name="email" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control form-control-solid @error('password') is-invalid @enderror h-auto py-5 px-6" type="password" placeholder="Password" name="password" autocomplete="off" />
								</div>
								<div class="form-group">
									<input class="form-control form-control-solid h-auto py-5 px-6" type="password" placeholder="Repeat Password" name="repeat_password" autocomplete="off" />
								</div>
								<div class="form-group d-flex flex-wrap justify-content-end align-items-center">
									<button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign Up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>