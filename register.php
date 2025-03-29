<?php include_once 'header.php';?>

 <div  class="w-50 mx-auto" style="padding-top: 100px;">
    <h1 class="mb-3">Please sign up</h1>


 <form action="registerLogic.php" method="POST">
    <div data-mdb-input-init class="form-outline mb-4" >
    <input type="text" id="form2Example3" class="form-control" name="name"/>
    <label class="form-label" for="form2Example3">Name</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example4" class="form-control"name="surname" />
    <label class="form-label" for="form2Example4">Surname</label>
  </div>
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example6" class="form-control" name="username"/>
    <label class="form-label" for="form2Example6">Username</label>
  </div>
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email"/>
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <!-- Submit button -->
  <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Have an account? <a href="#!">Sign In</a></p>
  </div>
</form>
 </div>



    
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

<?php include_once 'footer.php';?>
