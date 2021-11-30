<?php include_once './top_design.php'; ?>

<?php $product_id = $_POST['product_id'];
 include_once './db_connector.php';
$sql = "DELETE FROM product_table WHERE product_id = :product_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(["product_id"=>$product_id]); ?>

<script>
document.location = "all_products.php";
</script>  

<?php include_once './bottom_design.php'; ?>