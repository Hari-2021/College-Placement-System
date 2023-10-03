<?php
//  include('config.php');
// Database configuration (same as before)
$host = "localhost";  // Hostname
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "college"; // Database name

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];

    // Insert the data into the database
    $stmt = $conn->prepare("INSERT INTO `students` (name, email, gender, dob) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $gender, $dob);

    // Execute the statement
    if ($stmt->execute()) {
        // echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/stud.css">
        <title>Student Details</title>
    </head>

    <body>
        <div class="container">
            <h4>PERSONAL DETAILS</h4>
            <form class="studetail"  method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>

                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
          
                <input type="submit" name="submit" value="Next" class="button" onclick="onclick();">
            </form>
            <!--         
    <center>
        <button type="submit">Submit</button>
    </center> -->
    </body>
    <script src="./js/redirect.js"></script>
</html>