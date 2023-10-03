const quizdisplay = document.getElementById("display");
let timeLeft = document.querySelector(".time-left");
let quizContainer = document.getElementById("container");
let nextBtn = document.getElementById("next-button");
let countOfQuestion = document.querySelector(".number-of-question");
let wrapper = document.getElementById("wrapper");
let displayContainer = document.getElementById("display-container");
let scoreContainer = document.querySelector(".score-container");
let restart = document.getElementById("restart");
let userScore = document.getElementById("user-score");
let startScreen = document.querySelector(".start-screen");
let startButton = document.getElementById("start-button");
let questionCount;
let scoreCount = 0;
let count = 61;
let countdown;

//Qustion and option
const quizArray = [{
        id: "0",
        question: "Who invented C++?",
        options: ["Dennis Ritchie", "Ken Thompson", "Brian Kernighan", "Bjarne Stroustrup"],
        correct: "Bjarne Stroustrup"
    },
    {
        id: "1",
        question: "Which is the only continent in the world without a desert?",
        options: ["North America", "Asia", "Africa", "Europe"],
        correct: "Europe"
    },
    {
        id: "2",
        question: " Who invented Computer?",
        options: ["Charles Babbage", "Henry Luce", "Henry Babbage", "Charles Luce"],
        correct: "Charles Babbage"
    },
    {
        id: "3",
        question: " Who is invented Computer?",
        options: ["Charles Babbage", "Henry Luce", "Henry Babbage", "Charles Luce"],
        correct: "Charles Babbage"
    }
];
// restart game
restart.addEventListener("click", () => {
    inital();
    wrapper.classList.remove("hide");
    scoreContainer.classList.add("hide");
});
// Next button
nextBtn.addEventListener(
    "click",
    (displayNext = () => {

        questionCount += 1;
        if (questionCount == quizArray.length) {
            //hide question container and display score
            wrapper.classList.add("hide");
            scoreContainer.classList.remove("hide");
        } else {
            //display questionCount
            countOfQuestion.innerHTML =
                questionCount + 1 + " of " + quizArray.length + " Question";
            quizDisplay(questionCount);
            count = 61;
            clearInterval(countdown);
            timerDisplay();
        }
    })
);
// Timer
const timerDisplay = () => {
    countdown = setInterval(() => {
        count--;
        timeLeft.innerHTML = `${count}s`;
        if (count == 0) {
            clearInterval(countdown);
            displayNext();
        }
    }, 1000);
};
//display quiz
const quizDisplay = (questionCount) => {
    let quizCards = document.querySelectorAll(".container_mid");
    quizCards.forEach((card) => {
        card.classList.add("hide");
    });
    quizCards[questionCount].classList.remove("hide");
};
// Quiz creation
function quizCreator() {
    quizArray.sort(() => Math.random() - 0.5);
    for (let i of quizArray) {
        //randomly sort options
        i.options.sort(() => Math.random() - 0.5);
        let div = document.createElement("div");
        div.classList.add("container_mid", "hide");
        countOfQuestion.innerHTML = 1 + " of " + quizArray.length + " Question";
        //question
        let question_DIV = document.createElement("p");
        question_DIV.classList.add("question");
        question_DIV.innerHTML = i.question;
        div.appendChild(question_DIV);
        div.innerHTML += `
<button class="option-div" onclick="checker(this)">${i.options[0]}</button>
<button class="option-div" onclick="checker(this)">${i.options[1]}</button>
<button class="option-div" onclick="checker(this)">${i.options[2]}</button>
<button class="option-div" onclick="checker(this)">${i.options[3]}</button>

`;
        quizContainer.appendChild(div);
    }
}
// Check option is correct or not
function checker(userOption) {
    let userSolution = userOption.innerText;
    let question = document.getElementsByClassName("container_mid")[questionCount];
    let options = question.querySelectorAll(".option-div");

    if (userSolution === quizArray[questionCount].correct) {

        userOption.classList.add("correct");
        scoreCount++;
    } else {

        userOption.classList.add("inCorrect");

        options.forEach((element) => {
            if (element.innerText == quizArray[questionCount].correct) {
                element.classList.add("correct");
            }
        });
    }

    clearInterval(countdown);

    options.forEach((element) => {
        element.disabled = true;
    });
}
//initial setup
function inital() {
    quizContainer.innerHTML = "";
    questionCount = 0;
    scoreCount = 0;
    clearInterval(countdown);
    count = 61;
    timerDisplay();
    quizCreator();
    quizDisplay(questionCount);
}
// start button
startButton.addEventListener("click", () => {
    startScreen.classList.add("hide");
    wrapper.classList.remove("hide");
    inital();
});
//Restart
window.onload = () => {
    startScreen.classList.remove("hide");
    wrapper.classList.add("hide");
};