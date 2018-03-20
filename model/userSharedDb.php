<?php
function addVisitor($fName, $lName, $email, $password, $type){
  global $db;
  $statement = $db->prepare(
    'INSERT INTO users (email, password, firstName, lastName, accountType)
    VALUES (:email, :password, :fName, :lName, :accountType)'
  );
  $statement->bindValue(':email', $email);
  $statement->bindValue(':password', $password);
  $statement->bindValue(':fName', $fName);
  $statement->bindValue(':lName', $lName);
  $statement->bindValue(':accountType', $type);
  $result = $statement->execute();
  $statement->closeCursor();
  return $result;
};
function loginUsers($email,$password,$type){
  global $db;
    $statement = $db->prepare(
      'select * from users where email = :email and password = :password and accountType = :type'
    );
    $statement->bindValue(':email',$email);
    $statement->bindValue(':password',$password);
    $statement->bindValue(':type',$type);
    $statement->execute();
    $userId = $statement->fetchAll();
    $statement->closeCursor();
    return $userId;
};
?>
