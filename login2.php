<?php include_once './top_design.php'; 

$emailID = $_POST['emailID'] ;
$password1 = $_POST['password1'];
 
include_once './db_connector.php';
$sql = "SELECT * from signin_table WHERE emailID = :emailID AND password1= :password1";
$stmt = $pdo->prepare($sql);
$stmt->execute(["emailID"=>$emailID, "password1" =>$password1]);
$count = $stmt->rowCount();
$rows = $stmt->fetchAll(); 
if($count > 0){
    
    foreach ($rows as $row) { 
    $_SESSION['emailID_session'] = $row -> emailID;
    $_SESSION['firstName_session'] = $row -> firstName;
    $_SESSION['lastName_session'] = $row -> lastName; 
    
    }
     

     ?>
<script>
document.location="my_profile.php";    
</script> 


<?php
    
}  ?>

<?php include_once './bottom_design.php';?>