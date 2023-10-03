<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="left-container" id="c">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqP6ESL1UH3VQmcYXbIP4Nnyaa4VfoiPnwR974zYyl&s" alt="CSE" class="img" id="redirectcse">
        <img src="https://ece.engin.umich.edu/wp-content/uploads/sites/2/2018/12/data-science-header-featured-1.jpg" alt="ECE" class="img" id="redirectece">
        <img src="https://t3.ftcdn.net/jpg/03/18/14/08/360_F_318140882_seYmbowNlJMFQqoBGxULHUiIVB92uz0c.jpg" alt="IT" class="img">
        <img src="https://img.brainkart.com/menu/2.jpg" alt="EEE" class="img">
    </div>
</body>
<style>
    #c {
        height: 1000px;
        width: 330px;
        background-color: whitesmoke;
        text-align: center;
        margin-left: -15px;
    }
    
    .img {
        height: 150px;
        width: 200px;
        margin-bottom: 20px;
        margin-top: 60px;
        border-radius: 5px;
    }
    .img:hover{
        opacity: .5;
    }
</style>
<script>
       document.getElementById("redirectcse").addEventListener("click", function() {
            // Use JavaScript to redirect to another page
            window.location.href = "course.php"; // Change "target.php" to the desired URL
        });
        document.getElementById("redirectece").addEventListener("click", function() {
            // Use JavaScript to redirect to another page
            window.location.href = "courseece.php"; // Change "target.php" to the desired URL
        });
</script>
</html>