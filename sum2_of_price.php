<?php 
session_start();
$buyer_email_id = $_SESSION['emailID_session'];
 
include_once './db_connector.php';
    $sql_count = "SELECT sum(product_price) AS 'price' FROM cart ";
    $stmt_count = $pdo->prepare($sql_count);
    $stmt_count->execute();
    // $count = $stmt->rowCount();
    $rows_count = $stmt_count->fetchAll(); 
  
   foreach ($rows_count as $row_count) {
echo  number_format ( $row_count->price); 
 } ?>