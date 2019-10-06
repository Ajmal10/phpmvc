<?php 


class Mahasiswa_model {
	private $mhs = [
		[ 
			"nama" => "Levandri Ajmal",
			"nrp" => "173040147",
			"email" => "Levandriajmal@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Ahmad Fauzan",
			"nrp" => "173040148",
			"email" => "AhmadFauzan@gmail.com",
			"jurusan" => "Teknik Mesin"
		],
		[
			"nama" => "Fauzan Ajmal",
			"nrp" => "173040149",
			"email" => "Fauzanajmal@gmail.com",
			"jurusan" => "Teknik Lingkungan"
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}