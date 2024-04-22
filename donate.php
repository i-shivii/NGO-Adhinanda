<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Form</title>
  <link rel="stylesheet" href="assets/donate.css">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
  <!-- ===================navbar=================== -->


  <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container-fluid ">

      <a href="index.html">
        <img src="assets/logo.png">
    </a>
      <!-- <p>Foundation</p> -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="mx-auto"></div>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Who we are
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="aboutus.php">About us</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
             
              <li><a class="dropdown-item" href="individuals.php">Make A Difference</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              
              <li><a class="dropdown-item" href="acc.php">Captures</a></li>
             
       


            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Work
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="health.php">Health </a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="education.php">Education</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="animalwelfare.php">Animal Welfare</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="agriculture.php">Agriculture</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="genderequality.php">Gender Equality</a></li>


            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Achievements
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="impact.php">Impact</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="testimonials.php">Testimonials</a></li>
              </li>

            </ul>
        
     
        <form class="d-flex " role="search" id="form">
          <input class="form-control me-1 ms-1" type="search" placeholder="Search" aria-label="Search">
          <button class="btnform " type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- =====================image=============== -->
  <section >
    <div class="image-donate">
        <img src="https://images.unsplash.com/photo-1532629345422-7515f3d16bb6?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
      </div>
        <div class="header">
          <h1> Donate Now</h1>
</div>
</section>
<!-- =================donateintro=========== -->
<section class="sec-donate">

  <div class="donate-para">
    <p>"Join us in making a meaningful difference in the lives of those who need it most. Your contribution to Adhinanda Foundation empowers us to continue our mission of alleviating poverty, providing essential healthcare, fostering education, and supporting livelihoods in marginalized communities. Together, we can create lasting change, offering hope and opportunity where it's needed most. Every donation, no matter the size, is a vital step towards building a brighter, more equitable future for all. Join us in transforming lives today."</p>
  </div>
</section>
  <!-- =================payment============= -->
  <section>
  <div class="wrapper">
    <h2>Payment Form</h2>
    <div class="form-main-col">
      <div class="form-col-1">
          <form action="" method="post">
          <!--Account Information Start-->
          <h4>Account</h4>
          <div class="input_group">
            <div class="input_box">
              <input type="text" placeholder="Full Name " required class="name">
              <i class="fa fa-user icon"></i>
            </div>

          </div>
          <div class="input_group">
            <div class="input_box">
              <input type="email" placeholder="Email Address" required class="name">
              <i class="fa fa-envelope icon"></i>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <input type="text" placeholder="Address" required class="name">
              <i class="fa fa-map-marker icon" aria-hidden="true"></i>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <input type="text" placeholder="City" required class="name">
              <i class="fa fa-institution icon"></i>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <h4>Date Of Birth</h4>
              <input type="text" placeholder="DD" required class="dob">
              <input type="text" placeholder="MM" required class="dob">
              <input type="text" placeholder="YYYY" required class="dob">
            </div>
            <h4>Gender</h4>
            <div class="input_box-gender">
              <div>
              <input type="radio" name="gender" class="radio" id="b1" checked>
              <label for="b1">Male</label>
            </div>
            <div>
              <input type="radio" name="gender" class="radio" id="b2">
              <label for="b2">Female</label>
            </div>
            </div>
          </div>
          <!--Account Information End-->
        </div>
        <div class="form-col-2">
          <!--Payment Details Start-->
          <div class="input_group">
            <div class="input_box">
              <h4>Payment Details</h4>
              <input type="radio" name="pay" class="radio" id="bc1" checked>
              <label for="bc1"><span>
                  <i class="fa fa-cc-visa"></i>Credit Card</span></label>
              <input type="radio" name="pay" class="radio" id="bc2">
              <label for="bc2"><span>
                  <i class="fa fa-cc-paypal"></i>Mobile</span></label>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <input type="tel" name="" class="name-card" placeholder="Card Number 1111-2222-3333-4444" required>
              <i class="fa fa-credit-card icon"></i>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <input type="tel" name="" class="name-cv" placeholder="Card CVC 632" required>
              <i class="fa fa-user icon"></i>
            </div>
          </div>
          <div class="input_group">
            <div class="input_box">
              <div class="input_box">
                <input type="number" placeholder="Exp Month" required class="name">
                <i class="fa fa-calendar icon" aria-hidden="true"></i>
              </div>
            </div>
            <div class="input_box">
              <input type="number" placeholder="Exp Year" required class="name">
              <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
            </div>
          </div>
          <div class="input_box">
            <input type="number" placeholder="Enter Amount" required class="name">
            <i class="fa fa-money icon" aria-hidden="true"></i>
          </div>
          <!--Payment Details End-->
        </form>
        </div>
    </div>


    <div class="input_group">
      <div class="input_box">
        <button type="submit">PAY NOW</button>
      </div>
    </div>


  </div>
</section>

</body>

</html>