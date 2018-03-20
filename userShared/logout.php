<?php include '../view/homeHeader.php' ?>
<div class="contianer">
  <div class="row text-center mt-3">
    <div class="col-md-8">
      <img src="<?php echo $base_path ?>/img/network.jpg" alt="" style="width:100%">
    </div>
    <div class="col-md-4 mt-5">
      <h1>You've been successfully logged out</h1>
      <br>
      <a href="<?php echo $base_path;?>/userShared/index.php?type=employee&status=login" class="btn btn-info">Login</a>
    </div>
  </div>
</div>
<?php include '../view/homeFooter.php' ?>
