<?php
include "config.php";

// if(isset($_SESSION['admin'])){
//     header("Location: register.php");
// }
// if(isset($_SESSION['name'])&&isset($_SESSION['email'])){
//     header("Location: register.php");
// }

// $set_value = 0;
// $error = '0';
// if(isset($_REQUEST['email'])&&isset($_REQUEST['pass'])){
//     $email = trim($_REQUEST['email']);
//     $pass = trim($_REQUEST['pass']);
//     if($email=="admin@gmail.com"&&$pass=="admin"){
//         $_SESSION['admin'] = true;
//         header("Location: studetail.php");
//     }
//     $pass = md5(trim($_REQUEST['pass']));
//     $sql = "SELECT *FROM users
//                WHERE user_email='$email'
//                AND user_pass='$pass'";
//     $result = mysqli_query($con, $sql);
//     $num_rows = mysqli_num_rows($result);
//     if($num_rows>0){
//         $row = mysqli_fetch_array($result);
//         // $_SESSION['id'] = $row['user_id'];
//         $_SESSION['name'] = $row['user_name'];
//         $_SESSION['email'] = $row['user_email'];
//         header("Location: index.php");
//     } else{
//         $set_value = 1;
//         $error = "Invalid Email or Password";
//     }
// }


// Check if the login form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $login_username = $_POST["login_username"];
    $login_password = $_POST["login_password"];

    // Query to check if the user exists and credentials are correct
    $sql = "SELECT * FROM user WHERE username = '$login_username' AND password = '$login_password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful, redirect to a welcome or dashboard page
        header("Location: select.php");
        exit; // Terminate script execution to ensure the redirect happens
    }

    // Close the database connection
    // $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Include Bootstrap CSS (you can use a CDN or a local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
    <center>
        <div class="container-fluid">
            <div class="row">
                <!-- Left Container -->
                <div class="col-md-6 bg-primary-custom">
                    <img src="./images/bird.png" alt="bird">
                </div>

                <!-- Right Container -->
                <div class="col-md-6 bg-secondary text-white">
                    <center>
                        <h1>Login</h1>
                        <h4>Welcome to Login</h4>
                        <form id="login-form" action="" method="POSt">
                            <div class="input-container">
                                <label for="email"> Email :</label>
                                <input type="email" id="username" name="login_username" placeholder="" required>
                            </div>
                            <div class="input-container">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="login_password" placeholder="" required>
                            </div>
                            <button type="submit" id="but" href="studetail.php">Login</button>
                        </form>
                        <p>--------- <a href="register.php">Register</a> ----------</p>
                    </center>
                </div>
            </div>
        </div>
    </center>
    <style>
        button {
            justify-items: center;
            border: none;
            width: 180px;
            height: 35px;
            border-radius: 30px;
            margin-bottom: 20px;
        }
        
        button:hover {
            outline: none;
            opacity: .8;
        }
        a {
            color: #93f47bfb;
            margin-top: -10px;
        }

        a:hover {
            text-decoration: none;
            color: #fee473fb;
        }

    </style>
    <!-- Include Bootstrap JavaScript (you can use a CDN or a local file) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>