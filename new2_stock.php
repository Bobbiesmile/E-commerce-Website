<?php include_once './top_design.php'; ?>


<?php
     include_once './db_connector.php';

     if (isset($_POST['btn_send'])){
    // $product_id = $_POST['product_id'];
    $product_category = $_POST['product_category'];
   

   $sql = "INSERT INTO category_table ( product_category ) VALUES( :product_category )";

   $stmt = $pdo->prepare($sql);

   $stmt->execute(["product_category"=>$product_category]);
  echo '<h1 style="margin-left:40%; margin-top:50px; ">SENT!</h1>';

  

}
   ?>
<?php include_once './bottom_design.php'; ?>
