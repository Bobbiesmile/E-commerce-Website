    <?php include_once './top_design.php';?>

    <div class="main_container" > 

    
    <div class="main1_container" style="display:none ;  width:100%; height:100vh;"> 

      <b style="color:#252525; font-size:20px; padding-top:30px;">NEW STOCK ALERT</b> 
    </div>
    
    <div class="main2_container" style="display:none; width:100%;">
    <b style="color:#252525;  font-size:20px; padding-top:30px;">NEW STOCK ALERT</b> 
        </div>

    <div class="main3_container" style="display:none; width:110%;">
    <b style="color:#252525;  font-size:20px; padding-top:30px;">NEW STOCK ALERT</b>
    </div> 

    </div>
    
    <?php include_once './latest_stock.php'; ?>


    <style>
        body{
            min-height: 100vh;
        }  

    .main_container{
            width: 100%;
            height: 100vh;
            background: url("images/bg22.png" );
            background-attachment: fixed; 
            display: flex;
            background-size: cover;
            justify-content: center; 
        }

    .main1_container{
            width: 1000%;
            height: 100vh;
            background: url("images/shirt.jpg");
            background-attachment: fixed; 
            display: flex;
            background-size: cover;
            justify-content: center; 
        }
        

        

        .main2_container{
            width: 100%;
            height: 100vh;
            background: url("images/wristwatch.jpg");
            background-attachment: fixed; 
            display: flex;
            background-size: cover;
            justify-content: center;  
        } 

    .main3_container{
            width: 100%;
            height: 100vh;
            background: url("images/laptop.jpg");
            background-attachment: fixed; 
            display: flex;
            background-size: cover;
            justify-content: center; 
        } 

        .admissionDiv{ 
        border:none; 
        border-radius:50px; 
        justify-content:center;
        width:12%; 
        height:8%; 
        background-color:#cfce7d;;
        color:#eee;
        margin-top:33%;
        font-size:15px;
        border: 1px #eee solid;
        }


        .admissionDiv:hover{
            background: transparent;
            border: 1px #eacccc solid;
            transition-duration: .7s;        
            border-radius: 6px;
            color:blue;
            background: linear-gradient(90deg, #e8e8e8, #503308);


        }

        .content div img{
            width:100%!important;
            height:300px;
        }

        .content div button{
            border:1px #eee solid!important;
            margin-bottom:10px;
            border-radius: 50px;
            box-shadow: 0 14px 10px 0 #e8e8ee; 

        }
        .content div button:hover{
            color:gold;
            transition: .7s;
        }

        .content div{
    display:inline-block;
    width: 23%;
    margin:10px;
    border-radius:1%;
    margin-left:1.8%;

        }
    .content div:hover{
        cursor:pointer;
        border: 1px #ff9933 solid; 
        box-shadow: 0 14px 10px 0 #e8e8ee, 0 3px 10px 0 #e8e8ee; 
        transition:.7s;


    } 
    
   
.animate_images{
    animation:animate_come .8s ease-in;
}
        @keyframes animate_come{

10%{
 
animation-delay:.8s;
opacity: .1;
}

100%{

animation-delay:.8s;

opacity: 1.5;
}

    }

    
    </style>  

        <script>
        var main1_container = document.querySelector(".main1_container");
        var main2_container = document.querySelector(".main2_container");
        var main3_container = document.querySelector(".main3_container");
        var main_container = document.querySelector(".main_container"); 
        
    
        
        setInterval(function (){
        
            main1_container.style.display="inline-block";
            main2_container.style.display="none";
            main3_container.style.display="none";
            main1_container.classList.add("animate_images");
            }, 3000);                                                                                          

            setInterval(function (){
            
                main2_container.style.display="inline-block";
                main1_container.style.display="none";
                main3_container.style.display="none";
                main2_container.classList.add("animate_images");
                
            }, 6000);   

            setInterval(function (){
            
            main3_container.style.display="inline-block";
            main1_container.style.display="none";
            main2_container.style.display="none";
            main3_container.classList.add("animate_images");
                
            }, 9000); 
            
    setInterval(function (){
        
        main_container.style.display="inline-block";
        main2_container.style.display="none";
        main3_container.style.display="none";
        main1_container.style.display="none";
        main_container.classList.add("animate_images");
    }, 12000); 
        </script>

        
    <?php include_once './bottom_design.php'; ?>