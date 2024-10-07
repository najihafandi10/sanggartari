<?php if(Session::get('status') == "Anggota Baru"){ ?>
	@include('Website/pesan_pendaftaran')
<?php }elseif(Session::get('status') == 'Tidak Aktif'){ ?>
	@include('Website/pesan_nonaktif')
<?php }elseif(Session::get('status') == 'Aktif'){ ?>
	@include('Website/Halaman_anggota/home')
<?php }?>
