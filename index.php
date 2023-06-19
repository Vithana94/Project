<?php
   include("config.php");
   session_start();

   $error = isset($_GET['error']) ? $_GET['error'] : '';

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      $myusername = mysqli_real_escape_string($con,$_POST['email']);
      $mypassword = sha1(mysqli_real_escape_string($con,$_POST['password'])); 
      
      $sql = "SELECT nic, type FROM users WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        $_SESSION['nic'] = $row['nic'];
        $_SESSION['login_user'] = $myusername;

        if ($row['type'] == "user") 
        {
          header("location: userpanel.php");
        } elseif ($row['type'] == "admin") 
        {
          header("location: userpanel.php");
        }
      } 
      else 
      {
        $error = "Your Login Name or Password is invalid";
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pages / Login - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    <main>
      <div class="container">
        <section
          class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4"
        >
          <div class="container">
            <div class="row justify-content-center">
              <div
                class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center"
              >
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="pt-4 pb-2">
                      <h5 class="card-title text-center pb-0 fs-4">
                        Login to Driving Lisence Management System
                      </h5>
                      <p class="text-center small">
                        Enter your username & password to login
                      </p>
                    </div>

                    <form class="row g-3 needs-validation" novalidate action="" method="POST">
                    <div class="col-12">
                        <label for="yourPassword" class="form-label"
                          >Email</label
                        >
                        <input
                          type="text"
                          name="email"
                          class="form-control"
                          id="email"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                      </div>
                      <div class="col-12">
                        <label for="yourPassword" class="form-label"
                          >Password</label
                        >
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          id="password"
                          required
                        />
                        <div class="invalid-feedback">
                          Please enter your password!
                        </div>
                      </div>
                      <div class = "mb-6 text-red-500"><?php echo $error; ?></div>
                      <div class="col-12">
                        <div class="form-check">
                          <input
                            class="form-check-input"
                            type="checkbox"
                            name="remember"
                            value="true"
                            id="rememberMe"
                          />
                          <label class="form-check-label" for="rememberMe"
                            >Remember me</label
                          >
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">
                          <a href="./userpanel.php"></a>
                          Login
                        </button>
                      </div>
                      <a href="./userpanel.php">Login</a>
                      <div class="col-12">
                        <p class="small mb-0">
                          Don't have account?
                          <a href="./register.php">Create an account</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
