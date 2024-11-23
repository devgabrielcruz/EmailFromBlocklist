<?php 

 $serv = "localhost";
  $user = "root";
  $pass = "";
  $db = "blacklistdb";

  $db_connection = new mysqli($serv, $user, $pass, $db);

  if ($db_connection->connect_error) {
      die("Conexão falhou: " . $db_connection->connect_error);
  }

?>