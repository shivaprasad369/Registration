<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Fstyle.css">
</head>
<?php
include('formValidation.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script>
  $(document).ready(function(){
   $('#form').submit(function (ev) {
    $.ajax({
            type: $('#form').attr('method'),
            url: $('#form').attr('action'),
            data:$('#form').serialize(),
            success: function (data) {
                alert('ok');
            }
        });
        ev.preventDefault();
    });
  });
</script> -->
<body>
<form method="post" id='form' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="fname"><b>First Name</b></label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>
    <p class="p"><?php echo $nameError; ?></p>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.."required>
    <p class="p"><?php echo $lastError ?></p>

    <label for="phone"><b>Phone</b></label>
    <input type="text" id="phone" name="phone" placeholder="Your phone number.."required>
    <p class="p"><?php echo $phoneError ?></p>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <p class="p"><?php echo $emailError ?></p>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="psw"required>
    <p class="p"><?php echo $passwordError?></p>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="confirmp" id="psw-repeat" required>
    <p class="p"><?php echo $cpassError ?></p>
    <hr>

    <button type="submit" class="registerbtn" name='submit'>Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login.php" >Sign in</a>.</p>
  </div>
</form>

</body>
</html>
