<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// db connection
include_once "../config/db_connection.php";
include_once "../product.php";

// DB and Product Instance
$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

// $product->update($_GET("p_id"), $_GET("p_name"));
echo ($_GET["p_id"]);
?>