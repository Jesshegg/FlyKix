<?php
require dirname(__DIR__) ."/bootstrap.php";
 ?>

<!DOCTYPE html>
<html lang=en>
<head>
       <title>Flykix</title>
       <meta charset=:"utf-8">
       <meta name="viewport" content="width=device-width,initial-scale=1">
       <link rel="stylesheet" href="css/flykix.css">
</head>
<body>
       <div class="masthead"><?php include 'modules/masthead.php'; ?></div>
       <div class="navigation"><?php include 'modules/navigation.html';?></div>
       <div class="content"><?php include 'pages/'. $content . '.php'; ?></div>
       <div class="footer"><?php include 'modules/footer.php'; ?></div>
</body>
</html>
