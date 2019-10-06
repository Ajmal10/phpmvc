<?php 

class About {
	public function index($nama = 'Ajmal', $pekerjaan = 'Pelajar', $umur = 20)
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan. Saya berumur $umur tahun";
	}
	public function page()
	{
		echo 'About/page';
	}
}