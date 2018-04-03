<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/userSharedDb.php"; ?>
<?php
$message = "";
$type = filter_input(INPUT_GET,'type');
$status = filter_input(INPUT_GET, 'status');
// Show login page
if ($status == 'login'){
  include 'login.php';
  exit();
};
// Visitor Login
if (isset($_POST['login']) && $type=='visitor'){
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $userId = loginUsers($email,$password,$type);
    if ($userId){
        $id = $userId[0][id];
        $fName = $userId[0][Firstname];
        $lName = $userId[0][Lastname];
        $groupId = $userId[0][GroupID];
        session_start();
        $_SESSION['logginIn']='OK';
        $_SESSION['type']='visitor';
        $_SESSION['id'] = $userId;
        $_SESSION['email'] = $email;
        $_SESSION['fName'] = $fName;
        $_SESSION['lName'] = $lName;
        $_SESSION['address'] = $address;
        $_SESSION['address2'] = $address2;
        $_SESSION['city'] = $city;
        $_SESSION['state'] = $state;
        $_SESSION['zip'] = $zip;
        $_SESSION['groupId'] = $groupId;
        header('Location: ../visitors/index.php');
        exit();
    } else{
        $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
        include 'login.php';
        exit();
    }
}
// Employee Login
if (isset($_POST['login']) && $type=='employee'){
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $userId = loginUsers($email,$password, $type);
    if ($userId){
      $fName = $userId[0][Firstname];
      $lName = $userId[0][Lastname];
      session_start();
      $_SESSION['LOGGED_IN']='OK';
      $_SESSION['Email'] = $email;
      $_SESSION['Firstname'] = $fName;
      $_SESSION['Lastname'] = $lName;
      header('Location: ../employee/index.php');
      exit();
    } else
    {
        $message = "<div class='alert alert-danger' role='alert'>Login failed. Please try again.</div>";
        include 'login.php';
        exit();
    }
}
// Show registration page
if ($type == 'employee' && $status == 'register'){
  include 'register.php';
  exit();
};
// Visitor Registration
if (isset($_POST['visitorRegister'])){
  $fName = filter_input(INPUT_POST, 'fName');
  $lName = filter_input(INPUT_POST, 'lName');
  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');
  $password2 = filter_input(INPUT_POST, 'password2');
  if($password == $password2) {
    $success = addVisitor($fName, $lName, $email, $password, $type);
    if ($success) {
      $type = 'employee';
      $userId = loginUsers($email,$password,$type);
      if ($userId){
          session_start();
          $_SESSION['logginIn'] = 'OK';
          $_SESSION['type'] = $type;
          $_SESSION['id'] = $userId[0][id];
          $_SESSION['email'] = $email;
          // $_SESSION['fName'] = $userId[0][fName];
          // $_SESSION['lName'] = $userId[0][lName];
          header('Location: ../employee/index.php');
          exit();
    }
  }
  } else {
    $message = "<div class='alert alert-danger' role='alert'>Passwords don't match, Please try again.</div>";
    include 'register.php';
    exit();
  }
};
// if all else fails
include 'logout.php';
exit();
?>
