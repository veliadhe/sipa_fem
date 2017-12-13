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
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
						<div class="clear"> </div>
					</ul>
					<div class="resp-tabs-container">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<div class="login-top">
								<form class="form-horizontal" method="POST" action="{{ route('login') }}">
									{{ csrf_field() }}

									<label for="email"></label>
										<input type="text" class="email" name="email" placeholder="Email/Username" required autofocus/>

									<label for="password"></label>
										<input type="password" class="password" name="password" placeholder="Password" required/>

									<input type="checkbox" id="brand" value="">
									<label for="brand"><span></span> Remember me?</label>
								<div class="login-bottom">
									<ul>
										<li>
											<input href="{{ route('login')}}" type="submit" value="LOGIN"/>
										</li>
										<li>
											<a href="{{ route('password.request') }}">Forgot password?</a>
										</li>
									<ul>
									<div class="clear"></div>
								</div>
								</form>
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
