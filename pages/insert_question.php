<?php
include('connection.php');

$ques = $_POST['ques'];
$ans_1 = '';
foreach ($_POST['ans1'] as $ans) {
    if ($ans != '') {
        $ans_1 .= $ans . ',';
    }
}
$correct_order = $_POST['correct_order'];

$i = 0;
foreach ($ques as $row) {
    $query = "insert into master_questions(ques_desc, ans, correct_order) values(
     '$row','$ans_1','$correct_order[$i]')";
    mysqli_query($con, $query);
    $i++;
}
header('location:../index.php');
?>