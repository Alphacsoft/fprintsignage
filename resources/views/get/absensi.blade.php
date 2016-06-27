@extends('layout')
@section('title')
	Absensi
@endsection
@section('isiHeader')

	<script src="<% URL::asset('../component/js/change.js') %>"></script>
	<div class="form-group" style="margin-left: 100px; margin-right: 20px; float: left;">
		<label for="tampil" style="font-family: Arial;">Tampilkan</label>
		<select id="select" class="form-control" style="width: 200px;" >
			<option id="select">Hari Ini</option>
			<option id="select">Kemarin</option>
			<option id="select">Pilih Tanggal</option>
		</select>
	</div>
	<div class="form-gorup" style="margin-left: 20px;" id="tgl">
		
	</div>
@endsection
@section('isi')
	<iframe src="/dataabsen" style="border: none; width: 100%; height: 460px; overflow: hidden;" scrolling="no"></iframe>
@endsection
@section('pengumuman')
	<iframe src="/pengumuman" style="border: none; width: 100%; height: 90px; overflow: hidden;" scrolling="no"></iframe>
@endsection