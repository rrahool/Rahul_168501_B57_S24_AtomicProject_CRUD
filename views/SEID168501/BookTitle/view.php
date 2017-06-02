<?php

    require_once "../../../vendor/autoload.php";

    use App\BookTitle\BookTitle;
    use App\Message\Message;
    use App\Utility\Utility;

    if(!isset($_GET['id'])) {

        Message::message("You can't visit view.php without id (ex: view.php?id=23)");
        Utility::redirect("index.php");
    }

    $obj = new BookTitle();

    $obj->setData($_GET);

    $singleData = $obj->view();

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Book List - Single</title>
        <link rel="stylesheet" href="../../../resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../resources/w3css/4/w3.css">
        <script src="../../../resources/bootstrap/js/jquery.js"></script>
        <script src="../../../resources/bootstrap/js/bootstrap.min.js"></script>

    </head>
    <body>


    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="w3-panel w3-blue w3-card-4">
                    <h2> Single Book Information - Book Title </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <table class="w3-table-all w3-hoverable">
                    <?php
                        echo "
                                <tr>
                                    <td>ID: </td>
                                    <td>$singleData->id</td>
                                </tr>
                                <tr>
                                    <td>Book Title: </td>
                                    <td>$singleData->book_title</td>
                                </tr>
                                <tr>
                                    <td>Author: </td>
                                    <td>$singleData->author_name</td>
                                </tr>
";
                    ?>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>


</body>
</html>
