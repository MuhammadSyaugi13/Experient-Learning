	<?php

class Database{

	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh;
	private $stmt;

	public function __construct()
		{
			//Data Source name (untuk konek ke database)
			$dsn =  'mysql:host='. $this->host .';dbname='.$this->db_name;

			// coba jalankan

			$option = [
					PDO::ATTR_PERSISTENT => true,
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

			];

			try{
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $option);

			}catch(PDOException $e){ //jika gagal maka hentikan dan beri pesan
				die($e->getMessage());

			}
		}


	// function untuk 	menjalakan query 

	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}


	//binding untuk kasih where atau into, set pada database

	public function bind($param, $value, $type=null)
	{
		if ( is_null($type) ) {
			switch (true) {
				case is_int($value):   //jika nilai nilai var valuenya interger
					$type = PDO::PARAM_INT; //Maka nilai var typenya ubah menjadi integer
					break;
				
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;

				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;

				default:
					$type = PDO::PARAM_STR;		
			}
		}

		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute()
	{
		$this->stmt->execute();
	}
	

	//jika data yang diambil semuanya
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}


	//jika data yang diambil cuma satu

	public function single()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function rowCount()
	{
		return $this->stmt->rowCount();
	}

}