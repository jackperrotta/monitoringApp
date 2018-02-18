<?php

function addVisitor($fName, $lName, $email, $password, $address, $address2, $city, $state, $zip, $type){
  global $db;
  $statement = $db->prepare(
    'INSERT INTO users (email, password, fName, lName, address, address2, city, state, zip, accountType)
    VALUES (:email, :password, :fName, :lName, :address, :address2, :city, :state, :zip, :accountType)'
  );
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $password);
  $statement->bindValue(':fName', $fName);
  $statement->bindValue(':lName', $lName);
  $statement->bindValue(':address', $address);
  $statement->bindValue(':address2', $address2);
  $statement->bindValue(':city', $city);
  $statement->bindValue(':state', $state);
  $statement->bindValue(':zip', $zip);
  $statement->bindValue(':accountType', $type);
  $result = $statement->execute();
  $statement->closeCursor();
  return $result;
};

function getGroups(){

};
?>
