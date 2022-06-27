<?php
require_once "../connection.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "select * from tb_barang where id='" . $data->id . "'";
$result = pg_query($sql);

echo json_encode(pg_fetch_object($result));
?>