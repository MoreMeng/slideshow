<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMPLE SLIDESHOW</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.min.css">
</head>

<body>

  <div id="stage">
    <?php
        foreach ( glob( 'images/*.*' ) as $img ) {
            echo '<p style="background-image: url(' . $img . ')"></p>';
        }
    ?>
    <!-- <p style="background-image: url(images/ath-queue.png)"></p>
    <p style="background-image: url(images/ath-appointment.png)"></p> -->
  </div>

  <script src="js/app.min.js"></script>
</body>

</html>