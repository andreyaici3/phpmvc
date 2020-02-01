<?php 

class About {
	public function index($nama = 'Andrey', $pekerjaan = "mahasiswa", $umur = 18)
	{

		echo "Halo Nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun";
	}
	public function page()
	{
		echo "about/page";
	}
}