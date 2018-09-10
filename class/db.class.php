<?php class BDD {
	
	private $host = "localhost";
	private $username = "root";
	private $password = "root";
	private $database = "fromagerie";
	private $bdd;

 public function __construct($host = null, $username = null, $password = null, $database = null) {
 	if($host !=null){
 		$this->host =$host;
 		$this->username =$username;
 		$this->password =$password;
 		$this->database =$database;

 	}
 			try{
			$this->bdd = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password, array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
					PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
				));
		}catch(PDOException $e){
			die('<h1>Impossible de se connecter a la base de donnee</h1>');
		
}
 }










 public function insert($table, $columns, $values, $execute){
    $sql = "INSERT INTO
            $table ($columns)
            VALUES ($values)";
    $query = $this->bdd->prepare($sql);
    $query->execute($execute);
 }

      public function query($sql, $data=array()){
      $req = $this->bdd->prepare($sql);
      $req->execute($data);
      return ($req->fetchALL(PDO::FETCH_OBJ));

   }

      public function rowcount($sql, $donnees=array()){
      $req = $this->bdd->prepare($sql);
      $req->execute($donnees);
       return $req;


   }










}
