<?php

$q = $_GET['q'];

include_once './db_connector.php';
if(strlen($q)>0){
    $sql = "SELECT * FROM product_table WHERE product_category LIKE :product_category OR product_name LIKE :product_name";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["product_category"=>"%".$q."%","product_name"=>"%".$q."%"]);
    $count = $stmt->rowCount();
    $rows = $stmt->fetchAll(); 
    if($count < 1){
        echo '<div style="margin:14px 0px 14px 0px; color:#ccc;"><center>No Products Found</center></div>';

    }
    foreach ($rows as $row){
        echo "<a href='product_detail.php?product_id=$row->product_id'> <li class='searchResult_list' >".$row->product_name."</li></a>";


    }} ?>
  
<style>
.searchResult_list{
    color:#eee;
    padding:8px;
}
.searchResult_list{

}
</style>
