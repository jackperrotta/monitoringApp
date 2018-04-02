<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>

<?php

session_start();

// Logout
if (isset($_GET['logout'])){
    header('Location: ../userShared/index.php?logout');
    exit();
}

// If session go to Dashboard
if ($_SESSION['LOGGED_IN'] === 'OK') {
  $fName = $_SESSION['fName'];
  $lName = $_SESSION['lName'];

  $data = array(
    array(10,40),
    array(12,56),
    array(56,12)
  );
  include 'dashboard.php';
  exit();
};

?>
