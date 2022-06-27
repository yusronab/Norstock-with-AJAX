<?php
header('Access-Control-Allow-Origin: *');
require_once '../connection.php';

$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "select * from tb_barang where nama like '%". $data->key ."%'";
$result = pg_query($sql);

$data = pg_fetch_all($result);
echo json_encode($data);
?>