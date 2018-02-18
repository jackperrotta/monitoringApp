<?php include '../view/homeHeader.php' ?>

<div class="container">
  <div class="row mx-auto">
    <div class="col-lg-10 mx-auto">
      <div class="text-center">
        <img class="mt-3" src="../img/marka-logo.png" style="height: 150px; width: 150px;">
        <h1 class="h3 my-3 font-weight-normal text-capitalize">Finish <?php echo $type;?> Registration</h1>
        <div id="message">
            <?php echo $message;?>
        </div>
        <h2 class="mt-5">Create a Group</h2>
      </div>
      <form action="index.html" method="post">
        <div class="form-group">
         <label for="exampleInputEmail1">Group Name</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
         <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
         <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
       </div>
       <div class="form-check">
         <input type="checkbox" class="form-check-input" id="exampleCheck1">
         <label class="form-check-label" for="exampleCheck1">Check me out</label>
       </div>
      <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php include '../view/homeFooter.php' ?>
