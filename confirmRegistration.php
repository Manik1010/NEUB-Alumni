<?php
     session_start(); 

     $name = $_POST['name']; 
     $email = $_POST['email'];
     $pass = $_POST['password'];
     $c_pass = $_POST['cpassword'];
     $usertype = $_POST['usertype'];
     $dob      = $_POST['dob'];

     if($pass != $c_pass){
     	
     	$_SESSION['error_msg'] = "Password and Confirm Password didn't match";
     	header("Location: registration.php");
     }

     $conn = mysqli_connect('localhost', 'root', '', 'projectwork2');

     $sql1 = "SELECT * from users where email = '$email' ";

     $result = mysqli_query($conn, $sql1);

     $rowcount = mysqli_num_rows($result);

     

     if($rowcount >  1){
     	
     	$_SESSION['error_msg']= "Account already exist please login";
     	header("Location: registration.php");
     }
     else{
     	     $sql = "INSERT into users (id,usertype,name,email,password,cpassword,dob)values (null,'$usertype','$name', '$email','$pass','$c_pass','$dob')";

		     if(mysqli_query($conn, $sql)){
		     	
		     	$_SESSION['reg_msg'] = "Registration Successfully. Please Login";
		     	header("Location: login.php");
		     	
               }
        }



?>