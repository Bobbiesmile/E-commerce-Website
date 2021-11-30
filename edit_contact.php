<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/>    
<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$emailID = $_POST["emailID"];
$contactAddress = $_POST["contactAddress"];
$contact_id = $_POST["contact_id"]; 
?>
<div class="main_container">
  <div class="left_container"> 
  <img src="images/reg.jpg" style="width: 98%;"/>
  </div>
         
     <div class="middle_container"> 
            <span>Contact Us </span>
            <form action="edit_contact2.php" method="POST">
           <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>"/> 
           <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>" />
           <input type="email" name="emailID" placeholder="Email ID" value="<?php echo $emailID; ?>"/>
           <textarea name="contactAddress" placeholder="Contact Address"><?php echo $contactAddress; ?></textarea>
           <input type="text" name="contact_id" placeholder="Contact ID" value="<?php echo $contact_id; ?>"/> 
           <button name="btnSend">Save</button> 
            </form>
        </div>
       
        


            
                
         
    </div>

<?php include_once "./bottom_design.php"?>