<?php 
session_start();

 
include_once './db_connector.php';
    $sql_count = "SELECT count(*) AS 'c' FROM signin_table";
    $stmt_count = $pdo->prepare($sql_count);
    $stmt_count->execute();
    // $count = $stmt->rowCount();
    $rows_count = $stmt_count->fetchAll(); 
  
   foreach ($rows_count as $row_count) {
 echo $row_count->c; 
 } ?>