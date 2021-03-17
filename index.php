<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <title>Vinyl Shop</title>
  </head>
  <body>

    <?php require_once 'process.php'; ?>

    <?php
    $mysqli = new mysqli('localhost','root','','onion')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM product") or die($mysqli->error);



    ?>


    <nav>
      <div class="logo">
        <img id="logo" src="./css/vinylshoplogo.png" alt="logo" />
      </div>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="aboutUs.html">About</a></li>
        <li><a href="product.html">Product</a></li>
        <li><a href="contact.php">Contact</a></li>
        <button id="login_button"><a href="login.php">Login</a></button>
      </ul>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>

    <div class="slider" style="width: 500px; margin: auto">
      <div><img id="slider_photo" src="./css/vinyly.jpg" /></div>
      <div><img id="slider_photo" src="./css/vinyly.jpg" /></div>
      <div><img id="slider_photo" src="./css/vinyly.jpg" /></div>
    </div>




    <?php
    $count=0;
      while($row=mysqli_fetch_array($result)):
        if($count==0){
          echo '<ul class="images">';
        }
          $count++;

     ?>


      <div class="item">
        <a href="product.html">
          <?php echo '<img style="height:300px; width:300px;" class="img1" alt="Eleven" src="data:image/jpeg;base64,'.base64_encode($row['photo']).'"/>'; ?>
          <ul>
            <li><a href="item.php"> <?php echo $row['name'] ?> </a></li>
            <li>Cmimi: <?php echo $row['price'] ?>  EUR</li>
          </ul>
        </a>
      </div>


      <!-- <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>

      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>

      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div> -->

  <?php endwhile; ?>

  </ul>


    <!-- <ul class="images">
      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>

      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>

      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>

      <div class="item">
        <a href="product.html">
          <img class="img1" src="./css/logo.png" alt="Eleven" />
          <ul>
            <li><a href="item.php"> Vinyl </a></li>
            <li>Cmimi: 15 EUR</li>
          </ul>
        </a>
      </div>
    </ul> -->

    <div class="footer">
      <p class="footermenu">
        <a href="about.html"><span class="label">Contact</span></a>
        <a href="music.html"><span class="label">About</span></a>
        <a href="#"><span class="label">Cookie Policy</span></a>
      </p>
    </div>
    <script src="./js/burger-menu.js"></script>
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script>
      $(document).ready(function () {
        $(".slider").slick({});
      });
    </script>
  </body>
</html>
