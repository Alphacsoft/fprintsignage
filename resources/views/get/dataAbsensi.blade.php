<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="<% URL::asset('/component/img/logo.png') %>">
	<title>@yield('title') - FingerPrint</title>

	<link rel="stylesheet" type="text/css" href="<% URL::asset('/component/css/bootstrap.min.css') %>" media="screen">
	<link rel="stylesheet" type="text/css" href="<% URL::asset('/component/alphacss/alpha.css') %>" media="screen">

	<script src="<% URL::asset('../component/js/jquery.min.js') %>"></script>
	<script src="<% URL::asset('../component/js/bootstrap.min.js') %>"></script>
	<script src="<% URL::asset('../component/js/auto.js') %>"></script>
</head>
<body>
<div class="container" style="overflow: auto;">
		<table class="table table-hover" style="font-family: Arial;">
			<thead>
				<th>No</th>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Waktu Datang</th>
				<th>Waktu Pulang</th>
			</thead>
			<tbody>
			<div id="top">
				<?php $no = 1; ?>
				@foreach ($data as $absen)
				<tr>
					<td><% $no++ %></td>
					<td><% $absen->nama %></td>
					<td><% $absen->jabatan %></td>
					<td><% $absen->datang %></td>
					<td><% $absen->pulang %></td>
				</tr>
				@endforeach
				</div>
			</tbody>
		</table>
	</div>
</body>
</html>