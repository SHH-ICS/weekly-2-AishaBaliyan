<?php
define('PI', 3.14159);
function calculateArea($diameter)
{
  $radius = $diameter / 2;
  return PI * $radius * $radius;
}
function calculateCircumference($diameter)
{
  return PI * $diameter;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $diameter = floatval($_POST['diameter']);

  if ($diameter <= 0) {
    $error = "Please enter a valid positive diameter.";
  } else {
    $area = calculateArea($diameter);
    $circumference = calculateCircumference($diameter);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Circle Area and Circumference Calculator</title>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <style>
    body {
      padding: 20px;
    }
  </style>
</head>

<body>
  <h1>Circle Area and Circumference Calculator</h1>
  <form method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
      <input class="mdl-textfield__input" type="number" step="0.01" name="diameter" id="diameter" required>
      <label class="mdl-textfield__label" for="diameter">Enter Diameter</label>
    </div>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit">Calculate</button>
  </form>

  <?php
  if (isset($error)) {
    echo "<p style='color: red;'>$error</p>";
  } elseif (isset($area) && isset($circumference)) {
    echo "<h2>Results:</h2>";
    echo "<p>Area: " . number_format($area, 2) . " square units</p>";
    echo "<p>Circumference: " . number_format($circumference, 2) . " units</p>";
  }
  ?>
</body>

</html>