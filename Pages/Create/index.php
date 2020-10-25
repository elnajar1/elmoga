<?php

	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/includes/header.php';

?>

<div class="container">
	
	<div class="row">
		<div class="col">
			<h1>
				انشاء اختبار
			</h1>
		</div>
	</div>

	<div class="row">
		<div class="col">
			
			<form method = "post" action = "save_form">
					
					<div class="border p-1 m-1" style="border-radius: 5px">
						
						<div class="form-group">
		                    <textarea type="text"  class="form-control"  name = "question_1[]" required placeholder="  نص السؤال  "></textarea>
		                </div>		
		                
		                <div id = "answars_container_of_1">
		              
			                <div class="form-group row ">

			                	<input type="radio"  class="col-2 form-control"  name = "answar_1_is_correct[]" required >

			                	<input type="text"  class="col-8 form-control "  name = "answar_1[]" required placeholder="  اكتب نص الاختيار   " >

			                </div>
			            
			            </div>

		                <div class="form-group w-50 mr-5">
		                	<button class="add_answar btn btn-block btn-info text-dark rounded"  id = "1">
								اضف اختيار اخر 
							</button>
		                </div>

					</div>

	                <div class = "questions_container" id = "1">
	                	
	                </div>		
					
					<div class="row">

						<div class="col-8">
							<button class="btn btn-block btn-outline-primary rounded" id = "add_question">
								اضف سوال  اختياري 
							</button>
						</div>

						<div class="col">
							<button type = "submit" class ="btn btn-block btn-primary rounded"> حفظ  </button>
						</div>
					</div>
				
				</form>

		</div>
	</div>

	<div class="row">
		<div class="col">

		</div>
	</div>

</div>

<?php

	include_once $_SERVER['DOCUMENT_ROOT'] . '/elmoga/includes/footer.php';

?>

<script type="text/javascript">

$(document).ready(function(){

	var question = 2;

	//add_chose
	$('#add_question' ).click(function(e){
		e.preventDefault();
	    e.stopImmediatePropagation();

		$(".questions_container" ).append('<div class="border p-1 m-1" style="border-radius: 5px"> <div class="form-group"><textarea type="text"  class="form-control"  name = "question_' + question + '[]" required placeholder="  نص السؤال  "></textarea> </div>	 <div id = "answars_container_of_' + question + '"><div class="form-group row "><input type="radio"  class="col-2 form-control"  name = "answar_' + question + '_is_correct[]" required ><input type="text"  class="col-8 form-control "  name = "answar_' + question + '[]" required placeholder="  اكتب نص الاختيار   " ></div></div><div class="form-group w-50 mr-5"><button class="add_answar btn btn-block btn-info text-dark rounded"  id = "' + question + '"> اضف اختيار اخر  </button> </div></div>	</div>');

		question++

	});

	$('.add_answar' ).click(function(e){
		e.preventDefault();
	    e.stopImmediatePropagation();

		$("#answars_container_of_" + this.id ).append('	<div class="form-group row "> <input type="radio"  class="col-2 form-control"  name = "answar_' + this.id + '_is_correct[]" required > <input type="text"  class="col-8 form-control "  name = "answar_' + this.id + '[]" required placeholder="  اكتب نص الاختيار   " > </div>');

	});

});

</script>