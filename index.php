<?php
  $appFolder = 'apps';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Droid</title>
    <meta name="charset" content="UTF-8">
    <meta name="author" content="Rafael Klaessen, Wouter Molhoek, Peter Christiaanse, Marijn Pool, Gijs Verdonschot">
    <meta name="description" content="An online Android emulator">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery v3.1.0 -->
    <script type="text/javascript" src="api/js/jquery.js"></script>

    <!-- API -->
    <!-- API CSS -->
    <link rel="stylesheet" type="text/css" href="api/css/droid.css">
    <!-- API JavaScript -->
    <script type="text/javascript" src="api/js/droid.js"></script>

    <!-- System files -->
    <!-- System files CSS -->
    <link rel="stylesheet" type="text/css" href="system_files/gui/css/lockscreen.css">
    <link rel="stylesheet" type="text/css" href="system_files/gui/css/homescreen.css">
    <!-- System files JavaScript -->
    <script type="text/javascript" src="system_files/gui/js/lockscreen.js"></script>
    <script type="text/javascript" src="system_files/gui/js/homescreen.js"></script>

  </head>
  <body>
    <!-- Display -->
    <main id="view" class="view">
      <?php
        /**
          * Include apps
          */
        require 'apps.php';
        /**
          * Include homescreen
          */
        require 'system_files/homescreen.php';
        /**
          * Include lockscreen
          */
        require 'system_files/lockscreen.php';
      ?>
    </main>
    <!-- System buttons -->
    <section id="sys-btns-container" class="sys-btns-container"></section>
  </body>
</html>
