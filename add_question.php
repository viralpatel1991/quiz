<html>
<head>
  <title>View Questions</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <div class="well">
      <h1 class="text-center">Add Question</h1>
      <div class="row text-center">
          <div class = 'col-xs-4'>
              <a href="index.php" class="btn btn-primary btn-block">Home</a>
          </div>
          <div class = 'col-xs-4'>
              <a href="add_question.php" class="btn btn-primary btn-block active">Add Question</a>
          </div>
          <div class = 'col-xs-4'>
              <a href="answers.php" class="btn btn-primary btn-block">quiz</a>
          </div>
      </div>
    </div>
    <form method="post" action="pages/insert_question.php">
      <div class="add_ques">
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading"><h3>Create Question</h3></div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Question</label>
                    <textarea class="form-control" name="ques[]" required></textarea>
                  </div>
                </div>
            
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Correct Order <small>(numeric order in comma seperated string)</small></label>
                    <textarea class="form-control" name="correct_order[]" required></textarea>
                  </div>
                </div> 
              </div> 
            
              <div class="div-ans"> 
                <div class="row">
                  <div class="col-md-9">
                    <div class="form-group">
                    <label>Answer </label>
                    <textarea class="form-control" name="ans1[]" required></textarea>
                  </div>
                </div> 
                <div class="col-md-3"><br>
                  <button type="button" class="add-ans btn btn-sm btn-primary">Add Answer</button>
                  <button style="margin-left:5px" type="button" class="ans-remove btn btn-sm btn-danger">Delete Answer</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
      </div> 
    </form>
  </div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<script>
 
  $(".add-ans").on('click', function(){
	  var ele = $(this).closest('.div-ans').clone(true);
      $(this).closest('.div-ans').after(ele);
   
  });
  
  $('.ans-remove').on('click', function(){
	  $(this).closest('.div-ans').remove();
  });
</script>
</body>
</html>
