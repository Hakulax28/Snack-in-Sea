<?php
// Database configuratie
//$host  = "localhost";
//$dbuser = "root";
//$dbpass = "";
//$dbname = "snackbartest";

// Maak een  database connectie
//$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

class Database
{
   public $host  = "localhost";
   public $dbuser = "root";
   public $dbpass = "";
   public $dbname = "snackbartest";

   private $conn;

   public function __construct()
   {
      $this->conn = mysqli_connect($this->host, $this->dbuser, $this->dbpass, $this->dbname);
   }
   public function getConnection()
   {
      return $this->conn;
   }
}

$databaseConnection = new Database();
$conn = $databaseConnection->getConnection();
