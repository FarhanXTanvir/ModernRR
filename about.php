<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> About | RouteRover </title>

  <!-- Style Sheet -->
  <link rel="stylesheet" href="css/about.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <?php include 'src/lib/lib.html'; ?>

  <!-- Font Family -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
  <?php include 'src/inc/header.php'; ?>
  <section id="#about">
    <h2 class="abt-h2">About Us</h2>
    <?php
    if (isset ($_SESSION["admin"])) {
      echo <<<FT
          <div class="about">
            <div class="content">
              <p>Hi {$_SESSION["admin"]} </p>
            </div>
          </div>
        FT;
    } elseif (isset ($_SESSION["user"])) {
      echo <<<FT
          <div class="about">
            <div class="content">
              <p> Hi {$_SESSION["user"]} </p>
            </div>
          </div>
        FT;
    }
    ?>
    <div class="about">
      <div class="content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio culpa aut beatae nihil blanditiis velit
          consequuntur non molestias, eius aliquam animi quibusdam ea at voluptatum aperiam qui illum facilis, quasi,
          quisquam a sint laboriosam. Voluptates eius consequatur, amet modi laborum autem culpa quod tempore saepe qui
          dicta iusto eveniet quaerat.</p><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio culpa aut beatae nihil blanditiis velit
          consequuntur non molestias, eius aliquam animi quibusdam ea at voluptatum aperiam qui illum facilis, quasi,
          quisquam a sint laboriosam. Voluptates eius consequatur, amet modi laborum autem culpa quod tempore saepe qui
          dicta iusto eveniet quaerat.</p>
      </div>
    </div>
  </section>
  <!-- ----------------- Footer Section --------------- -->
  <?php include 'src/inc/footer.php'; ?>
</body>

</html>