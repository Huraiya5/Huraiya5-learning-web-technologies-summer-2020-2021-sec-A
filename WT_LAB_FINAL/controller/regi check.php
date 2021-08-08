<?php
session_start();


if(isset($_POST['Submit']))
{
   $name= $_POST['name'];
   $companyName= $_POST['Cname'];
   $contactNumber= $_POST['Cno'];
   $userName= $_POST['username'];
   $password= $_POST['password'];
   if($name=="" || $companyName=="" || $contactNo="" || $userName=="" || $password=="")
   {
    echo"null submission";
   }

    else
      
   {
        $conn = mysqli_connect('localhost', 'root', '', 'jobCompany');
        $sql = "insert into registration values('$name', '$companyName', '$contactNumber', '$userName', '$password')"; 
        $result = mysqli_query($conn, $sql);
        header('location:../view/login.php');
        
   }
 }
   

?>