<?php
     session_start(); 
  
?>

   
    <title>Login</title>


  

    

    <?php    include('include/unregisterHeader.php'); ?><br><br><br>
        <div class="row">
            <div class="col-md-3"></div>
            
            <div class="col-md-6 col-md-offset-3">

               <?php if(isset($_SESSION['error'])) {?>
                <div class="alert alert-warning" role="alert">
                    <strong>Error! </strong> Wrong email or Password
                </div>
                <?php } ?>

              <!-- For Register message -->
              <?php if(isset($_SESSION['reg_msg'])) {?>
                <div class="alert alert-success" role="alert">
                    <strong>Success! </strong> <?php echo $_SESSION['reg_msg']; ?>
                </div>
                <?php } ?>

            <h1>Login</h1>
            <hr>
            <form action = "confirmLogin.php" method ="POST">
              <div class="mb-3">
                <label for="email" >Email: </label>
                <input required type="email" class="form-control" name="email" placeholder = "Enter email">
              </div>

              <div class="mb-3">
                <label for="password" >Password: </label>
                <input required type="password" class="form-control" name="password" placeholder = "Password">
              </div>
              <br><br>
              
              <button type="submit" class="btn btn-primary">Login</button>
              <a class="btn btn-link" href="registration.php">Create new Account</a>
           </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>


<?php unset($_SESSION['error']);?>
<?php unset($_SESSION['reg_msg']);?>