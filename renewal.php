<?php
  include("config.php");
  session_start();

  $var_value = $_SESSION['login_user'];
  $nic = $_SESSION['nic'];

  // $login_user = $_GET['login_user'];
  echo $login_user;
  // $sql = "SELECT * FROM users WHERE email = '$login_user'";
  // $result = mysqli_query($db,$sql);
  // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $count = mysqli_num_rows($result);
  // $fullname = $row['name'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
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
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown pe-3">
            <a
              class="nav-link nav-profile d-flex align-items-center pe-0"
              href="#"
              data-bs-toggle="dropdown"
            >
              <span class="d-none d-md-block dropdown-toggle ps-2"
                ><?php echo $var_value; ?></span
              >
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
            >
              <li>
                <a class="dropdown-item d-flex align-items-center" href="index.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>

    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="./userpanel.php">
            <i class="bi bi-envelope"></i>
            <span>Status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./renewal.php">
            <i class="bi bi-grid"></i>
            <span>Renew Your Lisence</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="./userhistrory.php">
            <i class="bi bi-envelope"></i>
            <span>Lisence update history</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link collapsed" href="./index.php">
            <i class="bi bi-envelope"></i>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </aside>

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Renew Driving Lisence Form</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Form</li>
          </ol>
        </nav>
      </div>

      <section class="section">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Renew Driving Lisence Form</h5>
                <form action="Controllers/submit.php" method="post">
                  <div class="row mb-3">
                    <label for="inputNIC" class="col-sm-2 col-form-label"
                      >NIC</label
                    >
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputNIC" id="inputNIC" required/>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label"
                      >Email</label
                    >

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="inputEmail" id="inputEmail" required/>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputMed" class="col-sm-2 col-form-label"
                      >Medical Document</label
                    >
                    <div class="col-sm-10">
                      <input class="form-control" type="file" name="inputMed" id="inputMed" required/>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label"
                      >Date apply</label
                    >
                    <div class="col-sm-10">
                      <input type="date" class="form-control" name="inputDate" id="inputDate" required/>
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">
                      Renewal type
                    </legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gridRadios"
                          id="gridRadios1"
                          value="immediate"
                          checked
                        />
                        <label class="form-check-label" for="gridRadios1">
                          Immediate
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="gridRadios"
                          id="gridRadios2"
                          value="normal"
                        />
                        <label class="form-check-label" for="gridRadios2">
                          Normal
                        </label>
                      </div>
                    </div>
                  </fieldset>

                  <div class="row mb-3">
                    <label for="inputComment" class="col-sm-2 col-form-label"
                      >Comment</label
                    >
                    <div class="col-sm-10">
                      <textarea
                        class="form-control"
                        style="height: 100px"
                        name="inputComment"
                        id="inputComment"
                      ></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">
                    Submit Form
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
