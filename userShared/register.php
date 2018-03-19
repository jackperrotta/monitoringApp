<?php include '../view/homeHeader.php' ?>

<div class="container">
  <div class="row mx-auto">
    <div class="col-lg-10 mx-auto">

      <form action="index.php?type=<?php echo $type;?>" method="post">

        <div class="text-center">
          <img class="mt-3" src="../img/marka-logo.png" style="height: 150px; width: 150px;">
          <h1 class="h3 mb-3 font-weight-normal text-capitalize"><?php echo $type;?> Registration</h1>
          <div id="message">
              <?php echo $message;?>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fName" name="fName" placeholder="John" required>
          </div>
          <div class="form-group col-md-6">
            <label for="lName">Last Name</label>
            <input type="text" class="form-control" id="lName" name="lName" placeholder="Doe" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="john.doe@gmail.com" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Secret Password" required>
          </div>
          <div class="form-group col-md-6">
            <label for="password2">Confirm Password</label>
            <input type="password" class="form-control" id="password2" name="password2" placeholder="Secret Password" required>
          </div>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
        </div>
        <div class="form-group">
          <label for="address2">Address 2</label>
          <input type="text" class="form-control" id="address2" name="address2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Philadelphia">
          </div>
          <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" name="state" class="form-control">
              <option selected>Choose...</option>
              <option value="AL">Alabama</option>
            	<option value="AK">Alaska</option>
            	<option value="AZ">Arizona</option>
            	<option value="AR">Arkansas</option>
            	<option value="CA">California</option>
            	<option value="CO">Colorado</option>
            	<option value="CT">Connecticut</option>
            	<option value="DE">Delaware</option>
            	<option value="DC">District Of Columbia</option>
            	<option value="FL">Florida</option>
            	<option value="GA">Georgia</option>
            	<option value="HI">Hawaii</option>
            	<option value="ID">Idaho</option>
            	<option value="IL">Illinois</option>
            	<option value="IN">Indiana</option>
            	<option value="IA">Iowa</option>
            	<option value="KS">Kansas</option>
            	<option value="KY">Kentucky</option>
            	<option value="LA">Louisiana</option>
            	<option value="ME">Maine</option>
            	<option value="MD">Maryland</option>
            	<option value="MA">Massachusetts</option>
            	<option value="MI">Michigan</option>
            	<option value="MN">Minnesota</option>
            	<option value="MS">Mississippi</option>
            	<option value="MO">Missouri</option>
            	<option value="MT">Montana</option>
            	<option value="NE">Nebraska</option>
            	<option value="NV">Nevada</option>
            	<option value="NH">New Hampshire</option>
            	<option value="NJ">New Jersey</option>
            	<option value="NM">New Mexico</option>
            	<option value="NY">New York</option>
            	<option value="NC">North Carolina</option>
            	<option value="ND">North Dakota</option>
            	<option value="OH">Ohio</option>
            	<option value="OK">Oklahoma</option>
            	<option value="OR">Oregon</option>
            	<option value="PA">Pennsylvania</option>
            	<option value="RI">Rhode Island</option>
            	<option value="SC">South Carolina</option>
            	<option value="SD">South Dakota</option>
            	<option value="TN">Tennessee</option>
            	<option value="TX">Texas</option>
            	<option value="UT">Utah</option>
            	<option value="VT">Vermont</option>
            	<option value="VA">Virginia</option>
            	<option value="WA">Washington</option>
            	<option value="WV">West Virginia</option>
            	<option value="WI">Wisconsin</option>
            	<option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="123456">
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="visitorRegister">REGISTER</button>
      </form>
    </div>
  </div>
</div>

<?php include '../view/homeFooter.php' ?>
