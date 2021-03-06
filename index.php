<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>木舌プログラム</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>

<div class="alert alert-success" role="alert">
  以下は木舌関数 kinoshita() を使用しています
</div>

<?php

function kinoshita($i, $max = 100)
{
    if ($i % 15 === 0) {
        echo '<button type="button" class="btn btn-success">木舌</button><br />', PHP_EOL;
    } elseif ($i % 3 === 0) {
        echo '木', PHP_EOL;
    } elseif ($i % 5 === 0) {
        echo '舌', PHP_EOL;
    } else {
        echo $i, PHP_EOL;
    }

    if ($i < $max) {
        kinoshita($i + 1, $max);
    }
}

kinoshita(1);
?>
  </body>

<footer>
  <small>Copyright (C) 2019 Taeko Taraba All Rights Reserved.</small>
</footer>
</html>