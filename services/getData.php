<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>

<?php
// $data = array(
//   array(10,40),
//   array(12,56),
//   array(56,12)
// );
function getUsage() {
  global $db;
  $statement = $db->prepare(
    'select `license-num`, `TotalCost` from LicenseData'
  );
  $statement->execute();
  $data = $statement->fetchAll();
  $statement->closeCursor();
  return $data;
}

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
