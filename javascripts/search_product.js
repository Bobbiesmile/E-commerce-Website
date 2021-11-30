// alert('busola');

function queryData(str){
    if (str=== ""){
  document.getElementById("searchResult").innerHTML = "";
  return;

    }else{
        if(window.XMLHttpRequest){
     xmlhttp = new XMLHttpRequest();
        }else{
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function(){
 if (this. readyState === 4 && this.status ===200){
     document.getElementById("searchResult").innerHTML = this.responseText;  }
 };
 xmlhttp.open("GET", "search_product.php?q="+str,true);
 xmlhttp.send();
        }
    }
