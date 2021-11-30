<?php
if(isset($_POST['btnStock'])){
   $product_id = $_POST['p_id'];  
   $product_name = $_POST['p_name'];  
   $product_description = $_POST['p_description'];
   $product_category = $_POST['p_category'];
   $product_price = $_POST['p_price'];    
   $product_old_price = $_POST['p_old_price'];
   $product_icon = $_POST['p_icon']; 
  

if($product_icon==="Picture Changed"){
      
$name = $_FILES['productUrl']['name']; 
$tmp_name = $_FILES['productUrl']['tmp_name'];   
$fileExtension = pathinfo($name, PATHINFO_EXTENSION);         
if ($name) {
    $name = time();     
     $product_icon = "products_folder/$name.jpg"; 
    }      
 else {
         $product_icon = "products_folder/sample.png"; 
}      
move_uploaded_file($tmp_name, $product_icon);  
}

include_once './db_connector.php';
$sql = "UPDATE product_table SET product_name= :product_name, product_description= :product_description, product_category= :product_category, product_price= :product_price, product_old_price= :product_old_price, product_icon= :product_icon WHERE product_id= :product_id ";
$stmt = $pdo->prepare($sql);
$stmt->execute(["product_name"=>$product_name,"product_description"=>$product_description, "product_category"=>$product_category, "product_price"=>$product_price,"product_old_price"=>$product_old_price,"product_icon"=>$product_icon,"product_id"=>$product_id]); 
 ?>
<script>
document.location="all_products.php";
</script>
<?php
 
}
?>