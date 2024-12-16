<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CSU</title>
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
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  <a href="index.php" class="logo d-flex align-items-center">
    <img src="assets/img/logo.png" alt="">
    <span class="d-none d-lg-block">CSU</span>
  </a>
</div><!-- End Logo -->
<div class="search-bar">
  <h3>ITE 19 – Final Project</h3>
</div><!-- End Search Bar -->
<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

  
    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" data-bs-toggle="dropdown">
        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
        <span class="d-none d-md-block ps-2">John Voltaire Baslot</span>
      </a><!-- End Profile Iamge Icon -->

    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-heading">Process</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="roman_decimal.php">
      <i class="ri-exchange-box-line"></i>
      <span>Roman to Decimal</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="calculator.php">
      <i class="bi bi-calculator"></i>
      <span>Calculator</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Roman to Decimal</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Convert Form</h5>

              <!-- Horizontal Form -->
              <form id="romanForm">
                <div class="row mb-3">
                    <label for="roman" class="col-sm-2 col-form-label">Roman</label>
                    <div class="col-sm-10">
                    <input name="roman" type="text" class="form-control" id="roman">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="decimal" class="col-sm-2 col-form-label">Decimal</label>
                    <div class="col-sm-10">
                    <input name="decimal" type="text" class="form-control" id="decimal" readonly>
                    </div>
                </div>

                <div class="text-center">
                    <button name="convert" type="button" class="btn btn-primary" onclick="convertRomanToDecimal()">Convert</button>
                </div>
                </form>

                <script>
    // Function to convert the Roman numeral input into Decimal value
    function convertRomanToDecimal() {
        // Get the input Roman numeral value from the user and convert it to uppercase
        var roman = document.getElementById("roman").value.toUpperCase();
        
        // Call the romanToDecimal function to convert the Roman numeral to decimal
        var decimal = romanToDecimal(roman);
        
        // Set the converted decimal value in the output field (decimal)
        document.getElementById("decimal").value = decimal;
    }

    // Function to convert a Roman numeral string to its Decimal (integer) equivalent
    function romanToDecimal(roman) {
        // Define the values for each Roman numeral character
        var romanNumerals = {
            "I": 1,
            "V": 5,
            "X": 10,
            "L": 50,
            "C": 100,
            "D": 500,
            "M": 1000
        };

        // Initialize decimal value and the previous numeral value for subtraction logic
        var decimalValue = 0;
        var prevValue = 0;

        // Loop through the Roman numeral string from right to left
        for (var i = roman.length - 1; i >= 0; i--) {
            // Get the current Roman numeral value
            var currentValue = romanNumerals[roman[i]];

            // Check the subtraction rule: if the current numeral is smaller than the previous one, subtract it
            if (currentValue < prevValue) {
                decimalValue -= currentValue; // Subtract if current value is less than the previous
            } else {
                decimalValue += currentValue; // Otherwise, add the current value to the total
            }

            // Update prevValue for the next iteration
            prevValue = currentValue;
        }

        // Return the final computed decimal value
        return decimalValue;
    }
</script>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>