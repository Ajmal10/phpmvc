<?php 


class Mahasiswa_model {

	private $dbh; // database handler
	private $stmt;

	public function __construct()
	{
		// data source name
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root', '');
		} catch(PDOException $e) {
			die($e->getMassage());
		}
	}

	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	// private $mhs = [
	// 	[ 
	// 		"nama" => "Levandri Ajmal",
	// 		"nrp" => "173040147",
	// 		"email" => "Levandriajmal@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Ahmad Fauzan",
	// 		"nrp" => "173040148",
	// 		"email" => "AhmadFauzan@gmail.com",
	// 		"jurusan" => "Teknik Mesin"
	// 	],
	// 	[
	// 		"nama" => "Fauzan Ajmal",
	// 		"nrp" => "173040149",
	// 		"email" => "Fauzanajmal@gmail.com",
	// 		"jurusan" => "Teknik Lingkungan"
	// 	]
	// ];

	// public function getAllMahasiswa()
	// {
	// 	return $this->mhs;
	// }
}