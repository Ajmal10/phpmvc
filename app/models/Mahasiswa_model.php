<?php 


class Mahasiswa_model {
	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	public function tambahDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nrp, :email, :jurusan)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nrp', $data['nrp']);
		$this->db->bind('email', $data['email']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();
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