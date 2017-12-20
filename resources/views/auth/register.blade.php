<!DOCTYPE html>
<html>
<head>
<title>SIPA FEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Account Login Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href="{{ asset ('assets/login/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<script src="{{ asset ('assets/login/js/jquery-1.11.1.min.js') }}"></script>

<script src="{{ asset ('assets/login/js/Chart.js') }}"></script>

<script src="{{ asset ('assets/login/js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	   </script>
</head>
<body>
<div class="content">
	<h1>Selamat Datang</h1>
		<div class="main">
			<div class="profile-left wthree">
				<div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign UP</span></li>
						<div class="clear"> </div>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
							<div class="login-top sign-top">
								<form action="{{ route('register') }}" method="POST">
									{{ csrf_field() }}
									<label for="name"></label>
										<input type="text" class="form-control" name="name" placeholder="Name" required/>

									<label for="email"></label>
										<input type="text" class="form-control" name="email" placeholder="Email" required/>

									<label for="username"></label>
										<input type="text" class="form-control" name="username" placeholder="Username" required=""/>

									<label for="nrp"></label>
										<input type="text" class="form-control" name="nrp" placeholder="NIM" required=""/>

									<label for="tempat_lahir"></label>
										<input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required=""/>

									<label for="tanggal_lahir"></label>
										<input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" required=""/>

									<label for="departemen"></label>
										<input type="text" class="form-control" name="departemen" placeholder="Departemen" required=""/>

									<label for="alamat"></label>
										<input type="text" class="form-control" name="alamat" placeholder="Alamat" required=""/>

									<label for="no_hp"></label>
										<input type="text" class="form-control" name="no_hp" placeholder="Nomor HP" required=""/>

									<label for="password"></label>
										<input type="password" class="password" name="password" placeholder="Password" required=""/>

									<label for="password_confirmation"></label>
										<input type="password" class="password"  name="password_confirmation" placeholder="Confirm Password" required=""/>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span> Remember me?</label>
									<input type="submit" value="SIGN UP"/>
								</form>
								<div class="login-bottom">
									<ul>
										<li>
											<a href="{{ route('password.request') }}">Forgot password?</a>
										</li>
									<ul>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"> </div>
			</div>
			</div>
			<div class="clear"> </div>
	</div><br/>
	<p class="footer">2017 &copy; Tim 10 Sistem Informasi</p>
</div>
</body>
</html>
