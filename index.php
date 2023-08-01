<!DOCTYPE html>
<!--Code By Webdevtrick ( https://webdevtrick.com )-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="phone-style.css" />
  <link rel="stylesheet" type="text/css" href="tablet-style.css" />
  <link rel="stylesheet" type="text/css" href="bigger-tablet.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css'>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
  <title>Landing Page - Cloud Service</title>
</head>

<body>

  <?php include 'header.php'?>
  <div class="background-section">
    <div id="fullpage" class="full-home-page">
      <div class="home-page-image">
        <section class="vertical-scrolling ">
          <?php include 'section1.php' ?>
        </section>
        <section class="vertical-scrolling">
          <?php include 'section2.php' ?>
        </section>
        <section class="vertical-scrolling">
          <?php include 'section3.php' ?>
        </section>
        <section class="vertical-scrolling">
          <?php include 'section4.php' ?>
        </section>
        <section class="vertical-scrolling">
          <?php include 'section5.php' ?>
        </section>
        <?php include 'footer.php' ?>
      </div>
    </div>
  </div>
  <script src="function.js"></script>

</body>

</html>