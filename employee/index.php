<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>
<?php include "../model/employeesDb.php"; ?>
<?php
// Logout
if (isset($_GET['logout'])){
    header('Location: ../usersShared/index.php?logout');
    exit();
}
include 'dashboard.php';
exit();
?>
