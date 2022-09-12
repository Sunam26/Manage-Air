<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <!-- <script>
      $(document).ready(function() {
      $('input[type=radio]').change(function() {
        if ($('#gridRadios1').is(':checked')) {
          $('#abcd').show();
          $('#abcd2').show();
          $('#abcd3').hide();
        } else {
          $('#abcd').hide();
          $('#abcd2').hide();
          $('#abcd3').show();
        }
      });
    });
  </script> -->

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
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">ManageAir</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
<?php
include_once 'database.php';
if(isset($_POST['p_submit']))
{	
	
	$Name = $_POST['name'];
	//echo $Inspection_Name . '<br>';
	$rank = $_POST['rank'];
	//echo $Inspection_ID . '<br>';
	$bd = $_POST['bd'];
	//echo $Tail_No . '<br>';

	$flg_hr = $_POST['flg_hr'];
	
	
	//$INSP_DATE = 'to_date(\'' . $INSP_DATE . '\',\'yyyy-mm-dd\')';
	//echo $INSP_DATE . '<br>';
	$email = $_POST['email'];
	//echo $AIRFRAME . '<br>';
	$address = $_POST['address'];
	//echo $LANDING_GEARS . '<br>';
	$password = $_POST['password'];

	$phone = $_POST['Phone'];

	$stream = $_POST['stream'];
	

		$query = "INSERT INTO pilot values (:bd, :p_name,  :flg_hr, :adds , :phone, :cat, :pass ,:email ,:rankk)";
		$stid = oci_parse($conn,$query);
		oci_bind_by_name($stid, ':bd', $bd);
		oci_bind_by_name($stid, ':p_name', $Name);
		oci_bind_by_name($stid, ':flg_hr', $flg_hr);
		oci_bind_by_name($stid, ':adds', $address);
		oci_bind_by_name($stid, ':phone', $phone);
		oci_bind_by_name($stid, ':cat', $stream);
		oci_bind_by_name($stid, ':pass', $password);
    oci_bind_by_name($stid, ':email', $email);
		oci_bind_by_name($stid, ':rankk', $rank);
		$result = oci_execute($stid);
		if ($result) {
					echo '<div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Account created successfully!</h5>
                    <!-- <p class="text-center small">Enter your personal details to create account</p> -->
                  </div>

                  <div>
                    <center><img src="tick.webp" style="width:40%" alt=""></center>
                  </div>

                  <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a class="btn btn-primary w-100" href="dashboard.html">Log In</a>
                        </div>
                        <div class="col-4"></div>
                  </div>

                </div>
              </div>
';
					
		}
		else{
			echo '<div class="pt-4 pb-2">
			<h5 class="card-title text-center pb-0 fs-4">Oops, Something Went Wrong!</h5>
			<!-- <p class="text-center small">Enter your personal details to create account</p> -->
		  </div>

		  <div>
			<center><img src="cross.jpg" style="width:40%" alt=""></center>
		  </div>

		  <div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<a class="btn btn-primary w-100" href="pages_register2.php">Try Again</a>
				</div>
				<div class="col-4"></div>
		  </div>

		</div>
	  </div>';
					
		}

}
else{
	$Name = $_POST['name'];
	//echo $Inspection_Name . '<br>';
	$rank = $_POST['rank'];
	//echo $Inspection_ID . '<br>';
	$bd = $_POST['bd'];
	//echo $Tail_No . '<br>';

	$branch = $_POST['branch'];
	
	
	//$INSP_DATE = 'to_date(\'' . $INSP_DATE . '\',\'yyyy-mm-dd\')';
	//echo $INSP_DATE . '<br>';
	$email = $_POST['email'];
	//echo $AIRFRAME . '<br>';
	$address = $_POST['address'];
	//echo $LANDING_GEARS . '<br>';
	$password = $_POST['password'];

	$phone = $_POST['Phone'];
	

		$query = "INSERT INTO staff values (:bd, :s_name,  :branch, :adds , :phone, :pass, :email, :rankk)";
		$stid = oci_parse($conn,$query);
		oci_bind_by_name($stid, ':bd', $bd);
		oci_bind_by_name($stid, ':s_name', $Name);
		oci_bind_by_name($stid, ':branch', $branch);
		oci_bind_by_name($stid, ':adds', $address);
		oci_bind_by_name($stid, ':phone', $phone);
		oci_bind_by_name($stid, ':pass', $password);
		oci_bind_by_name($stid, ':email', $email);
		oci_bind_by_name($stid, ':rankk', $rank);
		$result = oci_execute($stid);
		if ($result) {
					echo '<div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Account created successfully!</h5>
                    <!-- <p class="text-center small">Enter your personal details to create account</p> -->
                  </div>

                  <div>
                    <center><img src="tick.webp" style="width:40%" alt=""></center>
                  </div>

                  <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <a class="btn btn-primary w-100" href="dashboard.html">Log In</a>
                        </div>
                        <div class="col-4"></div>
                  </div>

                </div>
              </div>
';
					exit();
		}
		else{
			echo '<div class="pt-4 pb-2">
			<h5 class="card-title text-center pb-0 fs-4">Oops, Something Went Wrong!</h5>
			<!-- <p class="text-center small">Enter your personal details to create account</p> -->
		  </div>

		  <div>
			<center><img src="cross.jpg" style="width:40%" alt=""></center>
		  </div>

		  <div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<a class="btn btn-primary w-100" href="pages_register2.php">Try Again</a>
				</div>
				<div class="col-4"></div>
		  </div>

		</div>
	  </div>';
					
		}

}

?>

<div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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