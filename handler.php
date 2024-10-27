<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $diameter = $_POST['diameter'];
  $radius = $diameter / 2;

  $area = pi() * pow($radius, 2);
  $circumference = pi() * $diameter;

  echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Results :)</title>
        <link rel='stylesheet' href='https://code.getmdl.io/1.3.0/material.indigo-pink.min.css'>
        <script defer src='https://code.getmdl.io/1.3.0/material.min.js'></script>
        
    </head>
    <body>
        <div class='results'>
            <h1>Results</h1>
            <p>Diameter: $diameter</p>
            <p>Radius: $radius</p>
            <p>Area: " . round($area, 2) . "</p>
            <p>Circumference: " . round($circumference, 2) . "</p>
            <a href='index.html' class='mdl-button mdl-js-button mdl-button--raised mdl-button--colored'>
                Go Back
            </a>
        </div>
    </body>
    </html>";
} else {
  header("Location: index.html");
  exit();
}
