<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/analyticsDb.php"; ?>

<?php

$data = getUsage();
// print_r($data);
$arr = array();
for ($i=0; $i < sizeof($data); $i++) {
   // $x = $data[$i][0];
   // $y = $data[$i][1];
   $obj = new \stdClass();
   $obj->x = $data[$i][1];
   $obj->y = $data[$i][0];
   array_push($arr, $obj);
}
// print_r($arr);
// echo implode(",", $data);


$json = json_encode($arr);
echo $json;

?>
