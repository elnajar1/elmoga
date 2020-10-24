
<link rel="stylesheet" href="choose.css">       
    
<!-- Background gradient layer div  -->    
    
<div class="backCon"></div>  
 
<a href="#" class="bars" onclick="myFunction()"><li class="fa fa-bars"></li></a>    
    
<!-- This Is The Navbar Html Code -->    
    
<nav class="navbar">   
    
<ul>
    
    <li class="p"><a href="#" class="active">الصفحه الرئيسيه</a></li>
    
    <li class="p"><a href="#">معلومات عنا</a></li>
    
    <li class="p"><a href="#">اصنع اختبارك الآن</a></li>
    
</ul>
    
</nav>     
    
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
    
<a><i class="fa fa-plus"></i></a>    
    
</div>    
    
<div class="options">
    
<h3>اضافة زر التأكيد</h3>    
    
<span>بعد انتهاء الطالب من حل الاختبار يضغط علي زر التأكيد حتي يتم تصحيح الاختبار وارسال الدرجات للمعلم</span>
    
<a><i class="fa fa-plus"></i></a>    
    
</div> 

</nav>    
   
<section class="all">   
    
<div class="choose">

<h3>هنا يكتب السؤال للطالب حتي يستطيع قرائته والاجابه عليه</h3>   
    
<div class="answers">
 
<form action="#">

<div class="right">    
      
<input type="radio" id="test1" name="radio-group">
      
<label for="test1">هنا تكتب الاجابه حتي يعلم الطالب هل سيختارها ام لا</label>   
   
    
<input type="radio" id="test2" name="radio-group">
      
<label for="test2">هنا تكتب الاجابه حتي يعلم الطالب هل سيختارها ام لا</label>
    
</div>     
      
<div class="left">   
    
    
<input type="radio" id="test3" name="radio-group">
      
<label for="test3">هنا تكتب الاجابه حتي يعلم الطالب هل سيختارها ام لا</label>
      

<input type="radio" id="test4" name="radio-group">
      
<label for="test4">هنا تكتب الاجابه حتي يعلم الطالب هل سيختارها ام لا</label>
      
</div> 
    
</form>  
    
</div>    
    
</div>    
  
   
    
<a id="myBtn" class="clickable">clickable</a>    
    
<!--The Modal-->
    
<div id="myModal" class="modal">
 
<!-- Modal content -->
    
<div class="modal-content">
  
<!-- here starts the edit div for choose question  -->     
    
<div class="editOne">
    
<div class="close"> <a href="#" id="close"> <i class="fa fa-times"> </i> </a> </div>
    
<h3>منطقة التعديل لسؤال الاختياري</h3>  
    
<input type="text" placeholder="اكتب هنا صيغة السؤال" class="q">      
    
<input type="text" placeholder="حدد عدد درجات السؤال" class="n" maxlength="3"  onkeypress="return isNumberKey(event)">    
    
<div class="ta">
    
<div class="block">    
    
<input type="text" placeholder="اكتب هنا الاجابه الأولي" class="one">    

<div class="togglebx">
    
<label class="labelt">
    
<div class="con">
    
<input class="switch" type="checkbox" name="check" value="check">
    
<div class="toggle"></div>
    
</div>
    
</label>
    
</div>
    
</div>
    
<div class="block">    
    
<input type="text" placeholder="اكتب هنا الاجابه الثانيه" class="two">      
  
<div class="togglebx">
    
<label class="labelt">
    
<div class="con">
    
<input class="switch" type="checkbox" name="check" value="check">
    
<div class="toggle"></div>
    
</div>
    
</label>
    
</div>    
    
</div>    

<div class="block">    
    
<input type="text" placeholder="اكتب هنا الاجابه الثالثه" class="three">      
  
<div class="togglebx">
    
<label class="labelt">
    
<div class="con">
    
<input class="switch" type="checkbox" name="check" value="check">
    
<div class="toggle"></div>
    
</div>
    
</label>
    
</div>    
    
</div>    

<div class="block">    
    
<input type="text" placeholder="أكتب هنا الاجابه الرابعه" class="four">          
  
<div class="togglebx">
    
<label class="labelt">
    
<div class="con">
    
<input class="switch" type="checkbox" name="check" value="check">
    
<div class="toggle"></div>
    
</div>
    
</label>
    
</div>    
    
</div>    
    
</div>    

<a class="save" href="#"><span>حفظ التعديلات</span></a>    

<a class="delete" href="#"><span>ازالة العنصر</span></a>      
    
</div>    

</div>          
    
</div>    

</section>    
    
<script>

// elements menu

function myFunction() {
  var x = document.getElementById("side");
  if (x.style.display === "none") {
    x.style.display = "flex";
  } else {
    x.style.display = "none";
  }
}

// just numbers text box code

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
document.getElementById("myBtn").onclick = function() {
  document.getElementById("myModal").style.display = "block";
}

// When the user clicks on <span> (x), close the modal
document.getElementById("close").onclick = function() {
  document.getElementById("myModal").style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>    
    