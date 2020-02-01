<?php 

class About {
	public function index($nama = 'Andrey', $pekerjaan = "mahasiswa")
	{

		echo "Halo Nama saya $nama, saya adalah seorang $pekerjaan";
	}
	public function page()
	{
		echo "about/page";
	}
}