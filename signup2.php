<?php include_once './top_design.php';?>

<?php
include_once './db_connector.php';

if(isset($_POST['btnSend'])){
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$emailD = $_POST['emailID']; 
$password1 = $_POST['password1']; 

$sql = "INSERT INTO signin_table (firstName,lastName,emailID,password1) VALUES(:firstName,:lastName,:emailID,:password1)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName,"emailID"=>$emailD,"password1"=>$password1]); 
 
echo 'Your contact has been sent!';
?>
<script>
document.location = "my_profile.php";
</script>
    <?php
}
?>




<?php include_once './bottom_design.php'; ?>