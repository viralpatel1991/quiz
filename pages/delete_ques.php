<?php
  include('connection.php');
  
  $ques = $_GET['ques'];


  $query = "delete from master_questions where ques_id = '$ques'";
mysqli_query($con, $query);
  
  header('location:../index.php');
?>