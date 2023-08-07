<?php
  include('./Config/config.php');

  if(isset($_POST['update'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $user_id=$_POST['user_id'];


    $sql="UPDATE `bootcamp` SET
    `firstname`='".$firstname."',`lastname`='".$lastname."',
    `email`='".$email."',`phone`='".$phone."' WHERE `id`=".$user_id;
    
    $result=mysqli_query($conn,$sql);
    if($result){
      echo ' SUCCESSFULLY UPDATED';
      header('location:view.php?msg= SUCCESSFULLY UPDATED');
    }else{
      echo 'Error'.$sql.'<br>'.mysqli_error($conn);
    }
  }

  if(isset($_GET['id'])){
    $user_id=$_GET['id'];

    $sql="SELECT * FROM `bootcamp` WHERE `id`=".$user_id;
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
      while($_row=$result->fetch_assoc()){
        $firstname=$_row['firstname'];
        $lastname=$_row['lastname'];
        $email=$_row['email'];
        $phone=$_row['phone'];
      }
    }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bootcamp web Update</title>
 <link rel="stylesheet" href="./Assets/bootstrap.min.css">
</head>
<body>
 <div class="container col-4 ">
   <h4 class="mt-5 text-center">Form update</h4>
     <form action="" method="POST">
     
     <div class="form-group mt-3 p-2">
      <label for="first-name">
       First name
      </label>
      <input type="text" class="form-control" name="firstname" value="<?php echo $firstname;?>">
      <input type="hidden" name="user_id" value="<?php echo $user_id;?>">
     </div>

     <div class="form-group p-2">
      <label for="last-name">
       last name
      </label>
      <input type="text" class="form-control" name="lastname" value="<?php echo $lastname?>">
     </div>

     <div class="form-group p-2">
      <label for="email">
       Email
      </label>
      <input type="email" class="form-control" name="email" value="<?php echo $email?>">
     </div>


     <div class="form-group p-2">
      <label for="phone" class="mb-2">
       phone
      </label>
      <input type="text" class="form-control" name="phone" value="<?php echo $phone?>">
     </div>
     <input type="submit" name="update" class="btn btn-info col-4 offset-4 btn-lg mt-3">
   </form>

 </div>

<script src="./Assets/bootstrap.min.js"></script>
</body>
</html>
<?php
  }else{
    header('location:view.php');
  }
?>