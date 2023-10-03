<?php
  include("header.php");
  include("depart.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS (you can use a CDN or a local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include your custom CSS file -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Course</title>
</head>

<body>

<div class="ccontainer" onclick="" id="redirect">
        <img src="https://hips.hearstapps.com/hmg-prod/images/quiz-questions-answers-1669651278.jpg?crop=0.770xw:1.00xh;0.112xw,0&resize=1200:*" alt="course">
        <h4>QUIZ</h4>

   <div class="ccontainer" >
        <img src="https://play-lh.googleusercontent.com/8HEJdrLd48HwrAzlRva8xjG1wxCuu0VUd9ML6ySw76q-lBD0AeWofbNZqYPrjWSCgf8" alt="course">
        <h4>APTITUDE</h4>
    </div>

    </div>
    <div class="ccontainer" onclick="">
        <img src="https://cdn.firstcry.com/education/2022/06/24112737/284869040.jpg" alt="course">
        <h4>PRACTICE</h4>
    </div>
    <div class="ccontainer" onclick="">
        <img src="https://img.freepik.com/free-vector/job-interview-conversation_74855-7566.jpg?w=2000" alt="course">
        <h4>INTERVIEW </h4>
    </div>
    <style>
        .ccontainer {
            width: 800px;
            height: 180px;
            margin: 60px 0px 0px 350px;
            padding: 30px;
            margin-left: 400px;
            background-color: #fff;
            border-radius: 5px;
            font-family: Arial, Helvetica, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transform: translateY(-64rem);
            
        }
        img {
            height: 120px;
            width: 150px;
            border-radius: 5%;
        }
        
        h4 {
            float: right;
            margin-right: 350px;
            margin-top: 50px;
        }
        
        .container:hover {
            background-color: whitesmoke;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</body>
<script>
     document.getElementById("redirect").addEventListener("click", function() {
            // Use JavaScript to redirect to another page
            window.location.href = "Quiz.php"; // Change "target.php" to the desired URL
        });
</script>
</html>