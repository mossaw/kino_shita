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
<?php

function kinoshita($i, $max = 100)
{
    if ($i % 15 === 0) {
        echo '木舌."\n"', PHP_EOL;
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
test2
  </body>
</html>