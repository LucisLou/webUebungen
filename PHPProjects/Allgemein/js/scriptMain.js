$('#game-field').hide();
$('#history-area').hide();
$('#history').hide();
$('#game-over').hide();
$('#game-won').hide();
$('#save-result').hide();

let gameOngoing = false;
let tries = 0;
let upperLimit = 0;
let userInput = "";
let answer = 0;
let score = 0;
let penalty = 0;
let history = "";

function gameStart() {
    $('#settings').fadeOut();
    gameOngoing = true;
    tries = $('#tries').val();
    upperLimit = $('#upper-limit').val();

    score = 100 * upperLimit / tries;
    penalty = score / tries;


    answer = Math.floor(Math.random()*upperLimit)+1;

    $('#game-field').fadeIn();
    $('#data-tries').html("<strong>Tries:</strong> " + tries);
    $('#data-limit').html("<strong>Upper Limit:</strong> " + upperLimit);
    $('#history-area').fadeIn();
}

function addInput(input) {
    if (userInput.length < 3 && gameOngoing) {
        userInput += input;
        $('#numbers-guessed').html(userInput);
    }
}

function resetInput() {
    $('#numbers-guessed').html("");
    userInput = "";
}

function enterInput() {
    if (gameOngoing) {

        if (answer == $('#numbers-guessed').html()) {
            gameWon();
        } else {
            if (answer > $('#numbers-guessed').html()) {
                $('#hint').html('You guessed too low!');
            } else {
                $('#hint').html('You guessed too high!');
            }
            tries--;
            score = score - penalty;
            if (tries <= 0) {
                gameOver();
            }
        }

        history += (userInput + "<br>");
        $('#last-input').html(history);

        resetInput();

    }

}

function gameWon() {
    $('#game-won').fadeIn();
    $('#score').html("Your score is: <strong>" + score + "!</strong>");

    gameOngoing = false;

    reset();
}

function gameOver() {
    $('#game-over').fadeIn();
    
    gameOngoing = false;

    reset();

}

function reset() {
    $('#game-field').hide();
    $('#settings').fadeIn();

    $('#hint').html("");
    $('#data-tries').html("");
    $('#data-limit').html("");

    $('#last-input').html("");

    tries = 0;
    upperLimit = 0;
    answer = 0;
    history = "";
}

function showHistory() {
    $('#history').fadeIn();
}

function closeHistory() {
    $('#history').fadeOut();
}

function resetGameWin() {
    $('#game-won').fadeOut();
    $('#save-result').hide();
    $('#save-score-btn').show();
    reset();
}

function resetGameLose() {
    $('#game-over').fadeOut();
    reset();
}

function saveScore(username) {
    $.ajax({
        method: "POST",                         
        url: "../auth/saveScore.php",           
        data: { username : username, score : score },
        success: "AjaxSucceeded",
        error: "AjaxFailed"                
    })
    .done(function (response) {     
        if (response) {
            $('#save-result').fadeIn();
            $('#save-score-btn').fadeOut();
        }                
    });
}