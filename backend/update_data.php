<?php
require_once "../connection.php";

$json = file_get_contents('php://input');
$data = json_decode($json);

$sql = "update tb_barang set " .
       "  nama='" . $data->nama . "', " .
       "  kategori='" . $data->kategori . "', " .
       "  stok='" . $data->stok . "', " .
       "  updated=CURRENT_TIMESTAMP " .
       "where id='" . $data->id . "'";
$result = pg_query($sql);
$row = pg_affected_rows($result);
$response = new stdClass();
if($row > 0) {
    $response->status = "success";
} else {
    $response->status = "fail";
}
echo json_encode($response);
?>