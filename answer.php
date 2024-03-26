<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Salary Pragram, in PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Calista.E" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.pink-purple.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
    <link rel="manifest" href="site.webmanifest" />
    <title>Salary Pragram,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Salary Pragram, in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/income_tax.jpg" alt="laptop image" width="250" />
        </div>
        <div class="page-content-php">
          <div id="user-info">
            <?php
            $workHours = $_POST["work-hours"];
            $hourlyRate = $_POST["hourly-rate"];

            // process
            $payOfSalary = $workHours * $hourlyRate * (1.00 - 0.18);
            $taxesOfSalary = $workHours * $hourlyRate * 0.18;

            // output
            echo "If you work = $ " . $workHours . " and your hourly rate is = $ " . $hourlyRate . "";
            echo "<br />";
            echo "<br />";
            echo "The pay will be $" . $payOfSalary;
            echo "<br />";
            echo "The taxes will be $" . $taxesOfSalary;
            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
