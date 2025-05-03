<?php
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
if (isset($_POST['submit'])) {
    $id = unique_id();
    $name = $_POST['name'];
    $name=filter_var($name,FILTER_SANITIZE_STRING);
  
    $email=$_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL); 
    
    $pass = sha1($_POST['pass']);
    $pass=filter_var($pass,FILTER_SANITIZE_STRING);
  
    $cpass = sha1($_POST['cpass']);
    $cpass=filter_var($cpass,FILTER_SANITIZE_STRING);
  
    $image = $_FILES['image']['name'];
    $image=filter_var($image,FILTER_SANITIZE_STRING);
  
    $ext = pathinfo($image, PATHINFO_EXTENSION); 
    $rename = unique_id() . '.' . $ext;
    $image_size=$_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_files/' . $rename;
  
    // Vérification si l'email existe déjà
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
  
    if ($select_user->rowCount() > 0) {
      $warning_msg[] = 'Email already exists!';
    } elseif ($pass !== $cpass) {
      $warning_msg[] = 'Confirm password not matched!';
    } else {
      // Insertion dans la base de données
      $insert_user = $conn->prepare("INSERT INTO `users`(id, name, email, password, image) VALUES(?,?,?,?,?)");
      $insert_user->execute([$id, $name, $email, $cpass, $rename]);
      // Déplacement de l'image téléchargée
      move_uploaded_file($image_tmp_name, $image_folder);
      $success_msg[] = 'new user registered successfully!please loging now';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Blue Sky Summer - user registration page</title>
  <link rel="stylesheet" href="css/user_style.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
  <?php include 'components/user_header.php'; ?>
  <div class="banner">
    <div class="detail">
        <h1>register</h1>
        <p>Register now to become a valued client and enjoy sweet perks. <br>
        Explore our irresistible ice cream flavours — there’s a scoop for everyone!</p>
        <span><a href="home.php">HOME</a><i class="bx bx-right-arrow-alt"></i>REGISTER</span>
    </div>
  </div>
  <div class="form-container">
    <form action="" method="post" enctype="multipart/form-data" class="register">
      <h3>Register now</h3> 
      <div class="flex">
        <div class="col">
          <div class="input-field">
            <p>Your name <span>*</span></p>
            <input type="text" name="name" placeholder="Enter your name" class="box" maxlength="50" required class="box">
          </div>
          <div class="input-field">
            <p>Your email <span>*</span></p>
            <input type="email" name="email" placeholder="Enter your email" maxlength="50" class="box" required>
          </div>
        </div>
        <div class="col">
          <div class="input-field">
            <p>Your password <span>*</span></p>
            <input type="password" name="pass" placeholder="Enter your password" maxlength="50" class="box" required>
          </div>
          <div class="input-field">
            <p>Confirm password <span>*</span></p>
            <input type="password" name="cpass" placeholder="Confirm your password" maxlength="50" class="box" required>
          </div>
        </div>
      </div><!-- End of flex-->
      <div class="input-field">
            <p>your profile <span>*</span></p>
            <input type="file" name="image" accept="image/*" class="box" required>
      </div>
      <p class="link">already have an account ?<a href="login.php">login now</a></p>
      <input type="submit" name="submit" value="register now" class="btn">
    </form>
  </div>

  <?php include 'components/footer.php'; ?>

  <!-- SweetAlert and Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="js/user_script.js"></script>
  <?php include 'components/alert.php'; ?>
</body>
</html>
