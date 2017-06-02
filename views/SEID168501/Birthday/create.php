<?php

    require_once "../../../vendor/autoload.php";

    use App\Message\Message;

    if(!isset($_SESSION))
        session_start();

    $msg = Message::message();

    echo "<div> <div id='message'> $msg </div> </div>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Birthday</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
    <script src="../../../resources/bootstrap/js/jquery.js"></script>
    <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>
    <style>
        div.container{
            margin-top: 150px;
        }
        div.col-lg-6{
            background-color: lightyellow;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
    <h2>Birthday Form</h2>
    <form class="form-horizontal" action="store.php" method="post">
        <div class="form-group">
            <label class="control-label col-sm-3" for="name">Name: </label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-3" for="hobbies">Date of Birth: </label>
            <div class="col-sm-9">
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-lg-3"></div>
</div>
<script src="../../../resources/bootstrap/js/jquery.js"></script>

<script>


    jQuery(

        function($) {
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
            $('#message').fadeIn (550);
            $('#message').fadeOut (550);
        }
    )
</script>
</body>
</html>

