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
  <title>Blue Sky Summer - about us page</title>
  <link rel="stylesheet" href="css/user_style.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>
    <div class="banner">
        <div class="detail">
            <h1>about us</h1>
            <p>**Blue Sky Summer** is an online company specializing in delicious, handcrafted ice creams.<br> We deliver joy in every scoop, straight to your door.</p>
            <span><a href="home.php">home</a><i class="bx bx-right-arrow-alt"></i>about us</span>
        </div>
    </div>
    <div class="chef">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <span>Ayoub Jemaa</span>
                    <h1>Masterchef</h1>
                    <img src="image/separator-img.png" >
                </div>
                <p>Meet **Chef Ayoub Jemaa**, the creative mind behind our irresistible ice cream flavors.  
                With a passion for culinary innovation, he blends tradition and imagination in every recipe.  
                Ayoub has years of experience crafting artisanal desserts that delight all ages.  
                He believes that ice cream is more than a treat—it's a moment of pure happiness.  
                At Blue Sky Summer, Chef Ayoub brings magic to every scoop we serve.</p>
                <div class="flex-btn">  
                    <a href="" class="btn">explore our menu</a>
                    <a href="" class="btn">visit our chef</a>
                </div>
            </div>
            <div class="box">
                <img src="image/ceaf.png" class="img">
            </div>
        </div>
    </div>
    <!-- cheaf section start -->
    <div class="story">
        <div class="heading">
            <h1>our story</h1>
            <img src="image/separator-img.png">
        </div>
        <p>Our story began with a simple dream: to spread joy through the magic of ice cream. <br> 
        Blue Sky Summer was born from a love of sweet flavors and sunny memories.  <br>
        We started in a small kitchen, experimenting with fresh ingredients and bold ideas. <br>  
        Every scoop we serve tells a tale of passion, creativity, and dedication.  <br>
        Today, we proudly bring happiness to homes with every bite of our handcrafted treats. <br>
        And as we grow, our mission stays the same — to make every day a little sweeter. </p>
        <a href="menu.php" class="btn">our services</a>
    </div>
    <div class="team">
        <div class="heading">
            <h1>Quality & passion with our services</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team-1.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap" id="kaka">
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-2.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap" >
                    <h2>Rima bns</h2>
                    <p>Pastry Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-3.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="" class="shap" >
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
        </div>
    </div>
    <dib class="container">
        <div class="box-container">
            <div class="img-box">
                <img src="image/about.png">
            </div>
            <div class="box">
                <div class="heading">
                    <h1>Taking Ice Cream To New Heights</h1>
                    <img src="image/separator-img.png">
                </div>
                <p>At Blue Sky Summer, we’re redefining what ice cream can be.
                From bold new flavors to artistic presentation, every scoop is a masterpiece.
                We fuse tradition with innovation to create unforgettable frozen moments.
                Our passion drives us to explore beyond the ordinary, always reaching higher.
                Join us on this delicious journey as we take ice cream to new heights</p>
                <a href="" class="btn">learn more</a>
            </div>
        </div>
    </div>
    <!--team section start -->
    <div class="team">
        <div class="heading">
            <h1>Quality & passion with our services</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="box-container">
            <div class="box">
                <img src="image/team-1.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-2.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Rima bns</h2>
                    <p>Pastry Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-3.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" class="shap">
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
        </div>
    </div>
    
    <!--team section end -->
    <!--stand section start -->
    <div class="standers">
        <div class="detail">
            <div class="heading">
                <h1>our standers</h1>
                <img src="image/separator-img.png">
            </div>
            <p>We uphold the highest standards of quality, service, and integrity in everything we do.</p>
            <i class="bx bxs-heart"></i>
            <p>Our standards drive excellence and inspire trust in every interaction</p>
            <i class="bx bxs-heart"></i>
            <p>We set the bar high to deliver consistent, reliable results.</p>
            <i class="bx bxs-heart"></i>
            <p>Quality is not a goal — it's our standard.</p>
            <i class="bx bxs-heart"></i>
            <p>Committed to maintaining standards that exceed expectations.</p>
            <i class="bx bxs-heart"></i>
        </div>
    </div>
    <!--stand section end -->
    <!-- testimonial section start -->
    <div class="testimonial">
        <div class="heading">
            <h1>testimonial</h1>
            <img src="image/separator-img.png">
        </div>
        <div class="testimonial-container">
            <div class="slide-row" id="slide">
                <div class="slide-col">
                    <div class="user-text">
                        <p>Zen Doan is a business analyse, entrepreneur and media proprietor , and 
                            investor.She also known aas the best selling book author.</p>
                        <h2>Zen</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (1).jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Zen Doan is a business analyse, entrepreneur and media proprietor , and 
                            investor.She also known aas the best selling book author.</p>
                        <h2>Zen</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (2).jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Zen Doan is a business analyse, entrepreneur and media proprietor , and 
                            investor.She also known aas the best selling book author.</p>
                        <h2>Zen</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (3).jpg" alt="">
                    </div>
                </div>
                <div class="slide-col">
                    <div class="user-text">
                        <p>Zen Doan is a business analyse, entrepreneur and media proprietor , and 
                            investor.She also known aas the best selling book author.</p>
                        <h2>Zen</h2>
                        <p>Author</p>
                    </div>
                    <div class="user-img">
                        <img src="image/testimonial (4).jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="indicator">
            <span class="btn1 active"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
            <span class="btn1"></span>
        </div>
    </div>
    <!-- testimonial section end -->
    <!-- mission section start -->
    <div class="mission">
        <div class="box-container">
            <div class="box">
                <div class="heading">
                    <h1>our mission</h1>
                    <img src="image/separator-img.png">
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission.webp">
                    </div>
                    <div>
                        <h2>mexicon chocolate</h2>
                        <p>layers of shaped marshmallow candies - bunnies, chicks and simple flowers -
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission1.webp">
                    </div>
                    <div>
                        <h2>vanila with honey</h2>
                        <p>layers of shaped marshmallow candies - bunnies, chicks and simple flowers -
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission0.jpg">
                    </div>
                    <div>
                        <h2>pappermint chip</h2>
                        <p>layers of shaped marshmallow candies - bunnies, chicks and simple flowers -
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
                <div class="detail">
                    <div class="img-box">
                        <img src="image/mission2.webp">
                    </div>
                    <div>
                        <h2>raspberry sorbat</h2>
                        <p>layers of shaped marshmallow candies - bunnies, chicks and simple flowers -
                            make a memorable gift in a beribboned box
                        </p>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="image/form.png" alt="" class="img">
            </div>
        </div>
    </div>
    <!-- mission section end -->







  <?php include 'components/footer.php'; ?>
  <!-- SweetAlert and Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js/user_script.js"></script>
  <?php include 'components/alert.php'; ?>
</body>
</html>
