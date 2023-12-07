<?php
// define variables and set to empty values

$fname =$lname= $email = $pass = $cpass = $phone = "";
$fnameb =$lnameb= $emailb = $passb = $cpassb = $phoneb = false;
$nameError =$lastError =$emailError =$passwordError =$phoneError =$cpassError="";
if (isset($_POST["submit"])) {
  if(empty($_POST["fname"])){
    $nameError="Please enter name";
  }else{
    $name = test_input($_POST["fname"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameError = "Only letters and white space allowed";
     
    }
    else{
        $fname = test_input($_POST["fname"]);
        $fnameb=true;
    }
  }
if(empty($_POST["lname"])){
  $lastError="Please enter last name";
}else{
  $l = test_input($_POST["lname"]);
  if (!preg_match("/^[a-zA-Z-' ]*$/",$l)) {
    $nameError = "Only letters and white space allowed";
   
  }
  else{
    $lname = test_input($_POST["lname"]);
    $lnameb=true;
  }
}
if(empty($_POST["email"])){
  $emailError= "please enter email";
}else{
  $e = test_input($_POST["email"]);
  if (!filter_var($e, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Invalid email format";
  
  }
  else{
    $email = $_POST["email"];
    $emailb=true;
  }
}
if(empty($_POST["phone"])){
  $phoneError= "phone number is required";
}else{
   
    if(!preg_match('/^[0-9]{10}+$/', test_input($_POST["phone"]))) {
        
        $phoneError="Invalid Phone Number ".(test_input($_POST['phone']));
        
        } 
        else{
            $phone=test_input($_POST["phone"]);
            $phoneb=true;
        }
}
if(empty($_POST["password"])){
  $passwordError= "password is required";
}else{
    $p = test_input($_POST["password"]);
 
if (strlen($p) < 8 || strlen($p) > 16) {
    $passwordError = "Password should be min 8 characters and max 16 characters";
   
}
elseif (!preg_match("/\d/", $p)) {
  $passwordError = "Password should contain at least one digit";

}
elseif(!preg_match("/[A-Z]/", $p)) {
  $passwordError  = "Password should contain at least one Capital Letter";

}
elseif(!preg_match("/[a-z]/", $p)) {
  $passwordError  = "Password should contain at least one small Letter";

}
elseif(!preg_match("/\W/", $p)) {
  $passwordError  = "Password should contain at least one special character";

}
elseif (preg_match("/\s/", $p)) {
  $passwordError  = "Password should not contain any white space";

}
else{
    $pass = $_POST["password"];
    $passb=true;
}

}
if(empty($_POST["confirmp"])){
  $cpassError= "confirm a password";
}else{
    if($_POST['password']!=$_POST['confirmp']){
        $cpassError= "please enter currect password";
    }else{
        $cpass = test_input($_POST["confirmp"]);
        $cpassb=true;
    }

}
include "ip.php";
include "mac.php";
include "index.php";
include "location.php";
// $hpass=password_hash($pass, PASSWORD_DEFAULT);

// echo password_verify($hpass, PASSWORD_DEFAULT);
$conn=mysqli_connect('localhost','root','','form')or die("not connected");
if($cpassb & $phoneb & $passb & $fnameb & $emailb & $lnameb ){

    $sql="INSERT INTO `details`(`Name`, `Last_name`, `Phone`, `Email`, `Password`, `Ip_address`, 
    `Mac address`, `Os_type`, `Browser`, `Date&Time`, `Location`) VALUES
     ('$fname','$lname','$phone','$email','$pass','$ip','$mac','$os','$browser','$date','$location')";
    mysqli_query($conn, $sql) or die("not stored");
}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>