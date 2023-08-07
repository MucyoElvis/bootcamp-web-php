<?php
include('./Config/config.php');
  $msg='';
  $id='';
  if(isset($_GET['id'])){
    $id=$_GET['id'];
  }
  if(isset($_GET['msg'])){
    $msg=$_GET['msg'];
  }else{
     $msg='Welcome to list of users';
  }
    $sql="SELECT * FROM bootcamp";
    $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./Assets/bootstrap.min.css">
 <title>View</title>
</head>
<body>
 <div class="container">
 <div class="alert alert-info">
      <center>   <?=$msg?></center>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <div class="row">
   <div class="col-12">
     <h2>Users</h2>
  <table class="table">
     <thead>
      <tr>
        <th>ID</th>
        <th>Profile</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
     </thead>
     <tbody>
      <?php
        if(mysqli_num_rows($result)>0){
          while($row=$result->fetch_assoc()){
          
      ?>
        <tr>
          <td><?php echo $row['id']?></td>
          <td><img src="./images/<?php echo $row['profile']?>" class="img-fluid rounded-circle" alt="" style="height:50px"> </td>
          <td><?php echo $row['firstname']?></td>
          <td><?php echo $row['lastname']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['phone']?></td>


          <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']?>">
          Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">
          Delete</a></td>
        </tr>
      <?php
          }
        }
    ?>
     </tbody>
  </table>
   </div>
  </div>
  
 </div>

<script src="./Assets/bootstrap.min.js"></script>
</body>
</html>