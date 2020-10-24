<?php

	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/includes/header.php';

?>
<link rel="stylesheet" href="/elmoga/Pages/Create_Now/CN.css"> 
<link rel="stylesheet" href="/elmoga/Tools/choose.css">       
    

<!-- Background gradient layer div  -->    
    
<div class="backCon"></div>        
    
<!-- This Is The Navbar Html Code -->      
    
<section class="mainSec">   
     
<div class="displayOne">

	<div class="top">    
	    
		<button href="#" onclick="toggle_open()" style="color: black"> 
			أضف سؤال 
		</button>    
		    
	</div>    
	    
</div>    

<!-- Here is the Burger Menu  --> 
    
<nav class="sideMenu" id="side">   
    

	<div class="options">
	    
		<h3>اضافة سؤال الاختياري</h3>    
		    
		<span>هذه هي محور الثانويه العامه كلها .. سؤال الاختياري</span>
		    
		<button id="myBtn" class="clickable"><i class="fa fa-plus">
			 أضف 
		</button>   
		    
	</div>    
	    


</nav>    
    
</section>    
    
<script>
function toggle_open() {
  var x = document.getElementById("side");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}
</script>        
     
<?php

	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/includes/footer.php';
	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/Tools/chose.php';
?>