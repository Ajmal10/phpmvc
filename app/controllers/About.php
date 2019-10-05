<?php 

class About {
	public function index($nama = 'Ajmal', $pekerjaan = 'Pelajar')
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
	}
	public function page()
	{
		echo 'About/page';
	}
}