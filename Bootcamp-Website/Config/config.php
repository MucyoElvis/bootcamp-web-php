<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $dbname="bootcamp-web";

 $conn=mysqli_connect($servername,$username,$password,$dbname) or die('Connection Failed'.mysqli_error($conn));
?>