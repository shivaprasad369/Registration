<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
    <?php
    session_start();
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'form');

    $sql = "SELECT * FROM details WHERE Email='$email' AND Password='$password'";
    $query = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($query);
    if ($num > 0) {
        while ($row = mysqli_fetch_array($query)) {
            ?><h1>User Details</h1>
            <ul>
                <li class="li">Name :-
                    <?php echo $row['Name'] ?>
                </li>
                <li class="li"> Last Name :-
                    <?php echo $row['Last_name'] ?>
                </li>
                <li class="li">Phone Number :-
                    <?php echo $row['Phone'] ?>
                </li>
                <li class="li"> Email :-
                    <?php echo $row['Email'] ?>
                </li>
                <li class="li"> Password :-
                    <?php echo $row['Password'] ?>
                </li>
                <li class="li"> Os Type :-
                    <?php echo $row['Os_type'] ?>
                </li>
                <li class="li"> Ip Address :-
                    <?php echo $row['Ip_address'] ?>
                </li>
                <li class="li"> Mac Address :-
                    <?php echo $row['Mac address'] ?>
                </li>
                <li class="li"> Browser :-
                    <?php echo $row['Browser'] ?>
                </li>
                <li class="li"> Date and time
                    <?php echo $row['Date&Time'] ?>
                </li>
                <li class="li"> Location :-
                    <?php echo $row['Location'] ?>
                </li>
            </ul>
            <?php
        }
    } else {
        echo "no data found";
    }
    if(isset($_POST['logout'])) {
    
        session_abort();
       echo "<script>location.href='form.php';</script>";
        header('form.php');
    }
    ?>
<button name='logout'>Logout</button>
    </form>
</body>

</html>