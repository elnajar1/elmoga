<?php

	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/includes/header.php';

?>
<link rel="stylesheet" href="/elmoga/Pages/Create_Now/CN.css"> 

<!-- Background gradient layer div  -->    
    
<div class="backCon"></div>        
    
<!-- This Is The Navbar Html Code -->      
    
<section class="mainSec">   
     
<div class="displayOne">

	<div class="top">    
	    
		<button href="#" class=".add_question" onclick="toggle_open()"> 
			أضف سؤال 
		</button>    
		    
	</div>    
	    
</div>    

<!-- Here is thequestion_editor_container -->
<div class="question_editor_container">
	
</div>    
<!-- /Here is the question_editor_container  -->

<!-- Here is the Burger Menu  --> 
    
<nav class="sideMenu" id="side">   
    
	<div class="options">
	    
		<h3>اضافة خانة الاسم</h3>    
		    
		<span>يستخدم الطالب هذه الاداه في ان يكتب فيها اسمه اثناء الاختبار</span>
		    
		<a><i class="fa fa-plus"></i></a>    
		    
		</div>     
	    
	<div class="options">
	    
		<h3>اضافة نص كتابي</h3>    
		    
		<span>يستخدم المعلم هذه الاداه في كتابة ملحوظه او اي شئ آخر في صفحة الاختبار</span>
		    
		<a><i class="fa fa-plus"></i></a>    
		    
		</div> 

	<div class="options">
	    
		<h3>اضافة سؤال الاختياري</h3>    
		    
		<span>هذه هي محور الثانويه العامه كلها .. سؤال الاختياري</span>
		    
		<button class="add_chose"><i class="fa fa-plus"></i></button>    
		    
	</div>    
	    
	<div class="options">
	    
		<h3>اضافة زر التأكيد</h3>    
		    
		<span>بعد انتهاء الطالب من حل الاختبار يضغط علي زر التأكيد حتي يتم تصحيح الاختبار وارسال الدرجات للمعلم</span>
		    
		<a><i class="fa fa-plus"></i></a>    
		    
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

?>