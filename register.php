<?php
include('config.php');
// Database configuration
// $host = "localhost";  // Hostname
// $username = "root"; // MySQL username
// $password = ""; // MySQL password
// $database = "college"; // Database name

// // Create a database connection
// $conn = new mysqli($host, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Check if the form was submitted
// if (isset($_POST['subimt'])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];
    // Hash the password
    // $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert the data into the database
//     $stmt = $conn->prepare("INSERT INTO `user` (username, password) VALUES (?, ?)");
//     $stmt->bind_param("ss", $username, $hashedPassword);

//      if ($stmt->execute()) {
//         echo "Data inserted successfully.";
//     } else {
//         echo "Error: " . $stmt->error;
//     }
// }

// Close the database connection
// $conn->close();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST["username"];
    $password = $_POST["password"];
    // $confirm_password = $_POST["confirm_password"];

    // Validate the password confirmation
    // if ($password !== $confirm_password) {
        // echo "Passwords do not match. Please try again.";
    // } else {
        // Perform database insertion (Assuming you have a database connection)
        // $servername = "localhost";
        // $username = "root";
        // $password = "";
        // $dbname = "user";

        // // Create a database connection
        // $conn = new mysqli($servername, $username, $password, $dbname);

        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }

        $stmt = $conn->prepare("INSERT INTO `user` (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $password);
        // SQL query to insert user data into a table (assuming you have a "users" table)
        if ($stmt->execute()) {
            // echo "Registration successful!";
            header("Location: index.php");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the prepared statement and database connection
        $stmt->close();
        // $conn->close();
    }


?> 

<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    
    <center>
        <div class="col-md-6 bg-secondary text-white">

            <h4>REGISTER</h4>
            <form id="login-form"  method="POST" onsubmit="return validateForm()">
                <div class="input-container">
                    <label for="email" class="l">Email :</label>
                    <input type="email" id="username" name="username" placeholder="" required>
                </div>
                <div class="input-container">
                    <label for="password" class="l">Password:</label>
                    <input type="password" id="password" name="password" placeholder="" required>
                </div><br>
                <div class="input-container">
                    <label for="password" class="l">Confirm Password:</label>
                    <input type="password" id="confirm_password" placeholder="" required>
                </div><br><br>
                <button type="submit">REGISTER</button>
            </form>

        </div>
    </center>
    <style>
        .l {
            float: left;
        }
        
        button[type="submit"] {
            background-color: #7be284;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            outline: none;
        }
        
        button[type="submit"]:hover {
            background-color: #06740f;
            outline: none;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }
        
        h4 {
            margin-top: 50px;
            padding-top: 30px;
        }
        
        .text-white {
            width: 900px;
            height: 450px;
            background-color: white;
            border-radius: 10px;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        
        .input-container {
            width: 500px;
        }
        @media (max-width:900px){
            .text-white {
        margin-left: -100px;
        height: 600px;
        width: auto;
        box-shadow: none;
    }
        }
    </style>
</body>
<script src="./js/register.js"></script>
</html>