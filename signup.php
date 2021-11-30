<?php include_once './top_design.php'; ?>
<link href="styles/form_styles.css" rel="stylesheet" type="text/css"/>    

<div class="main_container">

        <div class="left_container"> 
        
        </div>
         
        <div class="middle_container"> 
            <span><span class="fa fa-user-plus"></span> Sign Up </span>
            <form action="signup2.php" method="POST">
            <div class="feedback_id" ></div>
           <input class="feedback1" type="text" name="firstName" placeholder="First Name"/> 
           <div class="feedback2_id"></div>
           <input class="feedback2" type="text" name="lastName" placeholder="Last Name" />
           <div class="feedback3_id"></div>
          <input   class="feedback3_id"type="email" name="emailID" placeholder="Email ID"/>
          <div class="feedback4_id"></div>
           <input  class="feedback4_id"type="password" name="password1" placeholder="Password"/>
           <div class="feedback5_id"></div>
           <input class="feedback5_id" type="password" name="password2" placeholder="Confirm Password"/>
           <button class="btnSend1" name="btnSend">Submit</button> 
            </form>
        </div>
       
        <div class="right_container"> 
          <!--Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure voluptas excepturi harum laudantium libero, quibusdam nihil ullam perspiciatis molestias quae fugiat unde aperiam optio eum delectus placeat saepe totam a?-->
        </div>


            
                
         
    </div>

    <script>
   
  var feedback1= document.querySelector(".feedback1");
  var feedback_id=document.querySelector(".feedback_id");
    var feedback2= document.querySelector(".feedback2");
  var feedback2_id= document.querySelector(".feedback2_id");
   var feedback3= document.querySelector(".feedback3");
  var feedback3_id= document.querySelector(".feedback3_id");
   var feedback4= document.querySelector(".feedback4");
  var feedback4_id= document.querySelector(".feedback4_id");
 var feedback5= document.querySelector(".feedback5");
  var feedback5_id= document.querySelector(".feedback5_id");
  var btnSend1= document.querySelector(".btnSend1");


btnSend1.addEventListener("click", ()=>{
if(feedback1.value===""){
    feedback_id.innerHTML="<font color=red size=3px>*Please insert Firstname</font>";
//  return false ; 
return true;
alert('busola');
  }

});
</script>

<?php include_once './bottom_design.php';  ?>