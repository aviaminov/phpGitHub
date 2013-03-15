$(document).ready(function(){
  $("#hide").click(function(){
    $("#logIn").hide(500);
    $("#hide").hide();
    $("#show").show();
  });

  $("#show").click(function(){
    $("#logIn").show(500);
    $("#hide").show();
    $("#show").hide();
  });
});


//---------------------------------------

function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","neighbordHoodAjax.php?q="+str,true);
xmlhttp.send();
}
