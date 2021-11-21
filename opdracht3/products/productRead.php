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
// Read products

$result = $product->read();
$num = $result->num_rows;
// Check if more then 0 records are found
if($num>0){
    $products_arr = array();
    $id = 0;
    while ($row = $result->fetch_assoc()){
        extract($row);
        $product_item=array(
            "p_id" => $p_id,
            "p_name" => $p_name,
            "p_description" => html_entity_decode($p_description),
            "p_price" => $p_price
        );
        array_push($products_arr, $product_item);
    }

    http_response_code(200);
    var_dump($products_arr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "Geen producten gevonden")
    );
}
?>