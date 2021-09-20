const titleText = document.getElementById("title");

const startBtn = document.getElementById("start-btn");

const gameField = document.getElementById("game-field");
const gameText = document.getElementById("game-text");
const rockBtn = document.getElementById("rock");
const paperBtn = document.getElementById("paper");
const scissorsBtn = document.getElementById("scissors");

const results = document.getElementById("results");

let round = 0;
let pcChoice = 0;
let wins = 0;
let loss = 0;

function gameStart() {
    round++;
    gameField.style.display = "";
    startBtn.style.display = "none";
    titleText.textContent = `Round ${round}`
    gameText.innerHTML = "Make your choice!";

    if (round > 1) {
        rockBtn.style.display = "";
        paperBtn.style.display = "";
        scissorsBtn.style.display = "";
    }
}

function playerChoice(num) {
    pcChoice = Math.floor(Math.random() * 3); //generate a random number between 0 and 2

    if (num === 0 && pcChoice === 0) { // rock vs rock, draw
        gameText.innerHTML = `Rock vs Rock - It's a draw!`;
    } else if (num === 0 && pcChoice === 1) { // rock vs paper, lose
        gameText.innerHTML = `Rock vs Paper - You lost!`;
        loss++;
    } else if (num === 0 && pcChoice === 2) { // rock vs scissors, win
        gameText.innerHTML = `Rock vs Scissors - You won!`;
        wins++;
    } else if (num === 1 && pcChoice === 0) { // paper vs rock, win
        gameText.innerHTML = `Paper vs Rock - You won!`;
        wins++;
    } else if (num === 1 && pcChoice === 1) { // paper vs paper, draw
        gameText.innerHTML = `Paper vs Paper - Draw!`;
    } else if (num === 1 && pcChoice === 2) { // paper vs scissors, lose
        gameText.innerHTML = `Paper vs Scissors - You lost!`;
        loss++;
    } else if (num === 2 && pcChoice === 0) { // scissors vs rock, lose
        gameText.innerHTML = `Scissors vs Rock - You lost!`;
        loss++;
    } else if (num === 2 && pcChoice === 1) { // scissors vs paper, win
        gameText.innerHTML = `Scissors vs Paper - You won!`;
        wins++;
    } else if (num === 2 && pcChoice === 2) { // scissors vs scissors, draw
        gameText.innerHTML = `Scissors vs Scissors - Draw!`;
    }

    results.innerHTML += `
        <li><strong>Round ${round}:</strong> ${gameText.innerHTML}</li>
    `;

    //console.log(`${num} vs ${pcChoice}`);

    rockBtn.style.display = "none";
    paperBtn.style.display = "none";
    scissorsBtn.style.display = "none";
    
    if (wins < 3 && loss < 3) {
        startBtn.textContent = "Next round!"
        startBtn.style.display = "";
    } else if (wins === 3) {
        gameText.innerHTML = "";
        titleText.textContent = "You won the game! Hooray!";        
    } else if (loss === 3) {
        titleText.textContent = "You lost! Too bad.";
        gameText.innerHTML = "";
    }
}
