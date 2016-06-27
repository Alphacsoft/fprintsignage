@foreach ($pengumuman as $peng)
<div style="width: 1190px; margin-left: 50px;">
	<div style="margin-top: 10px; font-style: bold; font-family: Tw Cen MT; font-size: 17px;">Pengumuman : </div>
	<marquee><div style="font-style: bold; font-family: Tw Cen MT; font-size: 30px;"><% $peng->isi_peng %></div></marquee>
</div>
@endforeach