<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blue Sky Summer - home page</title>
  <link rel="stylesheet" href="css/user_style.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <?php include 'components/user_header.php'; ?>

  <!-- Slider section start -->
  <div class="slider-container">
    <div class="slider">
      <div class="slideBox active">
        <div class="textBox">
          <h1>we pride ourselves on <br> exceptional flavors</h1>
          <a href="menu.php" class="btn">shop now</a>
        </div>
        <div class="imgBox">
          <img src="image/slider.jpg" />
        </div>
      </div>
      <div class="slideBox">
        <div class="textBox">
          <h1>cold treats are my kind <br>of comfort food</h1>
          <a href="menu.php" class="btn">shop now</a>
        </div>
        <div class="imgBox">
          <img src="image/slider0.jpg" />
        </div>
      </div>
    </div>
    <ul class="controls">
      <li onclick="nextSlide();" class="next"><i class="bx bx-right-arrow-alt"></i></li>
      <li onclick="prevSlide();" class="prev"><i class="bx bx-left-arrow-alt"></i></li>
    </ul>
  </div>
  <!-- Slider section end -->

  <!-- Service section start -->
  <div class="service">
    <div class="box-container">
      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/services.png" class="img1" />
            <img src="image/services (1).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>delivery</h4>
          <span>100% secure</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/services (2).png" class="img1" />
            <img src="image/services (3).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>payment</h4>
          <span>100% secure</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/services (5).png" class="img1" />
            <img src="image/services (6).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>support</h4>
          <span>24*7 hours</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/services (7).png" class="img1" />
            <img src="image/services (8).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>gift service</h4>
          <span>support gift service</span>
        </div>
      </div>

      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/service.png" class="img1" />
            <img src="image/service (1).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>returns</h4>
          <span>24*7 free return</span>
        </div>
      </div>
      <div class="box">
        <div class="icon">
          <div class="icon-box">
            <img src="image/services.png" class="img1" />
            <img src="image/services (1).png" class="img2" />
          </div>
        </div>
        <div class="detail">
          <h4>delivery</h4>
          <span>100% secure</span>
        </div>
      </div>
    </div>
  </div>
  <!-- Service section end -->

  <!-- Categories section start -->
  <div class="categories">
    <div class="heading">
      <h1>categories features</h1>
      <img src="image/separator-img.png" />
    </div>
    <div class="box-container">
      <div class="box">
        <img src="image/categories.jpg" />
        <a href="menu.php" class="btn">coconuts</a>
      </div>
      <div class="box">
        <img src="image/categories0.jpg" />
        <a href="menu.php" class="btn">chocolate</a>
      </div>
      <div class="box">
        <img src="image/categories2.jpg" />
        <a href="menu.php" class="btn">strawberry</a>
      </div>
      <div class="box">
        <img src="image/categories1.jpg" />
        <a href="menu.php" class="btn">corn</a>
      </div>
    </div>
  </div>
  <!-- Categories section end -->

  <img src="image/menu-banner.jpg" class="menu-banner" />

  <!-- Taste section start -->
  <div class="taste">
    <div class="heading">
      <span>Taste</span>
      <h1>buy any ice cream @ get one free</h1>
      <img src="image/separator-img.png" />
    </div>
    <div class="box-container">
      <div class="box">
        <img src="image/taste.webp" />
        <div class="detail">
          <h2>natural sweetness</h2>
          <h1>vanila</h1>
        </div>
      </div>
      <div class="box">
        <img src="image/taste0.webp" />
        <div class="detail">
          <h2>natural sweetness</h2>
          <h1>matcha</h1>
        </div>
      </div>
      <div class="box">
        <img src="image/taste1.webp" />
        <div class="detail">
          <h2>natural sweetness</h2>
          <h1>blueberry</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Taste section end -->

  <!-- Container section start -->
  <div class="ice-container">
    <div class="overlay">
      <div class="detail">
        <h1>Ice cream is cheaper than <br> therapy for stress</h1>
        <p>
          Sometimes, all it takes to lift your mood is a scoop of your favorite ice cream. It's sweet, comforting, and always there when you need a little pick-me-up. While therapy is important, there’s something magically soothing about enjoying a cold treat on a stressful day — and it definitely costs less! Ice cream doesn’t ask questions or judge, it simply melts your worries away one spoonful at a time. After all, happiness really can come in a cone.
        </p>
        <a href="menu.php" class="btn" style="background-color:#000;">shop now</a>
      </div>
    </div>
  </div>
  <!-- Container section end -->
  <!-- Taste2 section start -->
  <div class="taste2">
    <div class="t-banner">
      <div class="overlay">
        <div class="detail">
          <h1>find your taste of desserts</h1>
          <p>Treat them a delicious treat and send them some Luck 'o the Irish tool!</p>
          <a href="menu.php" class="btn">shop now</a>
        </div>
      </div>
    </div>
    <div class="box-container">
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type4.jpg">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type.avif">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type1.png">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type2.png">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type0.avif">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
      <div class="box">
        <div class="box-overlay"></div>
        <img src="image/type4.jpg">
        <div class="box-details fadeIn-bottom">
          <h1>strawberry</h1>
          <p>find your taste of desserts</p>
          <a href="menu.php" class="btn">explore more</a>
        </div>
      </div>
    </div>
   </div>
  <!-- Taste2 section end -->
  <!-- flavour section start -->
  <div class="flavor">
    <div class="box-container">
      <img src="image/left-banner2.webp">
      <div class="detail">
        <h1>Hot Deal ! Sale Up To <span>20% off</span></h1>
        <p>expired</p>
        <a href="menu.php" class="btn">shop now</a>
      </div>
    </div>
  </div>
  <!-- flavour section end -->
  <!-- usage section start -->
  <div class="usage">
    <div class="heading">
      <h1>how it works</h1>
      <img src="image/separator-img.png">
    </div>
    <div class="row">
      <div class="box-container">
        <div class="box">
          <img src="image/icon.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
        <div class="box">
          <img src="image/icon0.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
        <div class="box">
          <img src="image/icon1.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
      </div>
      <img src="image/sub-banner.png" class="divider">
      <div class="box-container">
        <div class="box">
          <img src="image/icon2.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
        <div class="box">
          <img src="image/icon3.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
        <div class="box">
          <img src="image/icon4.avif">
          <div class="detail">
            <h3>scoop ice-cream</h3>
            <p>Using an ice cream scoop is simple and effective for serving perfect portions. Just dip the scoop in warm water, press it firmly into the ice cream, and twist to form a smooth, round scoop. It helps reduce effort and creates a clean, uniform shape every time.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- usage section end -->
  <!-- Pride section start -->
  <div class="pride">
    <div class="detail">
      <h1>We pride ourselves on <br> exceptional flavors.</h1>
      <p>Exceptional ice cream flavors go beyond the classics, offering bold and unexpected taste combinations like lavender honey or chili chocolate.<br> These unique blends excite the palate and create memorable dessert experiences.</p>
      <a href="menu.php" class="btn">shop now</a>
    </div>
  </div>

  <?php include 'components/footer.php'; ?>
  <!-- SweetAlert and Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js/user_script.js"></script>
  <?php include 'components/alert.php'; ?>
</body>
</html>
