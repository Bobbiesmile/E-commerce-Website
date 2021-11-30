<?php include_once './top_design.php'; ?>

<?php $emailID = $_POST['emailID'];
 include_once './db_connector.php';
$sql = "DELETE FROM signin_table WHERE emailID = :emailID";
$stmt = $pdo->prepare($sql);
$stmt->execute(["emailID"=>$emailID]); ?>

<script>
document.location = "all_users.php";
</script>  

<?php include_once './bottom_design.php'; ?>