<?php include('./Components/header.php') ?>
<?php
include('./Config/config.php');
if (isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $file = $_FILES['profile']['tmp_name'];
  $filename = $_FILES['profile']['name'];
  $filename = $firstname . '_' . $lastname . '-' . $filename;
  if (move_uploaded_file($file, './images/' . $filename)) {
    $sql = "INSERT INTO `bootcamp` (`firstname`,`lastname`,`email`,`phone`,`profile`)
        VALUES ('" . $firstname . "','" . $lastname . "','" . $email . "','" . $phone . "','" . $filename . "')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      $msg = 'NEW RECORD CREATED SUCCESSFULLY';
      header('location:view.php?msg=' . $msg . '&id=' . mysqli_insert_id($conn));
    } else {
      echo 'Error:' . $sql . '<br>' . mysqli_error($conn);
    }
  }
}
?>

<!--Showcase-->
<section class="bg-dark text-light p-5 p-lg-0 text-center  text-sm-start">
  <div class="container">
    <div class="d-sm-flex align-items-center justify-content-between">
      <div>
        <h1>Become a <span class="text-warning">web developer</span></h1>
        <p class="lead my-4">We focus on teaching our students of the latest
          and greatest <br>technologies to prepare them for their first
          dev role
        </p>
        <button class="btn btn-lg  btn-primary" data-bs-toggle="modal" data-bs-target="#enroll">Start The Enrollment</button>
      </div>
      <img class="img-fluid w-50 d-none d-md-block  w-md-30" src="./Images/cod.png">
    </div>
  </div>
</section>
<!-- Newsletter -->
<section class="bg-primary text-light p-5">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center">
      <h3 class="mb-3 mb-md-0">
        Sign up for Our Newsletter
      </h3>
      <div class="input-group news-input">
        <input type="text" class="form-control " placeholder='Enter Email'>
        <button class="btn  btn-lg  btn-dark" type='button'>Send</button>
      </div>
    </div>
  </div>
</section>
<!-- Grid -->
<section class="p-5">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md">
        <div class="card  bg-dark text-light">
          <div class="card-body text-center">
            <div class="h1 mb-3">
              <img src="./Images/laptop.png">
            </div>

            <h3 class="card-title   mb-3">Virtual</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quidem incidunt veniam cum eum facilis.
            </p>
            <a href="#" class="btn btn-md bg-primary text-light">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card  bg-secondary text-light">
          <div class="card-body text-center">
            <div class="h1 mb-3">
              <img src="./Images/user.png">
            </div>

            <h3 class="card-title   mb-3">Hybrid</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quidem incidunt veniam cum eum facilis.
            </p>
            <a href="#" class="btn btn-md bg-dark text-light">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card  bg-dark text-light">
          <div class="card-body text-center">
            <div class="h1 mb-3">
              <img src="./Images/users.png">
            </div>

            <h3 class="card-title   mb-3">In Person</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quidem incidunt veniam cum eum facilis.
            </p>
            <a href="#" class="btn btn-md bg-primary text-light">Read More</a>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- learn  Grid -->
<section id="learn" class="p-5">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md">
        <img src="./Images/icon.jpg" class="img-fluid">
      </div>
      <div class="col-md  p-5">
        <h2>Learn The Fundamentals</h2>
        <p class="lead">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda deserunt doloribus quis quasi, voluptas numquam?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, voluptate vero quo est optio accusamus?
        </p>

        <a href="#" class="btn btn-light mt-3">
          <img src="./Images/chevron.png"> Read More
        </a>
      </div>
    </div>
  </div>
</section>

<!-- react  section -->
<section id="learn" class="p-5  bg-dark text-light">
  <div class="container">
    <div class="row align-items-center justify-content-between">

      <div class="col-md  p-5">
        <h2>Learn The React</h2>
        <p class="lead">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda deserunt doloribus quis quasi, voluptas numquam?
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, voluptate vero quo est optio accusamus?
        </p>

        <a href="#" class="btn btn-light mt-3">
          <img src="./Images/chevron.png"> Read More
        </a>

      </div>
      <div class="col-md">
        <img src="./Images/React-js-1.png" class="img-fluid">
      </div>
    </div>
  </div>
</section>

<!-- Frequently Asked Questions -->
<section id="questions" class="p-5">
  <div class="container">
    <h2 class="text-center  mb-4">Frequently Asked Questions</h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">

      <!-- ITEM 1 -->

      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
            Where exactly are you located ?
          </button>
        </h2>
        <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facilis culpa
            nulla consectetur eum, quae delectus natus minima in ducimus ullam hic ab explicabo sed blanditiis. Recusa
            ndae debitis obcaecati sequi consectetur architecto neque! Quisquam, accusamus. Non, aperiam eaque? Delectu
            s in molestias recusandae
            impedit, reprehenderit obcaecati et voluptates quaerat consequatur alias!</div>
        </div>
      </div>

      <!-- ITEM 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
            How much does it cost to attend ?
          </button>
        </h2>
        <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facilis culpa
            nulla consectetur eum, quae delectus natus minima in ducimus ullam hic ab explicabo sed blanditiis. Recusa
            ndae debitis obcaecati sequi consectetur architecto neque! Quisquam, accusamus. Non, aperiam eaque? Delectu
            s in molestias recusandae
            impedit, reprehenderit obcaecati et voluptates quaerat consequatur alias!</div>
        </div>
      </div>

      <!-- ITEM3 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
            What do i need to know ?
          </button>
        </h2>
        <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facilis culpa
            nulla consectetur eum, quae delectus natus minima in ducimus ullam hic ab explicabo sed blanditiis. Recusa
            ndae debitis obcaecati sequi consectetur architecto neque! Quisquam, accusamus. Non, aperiam eaque? Delectu
            s in molestias recusandae
            impedit, reprehenderit obcaecati et voluptates quaerat consequatur alias!</div>
        </div>
      </div>
      <!-- Item 4 -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-four">
            Will you help me find a Job ?
          </button>
        </h2>
        <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facilis culpa
            nulla consectetur eum, quae delectus natus minima in ducimus ullam hic ab explicabo sed blanditiis. Recusa
            ndae debitis obcaecati sequi consectetur architecto neque! Quisquam, accusamus. Non, aperiam eaque? Delectu
            s in molestias recusandae
            impedit, reprehenderit obcaecati et voluptates quaerat consequatur alias!</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-five">
            How do i sign up ?
          </button>
        </h2>
        <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, facilis culpa
            nulla consectetur eum, quae delectus natus minima in ducimus ullam hic ab explicabo sed blanditiis. Recusa
            ndae debitis obcaecati sequi consectetur architecto neque! Quisquam, accusamus. Non, aperiam eaque? Delectu
            s in molestias recusandae
            impedit, reprehenderit obcaecati et voluptates quaerat consequatur alias!</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- INSTRUCTORS -->
<section id="instructors" class="bg-primary p-5">
  <div class="container">
    <h2 class="text-center text-light">Our Instructors</h2>
    <p class=" lead  text-center  text-light mb-5">Our Instructors have 5+ years working as web Developer
      in the Industry</p>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card  bg-light">
          <div class="card-body text-center">
            <img src="./Images/KD.png" class="rounded-circle  mb-3" style="height: 12rem;width: 12rem;">
            <h3 class="card-title mb-3">Mucyo Elvis</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sequi illo in qui, voluptate animi!
            </p>
            <a href="#" i class="text-dark mx-1"><img src="./Images/I.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/facebook_26px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/whatsapp_32px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/L.png"></a>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3">
        <div class="card  bg-light">
          <div class="card-body text-center">
            <img src="./Images/Luka-Doncic.webp" class="rounded-circle  mb-3" style="height: 12rem;width: 12rem;">
            <h3 class="card-title mb-3">Luka Doncic</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sequi illo in qui, voluptate animi!
            </p>
            <a href="#" i class="text-dark mx-1"><img src="./Images/I.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/facebook_26px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/whatsapp_32px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/L.png"></a>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-3">
        <div class="card  bg-light">
          <div class="card-body text-center">
            <img src="./Images/steph.jpeg" class="rounded-circle  mb-3" style="height: 12rem;width: 12rem;">
            <h3 class="card-title mb-3">Steph Curry</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sequi illo in qui, voluptate animi!
            </p>
            <a href="#" i class="text-dark mx-1"><img src="./Images/I.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/facebook_26px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/whatsapp_32px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/L.png"></a>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-3">
        <div class="card  bg-light">
          <div class="card-body text-center">
            <img src="./Images/trae.jpg" class="rounded-circle  mb-3" style="height: 12rem;width: 12rem;">
            <h3 class="card-title mb-3">Trae Young</h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem sequi illo in qui, voluptate animi!
            </p>
            <a href="#" i class="text-dark mx-1"><img src="./Images/I.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/facebook_26px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/whatsapp_32px.png"></a>
            <a href="#" i class="text-dark mx-1"><img src="./Images/L.png"></a>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>
<!-- Contact -->
<section class="p-5">
  <div class="container">
    <div class="row g-4">
      <div class="col-md">
        <h2 class="text-center  mb-4">Contact Us</h2>
        <ul class="list-group list-group-flush lead">
          <li class="list-group-item">
            <span class="fw-bold  mx-2">Main-Location:</span>50 main st Boston MA
          </li>
          <li class="list-group-item">
            <span class="fw-bold  mx-2">Enrollment Phone:</span>(555) 555 555
          </li>
          <li class="list-group-item">
            <span class="fw-bold  mx-2">Students Phone :</span>(333) 333 333
          </li>
          <li class="list-group-item">
            <span class="fw-bold  mx-2">Enrollment Email:</span>(555) enrollment19@Gmail.com
          </li>
          <li class="list-group-item">
            <span class="fw-bold  mx-2">Student Email:</span>studentenrollment@Gmail.com
          </li>

        </ul>
      </div>
      <!-- <div class="col-md">
              <img  src="./image.png" id="map" class="px-5  mx-5">
            </div> -->
    </div>
  </div>
</section>



<!-- modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">

  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="enrollLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead">
          Fill out this form and we will get back to you
        </p>
        <?php include('./Components/form.php') ?>
      </div>
    </div>
  </div>
  <?php include('./Components/footer.php') ?>
  <script src="Assets/bootstrap.min.js"></script>
  <script src="./app.js"></script>
  </body>

  </html>