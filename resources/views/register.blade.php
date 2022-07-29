<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Absensi | {{ $title }}</title>

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="/">
					<h1>MIGogourung</h1>
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="/login">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">{{ $title }}</h2>
							{{-- @if (session()->has('loginError'))
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
									{{ session('loginError') }}
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							@endif --}}
						</div>
						<form action="/register" method="POST">
						@csrf
							{{-- <div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>I'm</span>
										Manager
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
										<span>I'm</span>
										Employee
									</label>
								</div>
							</div> --}}
							<div class="input-group custom">
								<input name="email" type="email" class="form-control form-control-lg" placeholder="Alamat Email">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input name="password" type="password" class="form-control form-control-lg" placeholder="Password">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $title }}">
										{{-- <a class="btn btn-primary btn-lg btn-block" href="#">{{ $title }}</a> --}}
									</div>
									<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">Atau</div>
									<div class="input-group mb-0">
										<a class="btn btn-outline-primary btn-lg btn-block" href="/login">Sudah Mempunyai Akun?</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				{{-- <div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard" action="/register" method="POST">
								@csrf
								<h5>Informasi Akun</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">E-mail</label>
											<div class="col-sm-8">
												<input name="email" type="email" class="form-control" value="{{ old('email') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Password</label>
											<div class="col-sm-8">
												<input name="password" type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Konfirmasi Password</label>
											<div class="col-sm-8">
												<input name="password1" type="password" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">No. Telfon</label>
											<div class="col-sm-8">
												<input name="phone" type="text" class="form-control" value="{{ old('phone') }}">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<h5>Informasi Pribadi</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nomor Induk Kependudukan</label>
											<div class="col-sm-8">
												<input name="nik" type="text" class="form-control" value="{{ old('nik') }}">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Nama Lengkap</label>
											<div class="col-sm-8">
												<input name="nama" type="text" class="form-control" value="{{ old('nama') }}">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Jenis Kelamin</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="jns_kelamin" class="custom-control-input">
													<label class="custom-control-label" for="male">Laki-laki</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="jns_kelamin" class="custom-control-input">
													<label class="custom-control-label" for="female">Perempuan</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Alamat</label>
											<div class="col-sm-8">
												<input name="alamat" type="text" class="form-control" value="{{ old('alamat') }}">
											</div>
										</div>
									</div>
								</section>
								<button type="submit" id="success-modal-btn" hidden data-backdrop="static">Simpan</button>
							</form>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- success Popup html Start -->
	{{-- <button type="button" id="success-modal-btn" hidden data-toggle="modal" data-target="#success-modal" data-backdrop="static">Launch modal</button>
	<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered max-width-400" role="document">
			<div class="modal-content">
				<div class="modal-body text-center font-18">
					<h3 class="mb-20">Form Submitted!</h3>
					<div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				</div>
				<div class="modal-footer justify-content-center">
					<button type="submit" class="btn btn-primary">Done</button>
				</div>
			</div>
		</div>
	</div> --}}
	<!-- success Popup html End -->
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>