<?php
include('connection.php');

$ques = $_POST['ques'];
$correct_order = $_POST['correct_order'];
$ques_id = $_POST['ques_id'];

$ans_1 = '';
foreach ($_POST['ans1'] as $ans) {
    if ($ans != '') {
        $ans_1 .= $ans . ',';
    }
}

$query = "update master_questions set ques_desc ='$ques', ans='$ans_1' , correct_order='$correct_order' where ques_id = '$ques_id'";
mysqli_query($con, $query);

header('location:../index.php');
?>