<?php
     session_start(); //last line e session distroy / unset korte hobe
     
?>

    <title>Register</title>


  

    

    <?php    include('include/unregisterHeader.php'); ?><br><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            
            <div class="col-md-6 col-md-offset-3">

               <?php if(isset($_SESSION['error_msg'])) {?>
                <div class="alert alert-warning" role="alert">
                    <strong>Warning! </strong> <?php echo $_SESSION['error_msg'];?>
                </div>
                <?php } ?>

            <h1>Create an Account</h1>
            <hr>
            <form action = "confirmRegistration.php" method ="POST">
              <div class="mb-3">
                <label for="name" >Name: </label>
                <input required type="text" class="form-control" name="name" >
              </div>
              <div class="mb-3">
                <label for="email" >Email: </label>
                <input required type="email" class="form-control" name="email" >
              </div>
              <div class="mb-3">
                <label for="dob" >Date of Birth: </label>
                <input required type="date" class="form-control" name="dob" >
              </div>
              <div class="mb-3">
                  <label for="usertype">User Type:</label>
                  <select name="usertype" >
                    <option value="Student">Student</option>
                    <option value="Officer">Officer</option>
                    <option value="Event Manager">Event Manager</option>
                   
                  </select>
              </div>
              

              <div class="mb-3">
                <label for="password" >Password: </label>
                <input required type="password" class="form-control" name="password" >
              </div>

               <div class="mb-3">
                <label for="cpassword" >Confirm Password: </label>
                <input required type="password" class="form-control" name="cpassword" >
              </div>
              
              
              <button type="submit" class="btn btn-primary mb-3">Submit</button>
              Already have an account<a class="btn btn-link" href="login.php">Login</a>
           </form>
            </div>
        </div>
    </div>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>

<?php unset($_SESSION['error_msg']);?>
