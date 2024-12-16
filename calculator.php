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
                    <label for="roman1" class="col-sm-2 col-form-label">Roman Input 1</label>
                    <div class="col-sm-10">
                        <input name="roman1" type="text" class="form-control" id="roman1">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="function" class="col-sm-2 col-form-label">Function</label>
                    <div class="col-sm-10">
                        <select name="function" class="form-control" id="function">
                            <option value="add">Add</option>
                            <option value="subtract">Subtract</option>
                            <option value="multiply">Multiply</option>
                            <option value="divide">Divide</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="roman2" class="col-sm-2 col-form-label">Roman Input 2</label>
                    <div class="col-sm-10">
                        <input name="roman2" type="text" class="form-control" id="roman2">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="equals" class="col-sm-2 col-form-label">Equals (Roman)</label>
                    <div class="col-sm-10">
                        <input name="equals" type="text" class="form-control" id="equals" readonly>
                    </div>
                </div>
                <!-- Added decimal result field -->
                <div class="row mb-3">
                    <label for="equalsDecimal" class="col-sm-2 col-form-label">Equals (Decimal)</label>
                    <div class="col-sm-10">
                        <input name="equalsDecimal" type="text" class="form-control" id="equalsDecimal" readonly>
                    </div>
                </div>
                <!-- Added question field -->
                <div class="row mb-3">
                    <label for="question" class="col-sm-2 col-form-label">Question (Roman)</label>
                    <div class="col-sm-10">
                        <input name="question" type="text" class="form-control" id="question" readonly>
                    </div>
                </div>
                <!-- Added decimal question field -->
                <div class="row mb-3">
                    <label for="questionDecimal" class="col-sm-2 col-form-label">Question (Decimal)</label>
                    <div class="col-sm-10">
                        <input name="questionDecimal" type="text" class="form-control" id="questionDecimal" readonly>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <label for="equalsText" class="col-sm-2 col-form-label">Equals (Text)</label>
                    <div class="col-sm-10">
                        <input name="equalsText" type="text" class="form-control" id="equalsText" readonly>
                    </div>
                </div>
                <div class="text-center">
                    <button name="convert" type="button" class="btn btn-primary" onclick="convertRomanToDecimal()">Calculate</button>
                </div>
            </form>


            <script>
// Function to convert a number to its English word representation
function numberToText(number) {
    // Arrays representing numbers in words
    const ones = [
        "", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine", "Ten",
        "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"
    ];
    const tens = [
        "", "", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"
    ];

    // Handle the special case for zero
    if (number === 0) return "Zero";

    let words = '';

    // Process the thousands, hundreds, tens, and ones place
    if (number >= 1000) {
        words += ones[Math.floor(number / 1000)] + " Thousand ";
        number %= 1000;
    }
    if (number >= 100) {
        words += ones[Math.floor(number / 100)] + " Hundred ";
        number %= 100;
    }
    if (number >= 20) {
        words += tens[Math.floor(number / 10)] + " ";
        number %= 10;
    }
    if (number > 0) {
        words += ones[number] + " ";
    }

    // Remove any trailing spaces
    return words.trim();
}

// Function to convert a Roman numeral string to its decimal (integer) value
function romanToDecimal(roman) {
    const romanMap = {
        'I': 1, 'V': 5, 'X': 10, 'L': 50, 'C': 100, 'D': 500, 'M': 1000
    };
    let decimal = 0;

    // Loop through the Roman numeral string and calculate the decimal value
    for (let i = 0; i < roman.length; i++) {
        const current = romanMap[roman[i]];
        const next = romanMap[roman[i + 1]];

        // If the next numeral is larger, it indicates a subtraction case (e.g., IV = 4)
        if (next > current) {
            decimal += next - current;
            i++; // Skip the next character as it's part of the subtraction case
        } else {
            decimal += current;
        }
    }
    return decimal;
}

// Function to convert a decimal (integer) to its Roman numeral representation
function decimalToRoman(decimal) {
    const romanValues = [
        { value: 1000, numeral: 'M' },
        { value: 900, numeral: 'CM' },
        { value: 500, numeral: 'D' },
        { value: 400, numeral: 'CD' },
        { value: 100, numeral: 'C' },
        { value: 90, numeral: 'XC' },
        { value: 50, numeral: 'L' },
        { value: 40, numeral: 'XL' },
        { value: 10, numeral: 'X' },
        { value: 9, numeral: 'IX' },
        { value: 5, numeral: 'V' },
        { value: 4, numeral: 'IV' },
        { value: 1, numeral: 'I' }
    ];
    let roman = '';

    // Build the Roman numeral string by subtracting from the decimal value
    for (const { value, numeral } of romanValues) {
        while (decimal >= value) {
            roman += numeral;
            decimal -= value;
        }
    }
    return roman;
}

// Function to handle the conversion logic based on user input
function convertRomanToDecimal() {
    // Get input values for the Roman numerals and the selected operation
    const roman1 = document.getElementById('roman1').value.toUpperCase();
    const roman2 = document.getElementById('roman2').value.toUpperCase();
    const func = document.getElementById('function').value;
    const equalsInput = document.getElementById('equals');
    const equalsDecimalInput = document.getElementById('equalsDecimal');
    const questionInput = document.getElementById('question');
    const questionDecimalInput = document.getElementById('questionDecimal');
    const equalsTextInput = document.getElementById('equalsText'); // New text field for result in English

    // Check if the user provided valid Roman numerals
    if (!roman1 || !roman2) {
        equalsInput.value = 'Invalid input';
        equalsDecimalInput.value = 'Invalid input';
        questionInput.value = '';
        questionDecimalInput.value = '';
        equalsTextInput.value = ''; // Clear text field
        return;
    }

    try {
        // Convert Roman numerals to decimal values
        const decimal1 = romanToDecimal(roman1);
        const decimal2 = romanToDecimal(roman2);

        let result;
        let resultDecimal;
        let questionRoman;
        let questionDecimal;

        // Perform the selected operation (add, subtract, multiply, divide)
        switch (func) {
            case 'add':
                result = decimal1 + decimal2;
                resultDecimal = result;
                questionRoman = `${roman1} + ${roman2} = ${decimalToRoman(resultDecimal)}`;
                questionDecimal = `${decimal1} + ${decimal2} = ${resultDecimal}`;
                break;
            case 'subtract':
                result = decimal1 - decimal2;
                resultDecimal = result;
                questionRoman = `${roman1} - ${roman2} = ${decimalToRoman(resultDecimal)}`;
                questionDecimal = `${decimal1} - ${decimal2} = ${resultDecimal}`;
                break;
            case 'multiply':
                result = decimal1 * decimal2;
                resultDecimal = result;
                questionRoman = `${roman1} * ${roman2} = ${decimalToRoman(resultDecimal)}`;
                questionDecimal = `${decimal1} * ${decimal2} = ${resultDecimal}`;
                break;
            case 'divide':
                if (decimal2 === 0) {
                    equalsInput.value = 'Cannot divide by zero';
                    equalsDecimalInput.value = 'Cannot divide by zero';
                    questionInput.value = '';
                    questionDecimalInput.value = '';
                    equalsTextInput.value = ''; // Clear text field
                    return;
                }
                result = decimal1 / decimal2;
                resultDecimal = result;
                questionRoman = `${roman1} ÷ ${roman2} = ${decimalToRoman(resultDecimal)}`;
                questionDecimal = `${decimal1} ÷ ${decimal2} = ${resultDecimal}`;
                break;
            default:
                equalsInput.value = 'Invalid function';
                equalsDecimalInput.value = 'Invalid function';
                questionInput.value = '';
                questionDecimalInput.value = '';
                equalsTextInput.value = ''; // Clear text field
                return;
        }

        // Display results in Roman, Decimal, and English text formats
        equalsInput.value = decimalToRoman(Math.floor(result)); // Roman numeral output
        equalsDecimalInput.value = Math.floor(resultDecimal); // Decimal output
        equalsTextInput.value = numberToText(Math.floor(resultDecimal)); // English text output
        questionInput.value = questionRoman; // Roman question output
        questionDecimalInput.value = questionDecimal; // Decimal question output

    } catch (error) {
        // Handle any errors (e.g., invalid Roman numerals)
        equalsInput.value = 'Invalid Roman numeral';
        equalsDecimalInput.value = 'Invalid Roman numeral';
        questionInput.value = '';
        questionDecimalInput.value = '';
        equalsTextInput.value = ''; // Clear text field
    }
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