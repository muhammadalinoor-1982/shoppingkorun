<?php 
session_start();

error_reporting(0);

extract($_GET);

unset($_SESSION['cart'][$id]);

header("Location:../shopping-cart.php");

 ?>