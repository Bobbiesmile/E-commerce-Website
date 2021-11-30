<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/>    
<div class="main_container">

        <div class="left_container"> 
    
        
        </div>
         
        <div class="middle_container"> 
            <span><span class="fa fa-user-plus"></span> Send Mail </span>
            <form action="send_email2.php" method="POST">
            
           <input  type="text" name="subject" placeholder="Mail Subject"/> 
         <textarea name="mail_content"></textarea>
           <button class="btnSend1" name="btnSend">Send Now</button> 
            </form>
        </div>
</div>



<?php include_once './bottom_design.php';?>