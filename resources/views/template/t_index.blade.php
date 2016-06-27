<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<% URL::asset('component/img/logo.png') %>">
	<title>@yield('title') - FingerPrint</title>

	<link rel="stylesheet" type="text/css" href="<% URL::asset('component/css/bootstrap.min.css') %>" media="screen">
	<link rel="stylesheet" type="text/css" href="<% URL::asset('component/alphacss/alpha.css') %>" media="screen">

	<script src="<% URL::asset('component/js/jquery.min.js') %>"></script>
	<script src="<% URL::asset('component/js/bootstrap.min.js') %>"></script>
</head>
<body>
	<nav class="navbar navbar-fixed-top alpha-card-4" style="background-color: #0052cc; color: #fff;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="" class="navbar-brand">SMK NEGERI 1 SELONG</a> 				
			</div>
			<ul class="nav navbar-nav" style="margin-left: 50%;">
				<li class="active"><a href="absensi"><span class="glyphicon glyphicon-list"></span> Absensi</a></li>
				<li><a href=""><span class="glyphicon glyphicon-book"></span> Data Guru</a></li>
				<li><a href=""><span class="glyphicon glyphicon-book"></span> Data Karyawan</a></li>
			</ul>			
		</div>
	</nav>
	<nav class="navbar navbar-fixed-top" style="margin-left: 42%; margin-right: 40%;">
		<div class="container-fluid">
			<img src="<% URL::asset('component/img/logo.png') %>" style="width: 150px; margin-top: -10px;">	
		</div>
	</nav>
	<div style="margin-top: 80px; width: 100%; height: 80px; padding-left: 20px;">
		@yield('isiHeader')
	</div>
	<div style="width: 100%; height: 520px; padding-left: 20px;">
		@yield('isi')
	</div>
	<nav class="navbar navbar-fixed-bottom alpha-light-grey" style="margin-bottom: 50px; height: 90px;">
		@yield('pengumuman')
	</nav>
	<nav class="navbar navbar-fixed-bottom" style="background-color: #0052cc; color: #fff;">
		<div style="margin-top: 13px; margin-left: 42%;"><a href="http://stthamzanwadi.ac.id" style="text-decoration: none;" target="blank">© STT Hamzanwadi - 2016</a></div>
	</nav>
</body>
</html>