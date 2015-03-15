<div class="container">
	<?php echo validation_errors(); ?>
      <form class="form-signin" role="form" action="login/try_login" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="form-control" placeholder="Username" id="username" name="username" required autofocus>
        <br />
        <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" required>
        <br />
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <br />
        <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">Sign in</button>
      </form>