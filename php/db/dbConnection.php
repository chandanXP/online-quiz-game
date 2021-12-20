<?php
 $servername = "localhost";
 $username = "root";
 $passpword = "";
 $database = "onlinequiz";

 //creating  a connection object

 $conn = mysqli_connect($servername, $username, $passpword, $database);

 //Die if connection was not successfull

 if(!$conn){
     die("Sorry we failed to connect: ".mysqli_connect_error());
 }
 else{
     echo "<div class='alert alert-success fade show mb-1' role='alert'>
     Database is connected.
   </div>";
    
 }
?>