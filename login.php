 <?php 
 include_once 'header.php';?>

 <div  class="w-50 mx-auto" style="padding-top: 100px;">
    <h1 class="mb-3">Please sign in</h1>
 
 
    <form action="loginLogic.php" method="POST">


  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="username" />
    <label class="form-label" for="form2Example1">username</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control"  name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <!-- Submit button -->
  <button name="submit"  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
  </div>
</form>
 </div>

 <?php include_once 'footer.php';?>
