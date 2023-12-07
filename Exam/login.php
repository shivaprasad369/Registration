<!doctype html>
<html>

<head>
  <meta charset="UTF-80">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="lstyle.css">
</head>

<body>

  <div class="user-form">
    <h1>Login</h1>
    <form method="post">
      <input type="email" name="email" placeholder="Enter your email id">
      <input type="password" name="password" placeholder="Enter currect password">
      <div class="btn">
      <button type="submit" class="registerbtn" name='submit'>Submit</button>
        <button type="button" class="btn primary"><a href="<?php echo htmlspecialchars('form.php'); ?>"
            style="text-decoration: none;font-weight: 700;color:black">Back</a></button>
      </div>
    </form>

  </div>

  
  <?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'form');
$email = $_POST['email'];
$password = $_POST['password'];
  if (isset($_POST['submit'])) {
    $sql = "SELECT * FROM details WHERE Email='$email' AND Password='$password'";
    $query=mysqli_query($conn,$sql);
    
    if ($query->num_rows >0) {
      $_SESSION['email']=$email;
      $_SESSION['password']=$password;
      echo " <script>alert('Wellcome Back!');
    location.href='userDetail.php';
     </script>";
    } else {
      echo " <script>alert('Please register');;
     </script>";
    }

  }


?>
</body>

</html>

