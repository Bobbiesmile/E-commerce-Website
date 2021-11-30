<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/>   

<?php 
   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name']; 
   $product_description = $_POST['product_description'];
   $product_category = $_POST['product_category'];
   $product_price = $_POST['product_price'];      
   $product_old_price = $_POST['product_old_price'];
   $product_icon = $_POST['product_icon'];
 
?>




<div class="main_container">

        <div class="left_container"> 
        <!--<img src="images/reg.jpg" style="width: 98%;"/>-->
        
        </div>
         
        <div class="middle_container"> 
            <span><span class="fa fa-cart-plus"></span> Edit Product </span>
           
<form action="edit_product2.php" method="POST" enctype="multipart/form-data">
<input type="hidden" name="p_id" placeholder="Product ID" value="<?php echo $product_id; ?>"/> 
<input type="text" name="p_name" placeholder="Product Name" value="<?php echo $product_name; ?>"/> 
<textarea name="p_description" placeholder="Product Description"><?php echo $product_description; ?></textarea> 

<select name="p_category">
<option value="<?php echo $product_category; ?>"><?php echo $product_category; ?></option>
<option value="Bag">Bag</option>
<option value="Bicycle">Bicycle</option>
<option value="Clothing">Clothing</option>
<option value="Fridge">Fridge</option>
<option value="Laptop">Laptop</option>
<option value="Tablet">Tablet</option>
<option value="Television">Television</option>
<option value="Phone">Phone</option>
<option value="Shoe">Shoe</option>
<option value="Wrist Watch">Wrist Watch</option>
</select>
 
<input type="text" name="p_price" placeholder="Product Price" value="<?php echo $product_price; ?>" /> 
<input type="text" name="p_old_price" placeholder="Product Old Price" value="<?php echo $product_old_price; ?>" /> 
<input type="hidden" class="p_icon" name="p_icon" placeholder="Product Icon" value="<?php echo $product_icon; ?>" /> 

<label for="fileInput"><img id="pic" class="pic" alt="Picture Preview" style="width:80px; height: 80px;" src="<?php echo $product_icon; ?>" title="Click to add product picture" /></label>
<input type="file" id="fileInput" onchange="preview()" name="productUrl" style="display: none;">
<button id="btnStock" name="btnStock">Save Changes</button> 
</form>
        </div>
       
      


            
                
         
    </div>

  <script>
  const preview = ()=>{  
var file = document.getElementById("fileInput"); 
var pic = document.getElementById("pic"); 
pic.src = window.URL.createObjectURL(file.files[0]); 
document.querySelector("#btnStock").style.display = "block";
document.querySelector(".p_icon").value="Picture Changed";
};   
  
  </script>

<?php include_once './bottom_design.php';  ?>