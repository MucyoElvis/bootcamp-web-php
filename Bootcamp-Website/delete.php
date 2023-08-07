<?php
 include('./Config/config.php');

 if(isset($_GET['id'])){
  $user_id=$_GET['id']; 
  $sql="DELETE FROM `bootcamp` WHERE `id`=".$user_id;

  $result=mysqli_query($conn,$sql);
  if($result){
   $msg='SUCCESSFULLY DELETED';
   header('location:view.php?msg='.$msg);
  }else{
   echo 'ERROR'.$sql.'<br>'.mysqli_error($conn);
  }
 }
?>