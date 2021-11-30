<?php include_once './top_design.php'; 
 
$buyer_email_id = $_SESSION['emailID_session'];
?>


   
<div class="product_page_div">
<h3 style="margin-left: 1%; 
    margin-bottom: 0px; color: #969696; text-transform: uppercase; font-weight: lighter;">
     Items on my Cart:<?php include './count_item_on_my_cart.php';?>
     <div> 
             Total Price of items:  &#8358;<?php include_once './sum_of_price.php';?>
             </div>
             <a href='check_out.php' ><button class="checkout"><h2>CHECKOUT</h2></button></a>
    </h3>
<style>

.checkout{
    width:20%;
    border:none;
    color:#026ae6;
    border-radius:5px;
}

.checkout:hover{
    cursor:pointer;
    background-color:#026ea0;
    color:#eee;
    transition:.7s;
}


</style>

<?php 

include_once './db_connector.php';
    $sql = "SELECT * FROM cart  WHERE buyer_email_id =:buyer_email_id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["buyer_email_id"=>$buyer_email_id]);
    $rows = $stmt->fetchAll(); 
    ?>   
   <?php 
   foreach ($rows as $row) { ?> 
   <?php } ?>

    <?php 
   foreach ($rows as $row) { ?>  
   
     <div class="main_product_div">
         <a href="product_detail.php?product_id=<?php echo $row->product_id; ?>">
        <div class="product_icon_div"><center><img src="<?php echo $row->product_icon; ?>"/></center></div>
         </a>
        <div class="product_name_div"><?php echo $row->product_name; ?></div> 
        <div class="product_price_div">
          <span> Quantity: <?php echo $row->product_quantity; ?></span> 
          </br>
               <span>Cost: &#8358;<?php echo number_format($row->product_price); ?> </span>
             

           
        </div>     
    
        
        <div>
    <form action="remove_from_cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />  
        <input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>" />
        <input type="hidden" name="product_price" value="<?php echo $row->product_price; ?>" /> 
        <input type="hidden" name="product_icon" value="<?php echo $row->product_icon; ?>" />
        
    </form>
    </div>
    <form action="remove_from_cart.php" method="POST">
    <input type="hidden" name="cart_id" value="<?php echo $row->cart_id; ?>" />
     <button onclick="return confirm('Are you sure you want to delete this product?');">REMOVE</button>
   </form> 
    </div>
   <?php } ?>   
</div>

<style>
    .product_page_div{
        width: 90%;
        margin: 0 auto;
    }
     .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 23%!important;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
        transition-duration: .7s; 
    }
    .product_page_div .main_product_div:hover{ 
        border: 1px #eacccc solid; 
        box-shadow: 0 14px 10px 0 #e8e8ee, 0 3px 10px 0 #e8e8ee;        
    }
    .product_icon_div img{
        width: 180px;
        height: 180px;
    }
    .product_page_div .product_name_div{
        margin-bottom: 12px;
        font-size: 15px;
        color: #464343;
    }
    .product_page_div .product_price_div{
        font-size: 13px;
        color: #888888;
    }
 .product_page_div div button{ 
        background-color: transparent;
        border-radius: 7px;
        color: #252525;
        border: 1px #eacccc solid;
        padding: 10px;
        margin: 5px;
        margin-top: 18px;
        margin-bottom: 18px;
        font-size: 12px;
        transition-duration: .7s;
    }
    .product_page_div div button:hover{
        background: linear-gradient(0deg,	#00FFFF, blue);
        color: #fff;
    }
    
    
     
    @media(max-width: 1200px){
         .product_page_div{
        width: 99%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 17.5%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 170px;
        height: 170px;
    } 
    }
    
    
    
    
     
    @media(max-width: 1000px){
         .product_page_div{
        width: 99%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 22%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 210px;
        height: 210px;
    } 
    }
    
    
    
     
    @media(max-width: 900px){
         .product_page_div{
        width: 99%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 30%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 160px;
        height: 160px;
    } 
    }
    
    
   
    
    
    @media(max-width: 700px){
         .product_page_div{
        width: 99%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 30%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 170px;
        height: 170px;
    } 
    }
    
    
    
    
    @media(max-width: 600px){
         .product_page_div{
        width: 99%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 28%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 120px;
        height: 120px;
    } 
    }
    
    
    
    
    @media(max-width: 500px){
         .product_page_div{
        width: 98%;
        margin: 0 auto;
    }
    
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 45%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    }
     .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 14px;
        margin: 5px;
        margin-top: 28px;
        font-size: 14px;
    } 
    .product_icon_div img{
        width: 200px;
        height: 200px;
    } 
    }
    
    
    
    @media(max-width: 400px){
         .product_page_div{
        width: 98%;
        margin: 0 auto;
    }
    .product_page_div .main_product_div{ 
        margin: 4px;
        margin-bottom: 36px;
        padding: 4px;
        border-radius: 7px;
        width: 98%;
        display: inline-block;
        border: 1px #e8e8e8 solid;
        border-radius: 4px;
        justify-content: center;
        text-align: center;
    } 
    .product_icon_div img{
        width: 310px;
        height: 310px;
    } 
    .product_page_div div button{ 
        border-radius: 7px;
        color: #252525; 
        padding: 20px;
        margin: 5px;
        margin-top: 28px;
        font-size: 22px;
    } 
    }
</style>


<?php include_once './bottom_design.php'; ?>