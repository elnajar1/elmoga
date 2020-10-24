$(document).ready(function(){

	//add_chose
	$('.add_chose' ).click(function(e){
		e.preventDefault();
	    e.stopImmediatePropagation();

		$.ajax({
			url : "../ajax/chose.php", 
			type : "POST", 
			data : {  }, 
			beforeSend : function(){
				$(".question_editor_container" ).html(' . . . . . .  ');
			}, 
			success:  function(data){
				$(".question_editor_container").html(data);

			}
		});
		return false ;
	});
});
