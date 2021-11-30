<?php
session_start(); 
error_reporting(0);
 $emailD_new =   $_SESSION['emailID_session'];
 $firstName_new =  $_SESSION['firstName_session'];
 $lastName_new =  $_SESSION['lastName_session'];
 $buyer_email_id =$_SESSION['emailID_session'];
?>
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAB SUPERMARKET</title>
        <link rel="Shortcut Icon" href="images/favicon.png"/>
        <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <script src="javascripts/jquery.js" type="text/javascript"></script>
         <script src="javascripts/search_product.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
     
        
    

    <a href="my_cart.php"> <span class="cart" style="text-align:right; margin-left:1085px;" ><img src="images/CART.png" style="width:30px;  margin-top:2px;  margin-right:2px; " /> <?php include_once './count_item_on_my_cart.php';?>
   
   
    </span></a>
   

    <a href="#" class="searchCaption" >&telrec;</a>
   
     <div class="searchDiv"> 
     <input autocomplete="off" type="text" class="search" placeholder="Search Product" onkeyup= "return queryData(this.value);"/>
            <span class="CloseSpan" style="width:13px; padding-left:8px; padding-bottom:5px; height:30px;  border-radius:50%;color:#eee; border: 3px #eee solid;">  &times; </span>
          <div id="searchResult" ></div>
            </div>
  <style>


  .cart{
      position:absolute;
       color:#eee;
       margin-top:3px;
  }

       .search{
           width:50%;
           color:#eee;
          background-color:rgb(189, 87, 4);
          font-size:25px;
          border:none;
          text-align:center;
          margin-left:20%;
         
          
       }     

       .search input{
           color:#eee;
           border:none;
       }
       
  .searchCaption{
      font-size:30px;
      position:absolute;
      margin-left:1020px;
      margin-top: 2px;
      color:#eee;
  }
  .searchDiv{
              padding: 8px;
                border: 1px rgb(4, 173, 189) solid;
                width: 98.4%; 
                height:8%;
                border-radius: 6px;
                margin-top: 0%;
                margin-bottom: 56px;
                position: absolute;
                background-color: 	rgb(189, 87, 4);
                display: none;
                z-index: 5;
  }

  
      .searchDiv .CloseSpan{
              
                font-size: 34px;
                 float: right; 
                 padding-right: 15px;
                 
              
            }
    .CloseSpan:hover{
        cursor:pointer;
        color:red;
    }
 
  .searchCaption:hover{
      cursor:pointer;
      color:rgb(189, 87, 4);
  }

  #searchResult{
 background-color:	rgb(189, 87, 4);
  width:47%;
  margin-left:20%; 
  color:#eee!important;
  list-style:none;
  margin-top:20px;
   padding-left:40px;
  }
  </style>

  <style>
 .active_page{
     box-shadow: rgb(197, 208, 209)   0.0em 0.2em 0.0em;
     padding-bottom: 8px;
     /* padding-bottom:19px; */
 }

  </style>

  <?php $active_page= $_SERVER['PHP_SELF']; 
  ?>

        <nav>
            <div id="logoDiv"> <img src="images/favicon.png"/> </div>        

            <div id="menuDiv">
                <ul>
                    <a <?php if ($active_page==="/shop2/index.php") { ?>class="active_page" <?php } ?> href="index.php" title="Home Page"> <li> Home</li> </a>                                       
                    <a <?php if ($active_page==="/shop2/all_products.php") { ?>class="active_page" <?php } ?> href="all_products.php" title="All Products"> <li>All Products</li> </a>
                    <?php if($emailD_new==="admin@gmail.com") { ?>
                    <a  <?php if ($active_page==="/shop2/all_users.php") { ?>class="active_page" <?php } ?> href="all_users.php" title="All Users"> <li>All Users</li> </a>
                    <a  <?php if ($active_page==="/shop2/New_Stock.php") { ?>class="active_page" <?php } ?>  href="New_Stock.php" title="Category" ><li>New Category</li></a>
                    <a <?php if ($active_page==="/shop2/stock_product.php") { ?>class="active_page" <?php } ?> href="stock_product.php" title="Stock Prroduct"> <li>Stock Product</li> </a>
                    <?php } ?>

<?php if(isset($_SESSION['emailID_session'])) { ?>
<a  <?php if ($active_page==="/shop2/my_profile.php") { ?>class="active_page" <?php } ?>  href="my_profile.php" title=""> <li><?php echo $firstName_new; ?></li> </a>
<a  href="logout.php" title="Logout"> <li>Logout</li> </a>
<?php } else{ ?>
<a  href="#" title="Login"> <li class="login_click">Login</li> </a>
<a  <?php if ($active_page==="/shop2/signup.php") { ?>class="active_page" <?php } ?> href="signup.php" title="Sign Up"> <li>Sign Up</li> </a>
<?php } ?>    

<a  <?php if ($active_page==="/shop2/Download.zip") { ?>class="active_page" <?php } ?> href="Download.zip" title="download" class="download">Download</a>


                    

                </ul>

                <style>
.download{
color:#eee;
/* border:2px #eee solid; */
height:25px;
cursor:pointer;
}

.category{
    color:#eee;
}

</style>
            </div>

            <span id="mobile_menu_icon">  
                &#9776; 
            </span>
        </nav> 



        <div class="loginDiv"> 
            <span class="closeSpan">    &times; </span>
            <div class="loginCaption"><span class="fa fa-lock"></span> Login </div>        
            
            <form action="login2.php" method="POST">            
                <input type="text" name="emailID" placeholder="Username" maxlength="200" required="required"/>
                <input type="password" name="password1" placeholder="Password"required="required" autocomplete=""/>      
                <button name="btn_login">Login</button>
                </div>
            </form>
            
        </div>
        <style>
            .inputBox{
                position: relative;
                height: 80px;
            }
            .inputBox:last-child{
                margin-bottom: 0;
            }
            .inputBox input{
                position: absolute;
                top: 0;
                left: 0;
                background: transparent;                
            }
            
            .inputBox span{
                top: 1px;
                left: 1px;
                padding: 10px;
                display: inline-block;
                transition: .5s;
                pointer-events: none;
            }
            
            .inputBox input:focus ~ span,
            .inputBox input:valid ~ span{
                transform: translateX(-10px) translate(-32px);
            }
            
            .loginDiv{
                padding: 8px;
                border: 1px #026ae6 ;
                width: 40%; 
                border-radius: 8px;
                margin-left: 30%;
                margin-top: 5%;
                margin-bottom: 56px;
                position: absolute;
                background-color: #fff;
                display: none;
                z-index: 4;            
            } 
            .loginDiv .closeSpan{
                font-size: 34px; float: right; padding-right: 15px;
            }
            .loginDiv .closeSpan:hover{
                color: red;
                cursor: pointer;
            }
            .loginDiv .loginCaption{
                margin-left: 25px;
                font-size: 24px;
                font-family:sans-serif; 
                color: #5b5b5b;
            }
            .loginDiv input{
                width: 91%;
                height: 40px;
                margin-bottom: 18px;
                border: 1px #e8e8e8 solid;
                border-radius: 5px;
                margin-left: 22px;
                padding-left: 5px;
            }
               .loginDiv button{
                width: 92.5%;
                margin-left: 22px;
                margin-bottom: 18px;
                border-radius: 5px;
                border: none;
                height: 44px;   
                background-color: chocolate;
                font-size: 20px;
                color: #eee;
            } 
            .loginDiv button:hover{
                transition: .17s; 
                color: #fff;    
                background: linear-gradient(360deg,	#8f8c71, #d4944c54 );
                cursor: pointer;
            } 

        </style>    

        <script>
         $(function () {
                $(".searchCaption").click(function () {
                    $(".searchDiv").slideDown();
                    $(".main_container").css("filter", "blur(0px)");
                });
                $(".CloseSpan").click(function () {
                    $(".searchDiv").slideUp();
                    $(".main_container").css("filter", "blur(0px)");
                });
                $(".main_container").click(function () {
                    $(".searchDiv").slideUp();
                    $(".main_container").css("filter", "blur(0px)");
                });

            });



            $(function () {
                $(".login_click").click(function () {
                    $(".loginDiv").slideDown();
                    $(".main_container").css("filter", "blur(8px)");
                });
                $(".closeSpan").click(function () {
                    $(".loginDiv").slideUp();
                    $(".main_container").css("filter", "blur(0px)");
                });
                $(".main_container").click(function () {
                    $(".loginDiv").slideUp();
                    $(".main_container").css("filter", "blur(0px)");
                });

            });

        </script>