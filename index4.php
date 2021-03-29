<?php
require 'calculator.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mini calculator</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto mt-5">
            <div class="alert alert-success text-center bg-white">mini calculator with oop</div>
            <form method="post">
            <div class="form-group">
                <input type="number" class="form-control" name="n1" placeholder="number1">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="n2" placeholder="number2">
            </div>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == "POST"){
               echo "<div class='alert alert-dark text-center'>$cn</div>";
                }
                ?>

            <div class=" text-center ">
                <button type="submit" name="plus" class="btn btn-success mr-5" >+</button>
                <button type="submit" name="min" class="btn btn-danger mr-5">-</button>
                <button type="submit" name="div" class="btn btn-warning mr-5">/</button>
                <button type="submit" name="multi" class="btn btn-secondary">*</button>
                <button type="submit" name="ref" class="btn btn-primary ml-5">refresh</button>
            </div>
            </form>

        </div>


    </div>
</div>
</body>r
</html>
