        
<?php
include_once './db_connector.php';

if(isset($_POST['btnSend'])){
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$emailD = $_POST['emailID']; 
$contactAddress = $_POST['contactAddress']; 
$contact_id = $_POST['contact_id'];
 

$sql = "UPDATE contact_table SET firstName= :firstName, lastName= :lastName, contactAddress = :contactAddress WHERE contact_id= :contact_id ";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName,"contactAddress"=>$contactAddress, "contact_id"=>$contact_id]); 
 ?>
<script>
// document.location="all_contacts.php";
</script>
<?php
 
}
?>