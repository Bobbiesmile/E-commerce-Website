<?php include_once './top_design.php'; ?>

<?php
if(isset($_POST['btnAddToCart'])){

   $product_id = $_POST['product_id'];
   $buyer_email_id =$_SESSION['emailID_session'];
   $buyer_name =$_SESSION['firstName_session']." ".$_SESSION['lastName'];
   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];
   $product_category = $_POST['product_category'];
   $product_price = $_POST['product_price'];    
   $product_quantity = $_POST['product_quantity']; 
    $product_icon = $_POST['product_icon']; 
 
  
include_once './db_connector.php';
$sql = "INSERT INTO cart (product_id, buyer_email_id, buyer_name, product_name,product_description,product_category,product_price,product_quantity,product_icon) VALUES(:product_id,:buyer_email_id, :buyer_name, :product_name,:product_description,:product_category,:product_price,:product_quantity,:product_icon)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["product_id"=>$product_id, "buyer_email_id"=>$buyer_email_id, "buyer_name"=>$buyer_name, "product_name"=>$product_name,"product_description"=>$product_description, "product_category"=>$product_category, "product_price"=>$product_price,"product_quantity"=>$product_quantity,"product_icon"=>$product_icon]); 
?>
<script>
 document.location = "my_cart.php";
</script>
<?php }

?>


 <?php include_once './bottom_design.php'; ?>