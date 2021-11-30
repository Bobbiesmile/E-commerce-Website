<?php include_once './top_design.php';
if(isset($_SESSION['emailID_session'])) {//Do nothing
    }
 else {
?>
<script>
document.location="logout.php";
</script>
<?php
}
?>

<div class="main_container">  

<h1>Welcome| <?php echo $firstName_new .' '.$lastName_new.' |'. $emailD_new; ?></h1>


<?php if($emailD_new === "admin@gmail.com"){ ?>
   
<br/><h1><a href='all_users.php'>All Users Here: <?php include_once './count_all_users.php';?></a></h1>
<h1><a href='all_items_on_cart.php'>All Items on Cart: <?php include_once './count_all_item_on_my_cart.php';?></a></h1><br/>
<h1><a href='send_email.php'> Send Email </h1></a>
<?php } ?>

</div>
<style>
h1{
    font-weight:lighter;
    padding: 10px 0px 0px;
    margin:0;
    font-size:20px;
    
}
.main_container{
text-align:center;
margin-top:10px;
}


</style>
<?php include_once './bottom_design.php';?>
