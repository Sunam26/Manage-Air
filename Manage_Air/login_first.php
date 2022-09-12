<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ManageAir</span>
                </a>
              </div><!-- End Logo -->

              <div class="card login-space">
                <div class="card-body">
                  <h5 class="card-title">Login As :</h5>
    
                  <!-- Horizontal Form -->
               
                    <!-- <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Your Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword">
                      </div>
                    </div> -->
                    <form method="post" action="process_login_first.php" >
                        <input class="form-check-input" type="radio" id="Admin" name="pilotORstaff" value="Admin" checked>
                          <label class="form-check-label" for="Pilot"> Admin</label><br>
                          <input class="form-check-input" type="radio" id="Pilot" name="pilotORstaff" value="Pilot" >
                          <label class="form-check-label" for="Pilot"> Pilot</label><br>
                          <input  class="form-check-input" type="radio" id="Staff" name="pilotORstaff" value="Staff">
                          <label class="form-check-label" for="Staff"> Staff</label><br> 
                          
                         
                        <div class="center-block" style="padding-left:40%;height: 300%;" >
                            <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
                            <div class="center-block" style="height: 300%;">
                                <input class="center-block btn btn-primary"  type="submit" name="save" value="Submit" class="col-sm-2 col-form-label" style="background-color: rgb(8, 8, 251);color: rgb(254, 254, 254);border-color:rgb(8, 8, 251) ; height: 200%;">
                              <!-- <button type="submit" class="btn btn-primary bttn"></button> -->
                            </div>
                          </div>
                        <div class="credits" style="padding-left:30%;">
                            <!-- All the links in the footer should remain intact. -->
                            <!-- You can delete the links only if you purchased the pro version. -->
                            <!-- Licensing information: https://bootstrapmade.com/license/ -->
                            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                            Designed by Group-VI
                        </div>
                    </form>
                    <!-- <div class="text-center">
                      <button class="btn btn-primary" type="submit" name="save" value="submit"><a href="login.html" style="color:black">Login</a></button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div> -->
                    <!-- <div class="row mb-3">
                      <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck1">
                          <label class="form-check-label" for="gridCheck1">
                            Example checkbox
                          </label>
                        </div>
                      </div>
                    </div> -->
                    <!-- <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div> -->
                  <!-- End Horizontal Form -->
    
                </div>
              </div>

             

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>