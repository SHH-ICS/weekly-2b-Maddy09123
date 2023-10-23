<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
      <!-- Accent-colored raised button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
  Button
</button>
<!-- Simple Textfield -->
<form action="#">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1">
    <label class="mdl-textfield__label" for="sample1">Text...</label>
  </div>
</form>
    <?php
    $userName = "";
    if ( isset( $_POST['radius'] ) ){
      $radius = $_POST['radius'];
    }
    echo "<h1>For a Circle of Radius ".$radius."</h1>\n";
    echo "<p>Area = \n";
    echo "<p>Circumference = \n";
    ?>
    
  </body>
  
</html>
