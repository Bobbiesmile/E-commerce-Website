<?php
$host = "127.0.0.1"; 
$port=3306;
$username = "root";
$passwd = "";
$dbname = "shop_db"; 
//$numbering = 0;
try {  
    
 $dsn = "mysql:host=$host;port=$port; dbname=$dbname"; 
 $pdo = new PDO($dsn, $username, $passwd);
$pdo->setAttribute(PDO:: ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ); 
 
 
// echo 'Connected...';
} catch (Exception $exc) {
    echo "An error has ocured: ". $exc->getTraceAsString();
}
?>