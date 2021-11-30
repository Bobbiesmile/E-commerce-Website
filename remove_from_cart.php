<?php include_once './top_design.php'; ?>

<?php $cart_id = $_POST['cart_id'];
 include_once './db_connector.php';
$sql = "DELETE FROM cart WHERE cart_id = :cart_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(["cart_id"=>$cart_id]); ?>

<script>
document.location = "my_cart.php";
</script>  

<?php include_once './bottom_design.php'; ?>