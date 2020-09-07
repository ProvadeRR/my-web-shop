<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title ?></title>
    <link rel="stylesheet" href="/app/public/styles/bootstrap.min.css">
    <?=$class?>

    <script src="/app/public/js/jquery-3.5.1.min.js"></script>
</head>
<body>
<?php require_once 'app/views/plugins/nav_bar.php';?>
<div class="container">
    <?=$content?>
</div>
<script src="/app/public/js/search.js"></script>
<?=$script?>
</body>
</html>