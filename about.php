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
  <link rel="stylesheet" href="css/test_style.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
    <?php include 'components/user_header.php'; ?>
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
                    <img src="image/shape-19.png" alt="shap">
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-2.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="shap">
                    <h2>Rima bns</h2>
                    <p>Pastry Chef</p>
                </div>
            </div>
            <div class="box">
                <img src="image/team-3.jpg" class="img">
                <div class="content">
                    <img src="image/shape-19.png" alt="shap">
                    <h2>Ayoub Jemaa</h2>
                    <p>Coffe Chef</p>
                </div>
            </div>
        </div>
    </div>
    <!--team section end -->







  <?php include 'components/footer.php'; ?>
  <!-- SweetAlert and Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js/user_script.js"></script>
  <?php include 'components/alert.php'; ?>
</body>
</html>
