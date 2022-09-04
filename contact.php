<?php
  $server="localhost";
  $username="root";
  $password="";
  $con=new mysqli($server,$username,$password,"practice");
  if(!$con){
  die(mysqli_error($con));
  }

//    mysqli_select_db($con,'portfoliocontact');
   $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];
    $query="INSERT INTO portfoliocontact (`Name`, `Email`, `Subject`, `Message`, `Time/Date`) 
      VALUES ('$name', '$email', '$subject', '$msg', current_timestamp());";
   
   mysqli_query($con,$query);
   header('location:index.php');
  
//   $insert = false;
//   if(isset($_POST['name'])){
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//    $con = mysqli_connect($server, $username, $password,"portfolio-contact");
//  //  if ($con) {
//  //      echo("your database has been connected");
//  //  } else {
//  //      die("your database couldn't connected.try again please".mysqli_connec_error());
//  //  }

//     $name=$_POST['name'];
//     $email=$_POST['email'];
//     $subject=$_POST['subject'];
//     $msg=$_POST['msg'];
      
//     $sql="INSERT INTO `practice`.`portfolio-contact` (`Name`, `Email`, `Subject`, `Message`, `Time/Date`) 
//       VALUES ('$name', '$email', '$subject', '$msg', current_timestamp());";
    
//     mysqli_query($con,$sql);
//     // if($result){
//     // echo "Data Inserted Successfully";
//     // }
//     // else{
//     // die(mysqli_error($con));
//     // }
//  }
?>
