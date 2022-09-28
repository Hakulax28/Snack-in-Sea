<?php
class Users
{

   private $conn;

   public function __construct($conn)
   {
      $this->conn - $conn;
   }
   private function query($sql)
   {
      return mysqli_query($this->conn, $sql);
   }

   public function getSingle($id)
   {
      $sql = "SELECT * FROM user WHERE id = $id";

      return mysqli_fetch_assoc(mysqli_query($this->query($sql)));
   }
   public function getAll()
   {
      $sql = "SELECT * FROM user";

      return mysqli_fetch_assoc(mysqli_query($this->query($sql)));
   }
}

$user = new Users($conn);
print_r($user->getSingle(1));
