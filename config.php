<?php
    $dsn = getenv('MYSQL_DSN');
    $user = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    if (!isset($dsn, $user) || false === $password) {
      throw new Exception('Set MYSQL_DSN, MYSQL_USER, and MYSQL_PASSWORD environment variables');
    }
    
    $db = new PDO($dsn, $user, $password);
    
    $statement = $db->prepare("select to execute");
    $statement->execute();
    $all = $statement->fethAll();
    
    foreach ($all as $data){
      echo $data["message"]."<br>";
    }
?>
