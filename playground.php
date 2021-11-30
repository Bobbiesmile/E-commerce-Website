<?php include_once './top_design.php'; ?>
<div class="slide">
<span class="text">I'm Blessed</span>
<span class="text2">I'm Blessed</span>
<img class="p1" src="images/bg1.png" style="height:300px;"/>
<img  class="p2" src="images/application.jpg" style="height:300px;"/>
<img  class="p3" src="images/background4.jpg" style="height:300px;"/>

<span class="left_arrow" >&lsaquo;</span>
<span class="right_arrow" >&rsaquo;</span>
<span class="btn_number">
<button class="b1"> 1 </button>
<button class="b2"> 2 </button>
<button class="b3"> 3 </button>
</span>

</div>

<style>
.btn_number{
    position:absolute;
   left  :510px;
   top: 350px;
   
   
}
.btn_number button{
    border: none;
   border-radius: 50%;
}
.btn_number button:hover{
    cursor:pointer;
    background-color: rgb(4, 173, 189); 
}

.b1{
    background-color: rgb(4, 173, 189);
}


.slide{
justify-content:center;
margin-left:20%;
margin-bottom:70px;
margin-top:10px;
}

.text{
    background-color:transparent;
    text-shadow: #000 0.0em  0.3em  0.4em ;
    color:#fff;
    font-size:22px;
    display:none;
    position:absolute;
    left:227px;
    top:102px;
    text-transform: uppercase;
    
}

.text2{
    background-color:transparent;
    text-shadow: #000 0.0em  0.3em  0.4em ;
    color:#fff;
    font-size:22px;
    display:none;
    position:absolute;
    left:227px;
    top:102px;
    text-transform: uppercase;
}
.slide img{
    width:600px;
    /* height:50%; */
}


.left_arrow{
    font-size: 30px;
    position:absolute;
    left:230px;
    top:30%;
    color:#eee;
    background-color:	rgb(4, 173, 189); 
    width:25px;
    height:25px;
  padding:1px;
  padding-bottom:10px;
 
}
.right_arrow{
  font-size: 30px;
  position:absolute;
  left: 796px;
  top:30%;
  color:#eee;
  background-color:	rgb(4, 173, 189); 
  width:25px;
  height:25px;
  padding:1px;
  padding-bottom:10px;
}
.left_arrow{
    text-align:center;
}

.right_arrow{
    text-align:center;
}

.left_arrow:hover, .right_arrow:hover{
cursor:pointer;
color:#252525;
transition: .7s;
}

.p2{
    display:none;
}
.p3{
    display:none;
    transition: .7s;
}

.p1_new{ display:block;
    transition: .7s;}
.p2_new{ display:block ; 
    transition: .7s; }
.p3_new{ display:block ; 
   
    transition: .7s;
}

.animate_all{
    animation:animate_slides .5s ease-in;
}


@keyframes animate_slides{
0%{
 opacity: .8;
}

100%{
opacity: 1.3;
}

}


.animate_text{
    animation:animate_come .7s ease-in;
}

@keyframes animate_come{

    0%{
     font-size: 2px;
    animation-delay:1.8s;
    top: 64px;
    opacity: .5;
    }

100%{
    font-size:22px;
    animation-delay:1.8s;
    top: 102px;
    opacity: 1;
    }
    
}
</style>

<script>
var monitor = 0;
var p1_monitor = 0;
var p2_monitor = 0;
var p3_monitor = 0;
var p1 = document.querySelector(".p1");
var p2 = document.querySelector(".p2");
var p3 = document.querySelector(".p3");
var text = document.querySelector(".text");
var text2 = document.querySelector(".text2");


setInterval(function() {
monitor++;

if (monitor >=5){
p1.style.display="none";
p3.style.display="none";
text2.style.display="none";
p2.style.display="block";
p2.classList.add("animate_all");
text.style.display="inline-block";
text.classList.add("animate_text");
b2.style.backgroundColor= "rgb(4, 173, 189)";
b1.style.backgroundColor= "#eee";
b3.style.backgroundColor= "#eee";
}

if (monitor >= 9){
    p1.style.display="none";
  p2.style.display="none";
  text.style.display="none";
  p3.style.display="block";
p3.classList.add("animate_all"); 
text2.style.display="inline-block";
text2.classList.add("animate_text");
b3.style.backgroundColor= "rgb(4, 173, 189)";
b1.style.backgroundColor= "#eee";
b2.style.backgroundColor= "#eee";
}
if (monitor >= 12){
    p3.style.display="none";
  p2.style.display="none";
  text.style.display="none";
text2.style.display="none";
  p1.style.display="block";
p1.classList.add("animate_all"); 
b1.style.backgroundColor= "rgb(4, 173, 189)";
b3.style.backgroundColor= "#eee";
b2.style.backgroundColor= "#eee";

}



if(monitor ===15)
monitor=0;
}, 1000);

</script>

<script>
var left_arrow = document.querySelector(".left_arrow");
var right_arrow = document.querySelector(".right_arrow");
var b1 = document.querySelector(".b1");
var b2 = document.querySelector(".b2");
var b3 = document.querySelector(".b3");

right_arrow.addEventListener("click", ()=>{
   
    p1.style.display="none";
  p3.style.display="none";
  text2.style.display="none";
 p2.style.display="block";
p2.classList.add("animate_all");
text.style.display="inline-block";
text.classList.add("animate_text");
b2.style.backgroundColor= "rgb(4, 173, 189)";
b1.style.backgroundColor= "#eee";
b3.style.backgroundColor= "#eee";

});


left_arrow.addEventListener("click", ()=>{

p3.style.display="none";
p2.style.display="none";
text.style.display="none";
p1.style.display="block";
p1.classList.add("animate_all"); 
text2.style.display="inline-block";
text2.classList.add("animate_text");
b1.style.backgroundColor= "	rgb(4, 173, 189)";
b2.style.backgroundColor= "#eee";
b3.style.backgroundColor= "#eee";
});




b1.addEventListener("click", ()=>{

p3.style.display="none";
p1.style.display="none";
text.style.display="none";
p1.style.display="block";
p1.classList.add("animate_all"); 
text2.style.display="inline-block";
text2.classList.add("animate_text");
b1.style.backgroundColor= "	rgb(4, 173, 189)";
b2.style.backgroundColor= "#eee";
b3.style.backgroundColor= "#eee";

});

b2.addEventListener("click", ()=>{

p3.style.display="none";
p1.style.display="none";
text.style.display="none";
p2.style.display="block";
p2.classList.add("animate_all"); 
text2.style.display="inline-block";
text2.classList.add("animate_text");
b2.style.backgroundColor= "rgb(4, 173, 189)";
b1.style.backgroundColor= "#eee";
b3.style.backgroundColor= "#eee";
});

b3.addEventListener("click", ()=>{
p2.style.display="none";
p1.style.display="none";
text.style.display="none";
p3.style.display="block";
p3.classList.add("animate_all"); 
text2.style.display="inline-block";
text2.classList.add("animate_text");
b3.style.backgroundColor= "	rgb(4, 173, 189)";
b2.style.backgroundColor= "#eee";
b1.style.backgroundColor= "#eee";
});


</script>





<?php include_once './bottom_design.php'; ?>