<?php include_once './top_design.php'; ?>


   
<?php if($emailD_new !== "admin@gmail.com"){ ?>
<script>
    document.location = "logout.php";
    </script>
<?php } ?>

<div class="category" name="product_category">
<form action="new2_stock.php" method="POST">
<input type="text" name="product_category" placeholder="Product Category"style="width:50%; height:30px; color:rgb(107, 110, 110) ;  margin-left:8%; margin-top:5%; border:1px #eee solid; font-weight:lighter;">

<button name="btn_send" id="button" style="width:30%; transition:.7s; height:30px;border-radius:20px; border:none;">Send</button>
</form>
</div>


   <style>
#button:hover{
background-color:#122;
color:#eee;
transition:.7s;
cursor:pointer;

}

   .category{
       width:50%;
       height:20vh;
       border:2px #eee solid;
       margin-left:30%;
       margin-top:3%;
    

   }


   </style>

   <?php include_once './bottom_design.php';?>