<?php include '../view/homeHeader.php' ?>

<div class="container" style="height: 70vh;">
  <div class="row mt-5">
    <div class="col-md-6 mx-auto text-center">
      <img class="mb-3" src="../img/logo.png" style="height: 150px; width: 150px;">
      <form action="index.php?type=<?php echo $type?>" method="post">
        <h1 class="h3 mb-3 font-weight-normal text-capitalize"><?php echo $type;?> Login</h1>
        <div>
            <?php echo $message;?>
        </div>
        <label for="email" class="sr-only">Email</label>
        <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control my-2" placeholder="Password" required>
        <div class="mt-3">
          <p>
            <a href="<?php echo $base_path;?>/usersShared/index.php?type=employee&status=register">
            Create Account
          </a> |
          <?php
            if($type == 'visitor'){
              echo "<a href='" . $base_path . "/userShared/index.php?type=employee&status=login'>
              Employee Login
              </a>";
            } else{
              echo "<a href='" . $base_path . "/userShared/index.php?type=visitor&status=login'>
              Visitor Login
              </a>";
            }
          ?>
          </p>
        </div>
        <button class="btn btn-lg btn-primary btn-block mt-2" type="submit" name="login">
          Sign In
        </button>
      </form>
    </div>
  </div>
</div>

<?php include '../view/homeFooter.php' ?>
