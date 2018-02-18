<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/registerDb.php"; ?>
<?php

$message = "";
$type = filter_input(INPUT_GET,'type');

if (isset($_POST['visitorRegister'])){

  $fName = filter_input(INPUT_POST, 'fName');
  $lName = filter_input(INPUT_POST, 'lName');
  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  $password2 = filter_input(INPUT_POST, 'password2');
  $address = filter_input(INPUT_POST, 'address');
  $address2 = filter_input(INPUT_POST, 'address2');
  $city = filter_input(INPUT_POST, 'city');
  $state = filter_input(INPUT_POST, 'state');
  $zip = filter_input(INPUT_POST, 'zip');

  if($password == $password2) {

    global $fName;
    global $lName;
    global $email;
    global $password;
    global $address;
    global $address2;
    global $city;
    global $state;
    global $zip;
    global $type;

    $success = addVisitor($fName, $lName, $email, $password, $address, $address2, $city, $state, $zip, $type);

    if ($success) {

      $groups = getGroups();

      if(isset($_POST['registerTwo'])){

        // $visitors = finishVisitor($email);
      }

      include 'visitorRegisterTwo.php';
      exit();
    }
  } else {
    $message = "<div class='alert alert-danger' role='alert'>Passwords don't match, Please try again.</div>";
    include 'visitorRegister.php';
    exit();
  }
};

//if all else fails
include 'visitorRegister.php';
exit();

?>
