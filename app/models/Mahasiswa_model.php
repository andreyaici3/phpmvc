<?php 

class Mahasiswa_model {
	// private $mhs = [
	// 	[
	// 		"nama" => "Andrey Andriansyah",
	// 		"nim" => "20190810004",
	// 		"email" => "andreyandri90@gmail.com",
	// 		"jurusan" => "Teknik Informatika"
	// 	],
	// 	[
	// 		"nama" => "Gugun Rizal Nugraha",
	// 		"nim" => "20190810005",
	// 		"email" => "gunriz@gmail.com",
	// 		"jurusan" => "Teknik Industri"
	// 	],
	// 	[
	// 		"nama" => "Vidy Ferdiansyah",
	// 		"nim" => "20190810006",
	// 		"email" => "vidy@gmail.com",
	// 		"jurusan" => "Teknik Mesin"
	// 	]
	// ];


	private $dbh;//databse handler
	private $stmt;

	public function __construct()
	{
		//data source nama
		$dsn = 'mysql:host=localhost;dbname=phpmvc';

		try {
			$this->dbh = new PDO($dsn, 'root','');
		} catch (PDOException $e){
			die($e->getMessage());
		}
	}


	public function getAllMahasiswa()
	{
		$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
		$this->stmt->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

}