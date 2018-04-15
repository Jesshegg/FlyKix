<?php
session_start();
require dirname(__DIR__) ."/bootstrap.php";

$content = 'home';
    if (isset($_GET['p']) && file_exists('pages/'. $_GET['p'] . '.php')) {
       $content = $_GET['p'];
    } elseif (isset($_GET['p']) && !file_exists('pages/'. $_GET['p'] . '.php')) {
        $content = '404';
    }

if(!empty($_GET["action"])) {
    switch($_GET["action"]) {
    	case "add":
    		if(!empty($_POST["quantity"])) {
    			//$productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
    			//$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
          $itemArray = array($_POST["productid"]=>array('cost'=>$_POST["cost"], 'description'=>$_POST["description"], 'quantity'=>$_POST["quantity"], 'productid'=>$_POST["productid"]));

    			if(!empty($_SESSION["cart_item"])) {
    				if(in_array($_POST["productid"],array_keys($_SESSION["cart_item"]))) {
    					foreach($_SESSION["cart_item"] as $k => $v) {
    							if($_POST["productid"] == $k) {
    								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
    									$_SESSION["cart_item"][$k]["quantity"] = 0;
    								}
    								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
    							}
    					}
    				} else {
    					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
    				}
    			} else {
    				$_SESSION["cart_item"] = $itemArray;
    			}
    		}
    	break;
    	case "remove":
    		if(!empty($_SESSION["cart_item"])) {
    			foreach($_SESSION["cart_item"] as $k => $v) {
    					if($_GET["code"] == $k)
    						unset($_SESSION["cart_item"][$k]);
    					if(empty($_SESSION["cart_item"]))
    						unset($_SESSION["cart_item"]);
    			}
    		}
    	break;
    	case "empty":
    		unset($_SESSION["cart_item"]);
    	break;
    }
}

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
       <div class="navigation"><?php include 'modules/navigation.php'; ?></div>
       <div class="cart"><?php include 'pages/cart.php'; ?></div>
       <div class="content"><?php include 'pages/'. $content . '.php'; ?></div>
       <div class="footer"><?php include 'modules/footer.php'; ?></div>
</body>
</html>
