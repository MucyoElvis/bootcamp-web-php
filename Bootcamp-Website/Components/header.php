<?php include('./Config/config.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bootcamp</title>
 <link rel="stylesheet" href="./Assets/bootstrap.min.css">
 <link rel="stylesheet" href="./Assets/style.css">
</head>
<body>
 <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3  fixed-top">
   <div class="container">
    <a href="#" class="navbar-brand">Front End Bootcamp</a>
    
      <!-- creating a navbar toogle icon -->
      <button 
      class="navbar-toggler"
      type="button" 
      data-bs-toggle="collapse" 
      data-bs-target="#navmenu"
      >
      <span class="navbar-toggler-icon"></span>
     </button>
   <!-- End of  the toogle icon -->
    <div class="collapse navbar-collapse"  id="navmenu">
          <ul class="navbar-nav  ms-auto">
      <li class="nav-item">
       <a href="#learn" class="nav-link">What you'll learn</a>
      </li>
      <li class="nav-item">
       <a href="#questions" class="nav-link">Questions</a>
      </li>
      <li class="nav-item">
       <a href="#instructors" class="nav-link">Instructors</a>
      </li>
     </ul>
    </div>
     </div>
  </nav>
  <!--End of navbar-->