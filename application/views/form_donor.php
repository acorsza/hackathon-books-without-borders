<div class="container">
  <?php echo validation_errors(); ?>
  <div class="div-new-user">
  <h1>New user?</h1>
    <form class="form-new_user" role="form" action="create_donor" method="post">
      <div class="input-group input-group-lg">
          <span class="input-group-addon"></span>
            <input type="text" class="form-control" placeholder="Name" name="name" requires autofocus>
      </div>
      <br />
      <div class="input-group input-group-lg">
          <span class="input-group-addon"></span>
            <input type="text" class="form-control" placeholder="Login" name="login" required>
      </div>
            <br />
            <div class="input-group input-group-lg">
              <span class="input-group-addon"></span>
              <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <br />
            <div class="input-group input-group-lg">
              <span class="input-group-addon"></span>
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
            <br />
            <div class="input-group input-group-lg half-size float-left">
              <span class="input-group-addon"></span>
              <input type="tel" class="form-control" placeholder="Phone Number" name="phone1">
            </div>

            <div class="input-group input-group-lg half-size float-right">
              <span class="input-group-addon"></span>
              <input type="tel" class="form-control" placeholder="Mobile Number" name="phone2">
            </div>
            <br />
            <div class="countries">
              <select class="input-group input-group-lg form-control" name="country">
                  <option>Where are you from?</option>
                    <?php foreach($countrylist  as $r): ?>
                      <option value=<?php echo "\"$r->idcountries\""?>>
                    <?php 
                    echo $r->country;
                    ?>
                    </option>
                    <?php endforeach; ?>
              </select>

            </div>
            <label class="checkbox">
          <input type="checkbox" value="remember-me" required> I agree with terms
        </label>
                  
              <br />
            <button type="submit" class="btn btn-default" name="submit">Register &raquo;</button>
          </form>
</div>


  