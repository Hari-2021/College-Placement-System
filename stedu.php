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
    $sslc= $_POST['sslc'];
    $hsc = $_POST['hsc'];
    $diploma = $_POST['diploma'];
    $ug = $_POST['ug'];
    $degree= $_POST['degree'];
    $backlogs = $_POST['backlogs'];
    $sslc_discipline = $_POST['sslc_discipline'];
    $hsc_discipline = $_POST['hsc_discipline'];

    // Insert the data into the database
    // $stmt = $conn->prepare("INSERT INTO `students` (name, email, gender, dob, sslc, hsc, diploma, ug, degree, backlogs, sslc_discipline, hsc_discipline
    // ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("", $name, $email, $gender, $dob, $sslc, $hsc, $diploma, $ug, $degree, $backlogs, $sslc_discipline, $hsc_discipline);


    // $stmt = $conn->prepare("INSERT INTO `students` (sslc,hsc,diploma,ug) VALUES (?, ?, ?, ?)");
    // $stmt->bind_param("ssss", $sslc, $hsc, $diploma, $ug);


    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
        echo "DO it again";
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
        <link rel="stylesheet" href="./css/stedu.css">
        <title>Multi-Page Form</title>
    </head>

    <body>
        <div class="container">
            <form method="POST" action="">
                <!-- student Details -->
                <div class="page">
                    <h2>PERSONAL DETAILS</h2><br>
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

                </div>

                <!-- Page 2 -->
                <div class="page hidden">
                    <h2>EDUCATIONAL DETAILS</h2><br>
                    <label for="sslc">SSLC Mark(%):</label>
                    <input type="number" id="sslc" name="sslc" required><br>

                    <label for="hsc">HSC Mark(%):</label>
                    <input type="number" id="hsc" name="hsc" required><br>

                    <label for="diploma">Diploma(%):</label>
                    <input type="text" id="diploma" name="diploma" required><br>

                    <label for="ug">UG(CGPA):</label>
                    <input type="number" id="ug" name="ug" required><br>


                </div>

                <!-- Page 3 -->
                <div class="page hidden">

                    <label for="degree">Degree:</label>
                    <input type="text" id="degree" name="degree" required><br>

                    <label for="backlogs">Backlogs:</label>
                    <input type="text" id="backlogs" name="backlogs" required><br>

                    <label for="sslc_discipline">SSLC Discipline:</label>
                    <select id="sslc_discipline" name="sslc_discipline">
                    <option value="Normal">Normal</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                </select><br><br>

                    <label for="hsc_discipline">HSC Discipline:</label>
                    <select id="hsc_discipline" name="hsc_discipline">
                    <option value="Normal">Normal</option>
                    <option value="Good">Good</option>
                    <option value="Excellent">Excellent</option>
                </select><br><br>

                </div>
                <!-- <input type="submit" id="submit-btn" class="hidden" value="Submit"> -->
                <!-- Navigation buttons -->
                <div id="navigation">
                    <button type="button" id="prev-btn" class="prev" disabled>Previous</button>
                    <button type="button" id="next-btn" class="next">Next</button>
                </div>
                <button type="submit" id="submit-btn" class="hidden" style="float: right; transform: translateY(-50px);">Submit</button>
            </form>
        </div>
    </body>
    <script src="./js/redirect.js"></script>

    </html>