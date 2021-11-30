<?php include_once './top_design.php'; ?>

<div class="product_page_div">

<?php 



$count_product = 0;
$product_category = $_GET['product_category'];
include_once './db_connector.php';
    $sql = "SELECT * FROM product_table WHERE product_category =:product_category ORDER BY product_id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["product_category"=>$product_category]);
    $count = $stmt->rowCount();
    $rows = $stmt->fetchAll(); 
    ?>   
<h3 style="margin-left: 1%; 
    margin-bottom: 0px; color: #969696; text-transform: uppercase; font-weight: lighter;">
    Available Products: <?php echo $count; ?>  
    
    
    <select name="category" id="select_by_category">
    <option value="none">Search by Category</option>
    <?php
    include_once './db_connector.php';
    $sql2 = "SELECT * FROM category_table ORDER BY product_category ASC";
    $stmt2 = $pdo->prepare($sql2);
    $stmt2->execute(['product_category'=>$product_category]);
    $rows2 = $stmt2->fetchAll(); 

   foreach ($rows2 as $row2) {
       $stmt2 = $pdo->prepare($sql2);
       $stmt2->execute();
       ?> 
   <option value="<?php echo $row2->product_category; ?>"><?php echo $row2->product_category; ?></option>
   <?php } ?>
    
    </select>
   
    </h3>
    


<style>
#select_by_category{
    height:45px!important;
    border-radius:8%;   
    border: 0.5px #eee solid;
    margin-left:5px;
    margin-bottom:5px;
    color:rgb(107, 110, 110);
    width:15%;
     padding-left: 10px;
}
#select_by_category:hover{
    cursor:pointer;
    box-shadow: 0 10px 10px 0 #e8e8ee, 0 3px 8px 0 #e8e8ee; 
}


</style>


    
   <?php 
   foreach ($rows as $row) { 
       $price = $row-> product_price;
        $price_old = $row-> product_old_price;
        $cal = ($price_old - $price);
        $percentage = ($cal/$price_old)*100;
       ?> 
   
   
    <div class="main_product_div">
         <a href="product_detail.php?product_id=<?php echo $row->product_id; ?>">
        <div class="product_icon_div"><center><img src="<?php echo $row->product_icon; ?>"/></center></div>
         </a>
        <div class="product_name_div"><?php echo $row->product_name; ?></div> 
        <div class="product_price_div">
               <span>&#8358;<?php echo number_format($row->product_price); ?> </span>
               <span style="display: inline-block; color: #b7b7b7; font-size: 12px;; padding-left: 13px;">&#8358;<strike><?php echo number_format($row->product_old_price); ?></strike> </span>
               <span style="display:inline-block; color:#ff9933; "><?php echo round($percentage,1); ?>% Off </span>
        </div>    
    
        
        <div>
    <form action="add_to_cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />  
        <input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>" />
        <input type="hidden" name="product_price" value="<?php echo $row->product_price; ?>" /> 
        <input type="hidden" name="product_icon" value="<?php echo $row->product_icon; ?>" />
        <input type="hidden" name="product_quantity" class="product_quantity" value="1"/>
        <button name="btnAddToCart">ADD TO CART</button>
    </form>
    </div>
        
<!--        <div>
    <form action="edit_product.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />  
        <input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>" />
        <input type="hidden" name="product_price" value="<?php echo $row->product_price; ?>" /> 
        <input type="hidden" name="product_icon" value="<?php echo $row->product_icon; ?>" />
        <button>Save Changes</button>
    </form>
    </div>
    <div>
     <form action="delete_product.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />
     <button onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
   </form>      
   </div> -->
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
        width: 23%;
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
        background: linear-gradient(90deg, #e8e8e8, #503308);
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


<script>
var select_by_category = document.querySelector("#select_by_category");
select_by_category.addEventListener("change", ()=>{
window.location.href="select_by_category.php? product_category=" +select_by_category.value;

});


</script>
<?php include_once './bottom_design.php'; ?>