<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="./css/Quiz.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="start-screen">
        <button id="start-button">Start</button>
    </div>
    <div id="wrapper">
        <div id="display-container">
            <div class="header">
                <div class="number-of-count">
                    <span class="number-of-question"></span>
                </div>
                <div class="timer-div">
                    <img src="https://svgshare.com/i/iRM.svg" />
                    <span class="time-left"></span>
                </div>
            </div>
            <div id="container">
            </div>
            <div class="btn-container">
                <button id="next-button">Next</button>
            </div>
        </div>
    </div>
    <div class="score-container hide">
        <div id="user-score"></div>
        <button id="restart">Restart</button>
    </div>
</body>
<script src="./js/Quiz.js"></script>

</html>