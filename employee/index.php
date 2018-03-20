<?php include '../common/config.php';?>
<?php include "../model/database.php"; ?>

<?php
// Logout
if (isset($_GET['logout'])){
    header('Location: ../userShared/index.php?logout');
    exit();
}
include 'dashboard.php';
exit();
?>
