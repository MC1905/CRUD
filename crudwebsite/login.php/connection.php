<?php
  
$connect = "";
   
try {
    $servername = "localhost:3306";
    $dbname = "loginPage";
    $username = "root";
    $password = "";
   
    $connect = new PDO(
        "mysql:host=$servername; dbname=loginPage",
        $username, $password
    );
      
   $connect->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
  
?>