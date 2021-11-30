<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/> 

<?php if($emailD_new !== "admin@gmail.com"){ ?>
<script>
    document.location = "logout.php";
    </script>
<?php } ?>
<div class="main_container">

        <div class="left_container"> 
        <!--<img src="images/reg.jpg" style="width: 98%;"/>-->
        
        </div>
         
        <div class="middle_container"> 
            <span><span class="fa fa-cart-plus"></span> Stock Product </span>
           
            <form action="stock_product2.php" method="POST" enctype="multipart/form-data">
           <input type="text" name="p_name" placeholder="Product Name"/> 
           <textarea name="p_description" placeholder="Product Description"></textarea> 

    <select name="p_category">
<option value="none">Product Category</option>
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
           
           <input type="text" name="p_price" placeholder="Product Price" /> 
           <input type="text" name="p_old_price" placeholder="Product Old Price" /> 
            
           
           <label for="fileInput"><img id="pic" class="pic" alt="Picture Preview" style="width:80px; height: 80px;" src="images/browse.png" title="Click to add product picture" /></label>
           <input type="file" id="fileInput" onchange="preview()" name="productUrl" style="display: none;">
 
           <button id="btnStock" name="btnStock" style="display: none;">Stock</button> 
            </form>
        </div>
       
        <div class="right_container"> 
          <!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptas excepturi harum laudantium libero, quibusdam nihil ullam perspiciatis molestias quae fugiat unde aperiam optio eum delectus placeat saepe totam a?-->
        </div>


            
                
         
    </div>

  <script>
  const preview = ()=>{  
var file = document.getElementById('fileInput'); 
var pic = document.getElementById('pic'); 
pic.src = window.URL.createObjectURL(file.files[0]); 
document.querySelector('#btnStock').style.display = "block";
} ;   
  
  </script>

<?php include_once './bottom_design.php';  ?>