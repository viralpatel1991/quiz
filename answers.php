<?php
 include('pages/connection.php'); 
  $query = "select * from master_questions where ques_status = 1 order by date_added desc";
  $result = mysqli_query($con, $query);
?>
<html>
<head>
	<title>Quiz</title>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<section class="showcase showcase-2">
		<div class="well">
	      <h1 class="text-center">Order a List</h1>
	      <div class="row text-center">
              <div class = 'col-xs-6'>
                  <a href="index.php" class="btn btn-primary btn-block">Home</a>
              </div>
              <div class = 'col-xs-6'>
                  <a href="answers.php" class="btn btn-primary btn-block active">quiz</a>
              </div>
	      </div>
	    </div>
		<div class="container-fluid">
		<?php 
	 		while($row = mysqli_fetch_array($result)){
				$n = 1;
				echo"<div class='col-md-4'>
		  			<div class='panel panel-default'>
		    			<div class='panel-body'>
		      				<p>". $row['ques_desc'] ."</p>
		      				<ul class='drag-list'>";
		      				$answers = explode(',',$row['ans'],-1); 	
			  				foreach($answers as $ans){
			    				echo"<li><span class='drag-area order-list_". $row['ques_id'] ."' data-value='". $n."'>". $ans ."</span></li>";
			    				$n++;
			  				}
		      				echo"</ul>
			  				<p style='display:none' id='correct_format_". $row['ques_id'] ."'>". $row['correct_order'] ."</p>
		      				<button id='check_answer_". $row['ques_id'] ."' onClick='check_answer(this.id)' class='btn btn-info pull-right'>Check Answer</button>
		    			</div>
		  			</div>
				</div>";
			}
		?>
		</div>
	</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/drag-arrange.js"></script> 
<script type="text/javascript">
      $(function() {
          $('.draggable-element').arrangeable();
          $('li').arrangeable({dragSelector: '.drag-area'});
      });
	  
	  function check_answer(id){
		 var fields = id.split('_');
		 var check_id = fields[2];
		  var data = '';
		  var correct_order = $('#correct_format_'+check_id).html();
		  var order = new Array();
		  order = correct_order.split(',');
		   $('.order-list_'+check_id).each(function(d) {
		  
		   if( $(this).attr('data-value') == order[d]){
			   $(this).css("background-color", "#9ed3b3");
		   }
		   else{
		     $(this).css("background-color", "red");
		   }

        });	
		//alert(correct_order); alert(order);
	  }
    </script>
</body>
</html>
