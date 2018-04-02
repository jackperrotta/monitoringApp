<?php

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

?>
