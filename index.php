<?php include './common/config.php' ?>
<?php include './view/homeHeader.php' ?>

<div class="container-fluid d-flex justify-content-center splashSection">
  <div class="row">
    <div class="col-lg-10 align-self-center text-center mx-auto">
      <a href="#about">
      <img src="<?php echo $base_path;?>/img/logo.png" width="30%" height="30%" alt="">
      </a>
      <!-- <a role="button" class="btn btn-secondary btn-lg mt-4" href="#about">
        Learn More
      </a> -->
    </div>
  </div>
</div>

<div id="about" class="container my-5">
  <div class="row">
    <div class="col-md-7">
      <h2>About Our Monitoring App</h2>
      <p class="lead">Our application will monitor the usage of software licenses. The
application will list all licenses that a company has purchased and that the company’s devices are
running. The application will have the ability to add or remove licenses from a company device. The
application will list the licenses being used by each department. We will develop functionality that allows
employees or departments to request a certain number of licenses for software that they need to use. It
will distribute the software licenses to certified users or retrieve them from uncertified users. The
capabilities of our application will end when including software not related to license management.</p>
    </div>
    <div class="col-md-5">
      <img class="img-fluid mx-auto" src="./img/network.jpg" alt="Network connections">
    </div>
  </div>
</div>

<?php include './view/homeFooter.php' ?>
