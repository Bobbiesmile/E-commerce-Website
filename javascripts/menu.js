$(function(){
    var status = 0;
 $("#mobile_menu_icon").click(function (){ 
     ++status;
     if(status %2 === 0){
         $("#menuDiv").hide(300);
     }
        else {   
         $("#menuDiv").show(300);
        }     
 });   });
