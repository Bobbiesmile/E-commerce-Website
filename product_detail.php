<?php include_once './top_design.php';

$product_id = $_GET['product_id']; 

include_once './db_connector.php';
$sql = "SELECT * from product_table WHERE product_id = :product_id";
$stmt = $pdo->prepare($sql);
$stmt->execute(["product_id"=>$product_id]); 
$rows = $stmt->fetchAll();  
    foreach ($rows as $row) { ?>          



<div class="product_detail_div">
    <div class="product_detail_picture_div"> <center>
            <img src="<?php  echo $row->product_icon; ?>"  /></center>    
    </div>
<div class="product_info_div">        
<div style="font-size: 28px;"> <?php echo $row->product_name; ?></div>
<div>
<?php  

$product_percent=( $row->product_price/ $row->product_old_price )*100;
?>
    <span>&#8358;<?php echo number_format($row->product_price); ?> </span>
    <span style="display: inline-block; color: #a0a0a0; padding-left: 13px;">     &#8358;<strike><?php echo number_format($row->product_old_price); ?></strike> </span> <span style="color:red;"><?php echo round($product_percent  ,2)  ."% Off"; ?>
  </span>
</div>

<div class="product_discription_div"><?php echo nl2br($row->product_description); ?></div> 
<div>Quantity: <span class="quantity" style="font-size:23px;">1</span>
<input type="hidden" class="product_price_input" value="<?php echo $row->product_price; ?>" />
<span class= "product_price_calc"> </span></br>
<span class="quantity_minus" style="font-size:24px;"> &minus;</span>
<span class="quantity_plus" style="font-size:24px;"> &plus;</span>

</div>

<form action="add_to_cart.php" method="post">
<input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" /> 
<input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>" />
<input type="hidden" name="product_description" value="<?php echo $row->product_description; ?>" />
<input type="hidden" name="product_category" value="<?php echo $row->product_category; ?>" /> 
<input type="hidden" class="product_price" name="product_price" value="<?php echo $row->product_price; ?>" /> 
<input type="hidden" name="product_quantity" class="product_quantity" value="1"/>

<input type="hidden" name="product_icon" value="<?php echo $row->product_icon; ?>" />
<div> <button name="btnAddToCart">ADD TO CART</button></div>
</form>


<script>

function formatNumber(number){
    var parts=number.toString().split(".");
    return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",")+(parts[1]?"." + parts[1]:"");
}

var qty = 1;
var qty = 1;
var quantity= document.querySelector(".quantity");
var quantity_minus= document.querySelector(".quantity_minus");
var quantity_plus= document.querySelector(".quantity_plus");
var product_quantity= document.querySelector(".product_quantity");
var product_price_input= document.querySelector(".product_price_input");
var product_price_calc= document.querySelector(".product_price_calc");
var product_price= document.querySelector(".product_price");
quantity_plus.addEventListener("click", ()=>{
    qty++;
  quantity.innerHTML = qty;
  product_quantity.value = qty;
  product_price_calc.innerHTML = "(&#8358;"+ formatNumber((product_price_input.value * qty))+")";
   product_price.value = (product_price_input.value * qty);
});
quantity_minus.addEventListener("click", ()=>{
if( qty > 1){
    qty--;
    quantity.innerHTML = qty;
    product_quantity.value = qty; 
    product_price_calc.innerHTML = "(&#8358;"+ formatNumber((product_price_input.value * qty))+")";
   product_price.value = (product_price_input.value * qty);
}

});

</script>

<?php if($emailD_new==="admin@gmail.com"){ ?>
      <div>
    <form action="edit_product.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />  
        <input type="hidden" name="product_name" value="<?php echo $row->product_name; ?>" />
        <input type="hidden" name="product_description" value="<?php echo $row->product_description; ?>" />
        <input type="hidden" name="product_category" value="<?php echo $row->product_category; ?>" /> 
        <input type="hidden" name="product_price" value="<?php echo $row->product_price; ?>" /> 
        <input type="hidden" name="product_old_price" value="<?php echo $row->product_old_price; ?>" /> 
        <input type="hidden" name="product_icon" value="<?php echo $row->product_icon; ?>" />
       
        <button name="btnEdit">Edit</button>
    </form>
    </div>
    <div>
     <form action="delete_product.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $row->product_id; ?>" />
     <button onclick="return confirm('Are you sure you want to delete this product?');">Delete</button>
   </form>      
   </div> 
<?php } ?>



</div>
    
</div>
<?php    }
include_once './bottom_design.php';
?>

<style>
    .product_detail_div{
        width: 80%;
        margin: 0 auto;    
        padding-top: 24px;
    }
    .product_detail_div .product_info_div{
        width: 40%;
        display: inline-block;
        vertical-align: top;
        padding-top: 24px;   
        padding-bottom: 24px;     
        
    }
    .product_detail_div .product_detail_picture_div{
        width: 50%;
        display: inline-block;
    }
    
    
    .product_detail_div .product_detail_picture_div img{
        width: 90%; 
        margin-bottom: 43px;
    }
  
    .product_info_div button{ 
        background: transparent;
        padding: 16px;
        border: 1px #eacccc solid;
        transition-duration: .7s;        
        border-radius: 6px;
        width: 200px;  
          
    }

 

    .product_info_div div{
        margin-bottom: 20px;
         
    }
    .product_info_div div button:hover{ 
        background: linear-gradient(0deg,	#00FFFF, blue);
        color: #fff;
        cursor: pointer;
    }
    

    .quantity_minus, .quantity_plus{
        display:inline-block;
        padding: 1px 7px 1px 7px;
        border-radius:50%;
        text-align:center;
    }
    
    .quantity_minus:hover, .quantity_plus:hover{
        color:#fff;
        background: linear-gradient(90deg, #e8e8e8, #503308);
        cursor:pointer;
        transition: .7s;
    }

    
    
    @media(max-width: 700px){
         .product_detail_div{
        width: 99%;
        margin: 0 auto;        
    }
    .product_detail_div .product_info_div{
        width: 99%;
        display: inline-block;
        vertical-align: top;
        padding-top: 23px;  
        text-align: center;
    }
    .product_detail_div .product_detail_picture_div{
        width: 90%;
        display: inline-block;
    }
    
    
    .product_detail_div .product_detail_picture_div img{
        width: 80%; 
    }
    .product_info_div button{
        background-color: #ff9933;
        padding: 16px;
        border: none;
        border-radius: 6px;
        width: 300px;
       
    }
    .product_info_div div{
        margin-bottom: 20px;
    }
    .product_info_div div button:hover{ 
        background: linear-gradient(0deg,	#00FFFF, blue);
    }   
    }
    
 </style>
 