<?php
  include('pages/connection.php'); 
  $query = "select * from master_questions where ques_status = 1 order by date_added desc";
  $result = mysqli_query($con, $query);
?>

<html>
<head>
  <title>View Questions</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="container-fluid">
    <!-- heading   -->
    <div class="well">
      <h1 class="text-center">Question List</h1>
      <div class="row text-center">
          <div class = 'col-xs-4'>
              <a href="index.php" class="btn btn-primary btn-block active">Home</a>
          </div>
          <div class = 'col-xs-4'>
              <a href="add_question.php" class="btn btn-primary btn-block">Add Question</a>
          </div>
          <div class = 'col-xs-4'>
              <a href="answers.php" class="btn btn-primary btn-block">quiz</a>
          </div>
      </div>
    </div>
    <!-- question list -->
    <div class="panel panel-info">
      <div class="panel-body">
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <th> Question </th>
            <th style="width:15%"> Options </th>
          </thead>
          <tbody>
          <?php
            while($row = mysqli_fetch_array($result)){
              $q = $row['ques_id'];
              echo"<tr>
                <td>".$row['ques_desc']."</td>
                <td><a href='edit_ques.php?ques=$q' class='btn btn-default'>Edit</a> | 
                <a href='pages/delete_ques.php?ques=$q' class='btn btn-danger'>Delete</a></td>
              </tr>";
            }
          ?> 
          </tbody>
        </table>
      </div>
     </div>
    </div> 
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> 
</body>
</html>
