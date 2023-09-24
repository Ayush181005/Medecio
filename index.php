<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medicio</title>
  <link rel="icon" href="logo.png" type="image/icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="../icon/css/all.css" />
  <link rel="stylesheet" href="../Hover-master/css/hover.css" />
  <link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.css" />
  <script src="https://kit.fontawesome.com/50c045cb63.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <div class="logo"><img src="logo.png" alt=""></div>
    <div class="navbar">
      <div class="nav_left">
        <a href="#index.html">Home</a>
        <a href="#doctor">Doctor</a>
        <a href="#services">Services</a>
        <a href="#Appoinment">Appoinment</a>
        <a href="#contact">Contact</a>
      </div>
      <div class="nav_right">
        <div class="doctor btn" onclick="doctor_signup()">
          <p>Doctor Login</p>
        </div>
      </div>
    </div>
    <div class="menu">
      <i class="fas fa-bars" onclick="openmenu()"></i>
    </div>
    <div class="sidemenu" id="sidemenu">
      <i class="fas fa-times" onclick="closemenu()"></i>
      <div class="hamburg">
        <a href="#index.html">Home</a>
        <a href="#doctor">Doctor</a>
        <a href="#services">Services</a>
        <a href="#Appoinment">Appoinment</a>
        <a href="#contact">Contact</a>
      </div>
    </div>
  </nav>
  <div class="container-fluid p-3">
    <!-- ////////// first section -->
    <div class="container p-3">
      <div class="row mt-5 my-row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 g-0 g-1 g-sm-1 g-md-2 g-lg-3">
        <div class="col">
          <div class="my-box">
            <i class="fa-solid fa-heart-pulse"></i>
            <h2>Lorem Ipsum</h2>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-box">
            <i class="fa-solid fa-pills"></i>
            <h2>Lorem Ipsum</h2>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-box">
            <i class="fa-solid fa-thermometer"></i>
            <h2>Lorem Ipsum</h2>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-box">
            <i class="fa-solid fa-dna"></i>
            <h2>Lorem Ipsum</h2>
            <p>
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- //////////////////second section -->
    <div class="container text-center p-5 mt-5" id="doctor">
      <h1 class="my-h1-und">DOCTORS</h1>
      <p class="lead p-3">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
        aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
        quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
        fugiat sit in iste officiis commodi quidem hic quas.
      </p>
    </div>
    <div class="container">
      <div class="row pb-5 g-0 g-1 g-sm-3 row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
        <div class="col hover-all">
          <div class="dr-img-main">
            <img
              src="https://img.freepik.com/free-photo/pleased-young-female-doctor-wearing-medical-robe-stethoscope-around-neck-standing-with-closed-posture_409827-254.jpg?w=2000"
              alt="" class="my-dr-img img-fluid" />
            <div class="border my-dr-hover">
              <i class="fa-brands fa-twitter"></i><i class="fa-brands fa-facebook"></i><i
                class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
          <div class="border text-center p-2 my-dr-info">
            <h5>Walter White</h5>
            <p class="lead">Chief Medical Officer</p>
          </div>
        </div>
        <div class="col hover-all">
          <div class="dr-img-main">
            <img src="https://t4.ftcdn.net/jpg/02/60/04/09/360_F_260040900_oO6YW1sHTnKxby4GcjCvtypUCWjnQRg5.jpg" alt=""
              class="my-dr-img img-fluid" />
            <div class="border my-dr-hover">
              <i class="fa-brands fa-twitter"></i><i class="fa-brands fa-facebook"></i><i
                class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
          <div class="border text-center p-2 my-dr-info">
            <h5>Sarah Jhonson</h5>
            <p class="lead">Chief Medical Officer</p>
          </div>
        </div>
        <div class="col hover-all">
          <div class="dr-img-main">
            <img src="https://img.freepik.com/free-photo/smiling-touching-arms-crossed-room-hospital_1134-799.jpg"
              alt="" class="my-dr-img img-fluid" />
            <div class="border my-dr-hover">
              <i class="fa-brands fa-twitter"></i><i class="fa-brands fa-facebook"></i><i
                class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
          <div class="border text-center p-2 my-dr-info">
            <h5>Amanda Jepson</h5>
            <p class="lead">Neurosurgeon</p>
          </div>
        </div>
        <div class="col hover-all">
          <div class="dr-img-main">
            <img
              src="https://img.freepik.com/free-photo/woman-doctor-wearing-lab-coat-with-stethoscope-isolated_1303-29791.jpg"
              alt="" class="my-dr-img img-fluid" />
            <div class="border my-dr-hover">
              <i class="fa-brands fa-twitter"></i><i class="fa-brands fa-facebook"></i><i
                class="fa-brands fa-instagram"></i><i class="fa-brands fa-linkedin-in"></i>
            </div>
          </div>
          <div class="border text-center p-2 my-dr-info">
            <h5>William Anderson</h5>
            <p class="lead">Cardiology</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container text-center mt-5" id="services">
      <h1 class="my-h1-und">SERVICES</h1>
      <p class="lead p-3">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
        aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
        quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
        fugiat sit in iste officiis commodi quidem hic quas.
      </p>
    </div>
    <div class="container mt-5">
      <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 gy-5">
        <div class="col">
          <div class="my-main-icon-part">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="bi bi-heart-pulse-fill"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-main-icon-part ">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="fa-solid fa-pills"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-main-icon-part ">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="fa-solid fa-hospital-user"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-main-icon-part ">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="fa-solid fa-dna"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-main-icon-part ">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="fa-solid fa-wheelchair"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
        <div class="col">
          <div class="my-main-icon-part ">
            <div class="my-center-icon w-100 d-flex justify-content-center pb-3 p-1">
              <span class="my-icon-main">
                <i class="fa-solid fa-notes-medical"></i>
              </span>
            </div>
            <div class=" text-center my-icon-h4">
              <h4 class="my-h1-und  ">Lorem Ipsum</h4>
            </div>
            <p class="text-center mt-4">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid my-form-cont">
    <div class="container text-center p-5 mt-5" id="Appoinment">
      <h1 class="my-h1-und">MAKE AN APPOINTMENT</h1>
      <p class="lead p-3">
        Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
        aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
        quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
        fugiat sit in iste officiis commodi quidem hic quas.
      </p>
      <div>
        <form action="" class="" method="POST">
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <div class="col">
              <label for="uname" class=""></label>
              <input type="text" name="name" id="uname" class="p-2 w-100" placeholder="Your name" required>

            </div>
            <div class="col">
              <label for="mail" class=""></label>
              <input type="email" name="email" id="mail" class="p-2 w-100" placeholder="Your E-mail" required>

            </div>
            <div class="col">
              <label for="phone" class=""></label>
              <input type="tel" name="Phone" id="phone" class="p-2 w-100" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3">
            <div class="col">
              <label for="date" class=""></label>
              <input type="date" name="date" id="date" class="p-2 w-100" placeholder="Your name" required>
            </div>
            <div class="col">
              <select name="dep" id="" class="p-2 w-100 mt-4">
                <option value="1" selected>Select department</option>
                <option value="2">department1</option>
                <option value="3">department2</option>
                <option value="4">department3</option>
              </select>
            </div>
            <div class="col">
              <select name="doc" id="" class="p-2 w-100 mt-4">
                <option value="1" selected>Select doctor</option>
                <option value="2">doctor1</option>
                <option value="3">doctor2</option>
                <option value="4">doctor3</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <textarea name="" class="p-3 w-100 mt-4" id="" cols="30" rows="5"
                placeholder="Mesaage(optional)"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col mt-4">
              <input type="submit" name="submit1" class="btn my-oppo-btn rounded-5 px-4" value="Make an Appoitment"    style="padding: 10px;">
            </div>
          </div>
        </form>
      
      </div>
    </div>
  </div>
  <div class="container text-center mt-5" id="contact">
    <h2 class="my-h1-und">CONTACT</h2>
    <p class="lead p-3">
      Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex
      aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos
      quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
      fugiat sit in iste officiis commodi quidem hic quas.
    </p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script>
    <?php include 'script.js'?></script>
</body>

</html>