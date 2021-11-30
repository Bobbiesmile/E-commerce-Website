<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/>    
     

 
    <div class="main_container">

        <div class="left_container"> 
        <img src="images/reg.jpg" style="width: 98%;"/>
        </div>
         
        <div class="middle_container"> 
            <span>Contact Us </span>
<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" name="firstName" placeholder="First Name"/> 
<input type="text" name="lastName" placeholder="Last Name" />
<input type="email" name="emailID" placeholder="Email ID"/>
<textarea name="contactAddress" placeholder="Contact Address"></textarea>
<button name="btnSend">Send</button> 
</form>
           
<?php
include_once './db_connector.php';

if(isset($_POST['btnSend'])){
$firstName = $_POST['firstName']; 
$lastName = $_POST['lastName']; 
$emailD = $_POST['emailID']; 
$contactAddress = $_POST['contactAddress']; 

$contact_id = time();
 

$sql = "INSERT INTO contact_table (firstName,lastName,emailID,contactAddress, contact_id) VALUES(:firstName,:lastName,:emailID,:contactAddress, :contact_id)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["firstName"=>$firstName,"lastName"=>$lastName,"emailID"=>$emailD,"contactAddress"=>$contactAddress, "contact_id"=>$contact_id]); 
 
echo 'Your contact has been sent!'; 
}
?>
            
        </div>
       
        <div class="right_container"> 
         </div>


            
                
         
    </div>

<?php include_once './bottom_design.php'; ?>