<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>

<?php

$utilize = filter_input(INPUT_GET,'utilize');

session_start();
$fName = $_SESSION['Firstname'];
$lName = $_SESSION['Lastname'];

// Logout
if (isset($_GET['logout'])){
    header('Location: ../userShared/index.php?logout');
    exit();
}

// Apps downloads page
if ($_SESSION['LOGGED_IN'] === 'OK' && isset($_GET['downloads'])){
  include 'apps.php';
  exit();
}

// Apps downloads page
if ($_SESSION['LOGGED_IN'] === 'OK' && isset($_GET['reports'])){
  include 'reports.php';
  exit();
}

// If utilize is set show table
if (isset($_GET['utilize'])){
  include 'utilize.php';
  exit();
}
// If session go to Dashboard
if ($_SESSION['LOGGED_IN'] === 'OK') {

  include 'dashboard.php';
  exit();
};

?>
