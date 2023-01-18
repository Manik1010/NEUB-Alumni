<?php 
     $email = $_POST['email'];
     $password = $_POST['password'];

     $conn = mysqli_connect('localhost','root','','projectwork2');

     $sql = "SELECT * from users where email = '$email' and password = '$password' ";
     
     $result = mysqli_query($conn, $sql);
     
     $rowcount = mysqli_num_rows($result);
     $data = mysqli_fetch_assoc($result);
     $id=  $data['id'];
      
     if($rowcount>0){
          session_start();
          $_SESSION['login'] = true;

          if($data['usertype'] == 'Student'){
               header("Location: RegisteredUser/index.php?id=".$id);
          }
          elseif ($data['usertype'] == 'Event Manager') {
               # code...
               header("Location: admin/Event/index.php?id=".$id);
          }
          

     
          
     }else{
        session_start();
      $_SESSION['error'] = true;
      header("Location: login.php");
     }
 ?>