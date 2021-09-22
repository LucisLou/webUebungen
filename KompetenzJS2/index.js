$('#quiz-field').hide();
$('#win-box').hide();
$('#continue').hide();

let level = 0;
let pcAnswer = 0;

let si; //used for setting intervals

function checkSave() {
    if (localStorage.getItem("level")) {
        if (localStorage.getItem("level") != 0) {
            level = parseInt(localStorage.getItem("level"), 10);

            $('#start').hide();
            $('#continue').show();
        }
        console.log(`Save state: Level = ${level}`);
    }
}

function saveState() {
    localStorage.setItem("level", level.toString());
}

function gameStart() {
    level++;
    $('#start').hide();
    $('#quiz-field').fadeToggle();
    $('#game-title-msg').text("Let's go!");
    mathQuiz();
    changeLevelColor();
}

function continueGame() {
    $('#continue').hide();
    $('#game-title-msg').text("Let's go!");
    changeLevelColor();
    mathQuiz();
}

function toggleField() {
    clearInterval(si);
    $('#challenge').text('');
    $('#msg').text('');
    $('#quiz-field').fadeToggle();
    si = setInterval(mathQuiz, 1000);
}

function mathQuiz() {
    
    if (level != 1) {
        $('#quiz-field').fadeToggle();
    }  
    
    if (level > 1) {
        clearInterval(si);
    }

    let a = Math.floor(Math.random()*100)+1;
    let b = Math.floor(Math.random()*100)+1;
    let c = Math.floor(Math.random()*10)+1;
    pcAnswer = 0;

    if (level <= 2) {
        $('#challenge').text(`${a} + ${b} = ?`);
        pcAnswer = a + b;
    } else if (level <= 4) {
        $('#challenge').text(`${a} - ${b} = ?`);
        pcAnswer = a - b;
    } else if  (level <= 6) {
        $('#challenge').text(`${a} * ${b} = ?`);
        pcAnswer = a * b;
    } else if (level <= 8) {
        $('#challenge').text(`${a} / ${b} = ? (2 decimals)`);
        pcAnswer = a / b;
        pcAnswer = pcAnswer.toFixed(2);
    } else {
        $('#challenge').text(`${a} * ${b} + ${c} = ?`);
        pcAnswer = a * b + c;
    }
    console.log(pcAnswer);
}

function changeLevelColor() {
    $(".field")[level-1].style.backgroundColor = "#D99216";
}

function checkAnswer() {
    let answer = $('#user-answer').val();

    if (answer == pcAnswer) {
        $('#msg').text(`You answered correctly!`);
        $(".field")[level-1].style.backgroundColor = "white";
        $('#user-answer').val('');
        
        if (level < 9) {
            level++;
            changeLevelColor();
            saveState();
            si = setInterval(toggleField, 1000); //switches to next question by calling toggleField() after 1 second
        } else {
            $('#msg').text('');
            $('#win-box').fadeToggle();
            level = 0;
        }
    } else {
        $('#msg').text(`Wrong answer. Please try again!`);
    }
}

function restart() {
    $('#start').show();
    $('#win-box').fadeToggle();
    $('#quiz-field').fadeToggle();
}