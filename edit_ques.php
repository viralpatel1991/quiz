<?php
include('pages/connection.php');
$ques_id = $_GET['ques'];
$query = "select * from master_questions where ques_id = '$ques_id'";
$result = mysqli_query($con, $query);;
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Edit Question</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container-fluid">
    <!-- heading -->
    <div class="well">
        <h1 class="text-center">Edit Question</h1>
        <div class="row text-center">
            <div class='col-xs-4'>
                <a href="index.php" class="btn btn-primary btn-block">Home</a>
            </div>
            <div class='col-xs-4'>
                <a href="edit_ques.php?ques=<?php echo $ques_id ?>" class="btn btn-primary btn-block active">Edit
                    Question</a>
            </div>
            <div class='col-xs-4'>
                <a href="answers.php" class="btn btn-primary btn-block">quiz</a>
            </div>
        </div>
    </div>
    <!-- edit question form -->
    <form method="post" action="pages/update_question.php">
        <div class="add_ques">
            <div class="col-md-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Edit Question</div>
                    <div class="panel-body">
                        <div class="row">
                            <!-- edit question body -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Question</label>
                                    <textarea class="form-control" name="ques"
                                              required><?php echo $row['ques_desc'] ?></textarea>
                                </div>
                            </div>
                            <!-- edit Correct answer body -->
                            <input type="hidden" name="ques_id" value="<?php echo $row['ques_id'] ?>">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Correct Order
                                        <small>(numeric order in comma seperated string)</small>
                                    </label>
                                    <textarea class="form-control" name="correct_order"
                                              required><?php echo $row['correct_order'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- edit answer body -->
                            <?php
                            $answers = explode(',', $row['ans'], -1);
                            foreach ($answers as $ans) {
                                echo "<div class='div-ans col-md-6'>
                                          <div class='form-group'>
                                                <label>Answer </label>
                                                <textarea class='form-control' name='ans1[]' required>" . $ans . "</textarea>
                                          </div>
                                          <button type='button'class='add-ans btn btn-sm btn-default'>Add Answer</button>
                                          <button style='margin-left:5px' type='button' class='ans-remove btn btn-sm btn-danger'>Delete Answer</button>
                                       </div>";
                            }
                            ?>
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
    $(".btn-copy").on('click', function () {
        var ele = $(this).closest('.add_ques').clone(true);
        $(this).closest('.add_ques').after(ele);
    });

    $('.btn-remove').on('click', function () {
        $(this).closest('.add_ques').remove();
    });

    $(".add-ans").on('click', function () {

        var ele = $(this).closest('.div-ans').clone(true);
        $(this).closest('.div-ans').after(ele);

    });

    $('.ans-remove').on('click', function () {
        $(this).closest('.div-ans').remove();
    });
</script>
</body>
</html>
