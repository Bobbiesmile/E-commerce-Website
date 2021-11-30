<?php 
session_start();
$buyer_email_id = $_SESSION['emailID_session'];
 
include_once './db_connector.php';
    $sql_count = "SELECT sum(product_quantity) AS 'qty' FROM cart WHERE buyer_email_id =:buyer_email_id";
    $stmt_count = $pdo->prepare($sql_count);
    $stmt_count->execute(["buyer_email_id"=>$buyer_email_id]);
    // $count = $stmt->rowCount();
    $rows_count = $stmt_count->fetchAll(); 
  
   foreach ($rows_count as $row_count) {
 echo $row_count->qty; 
 } ?>