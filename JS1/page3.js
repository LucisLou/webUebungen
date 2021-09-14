let button31 = document.getElementById("button3-1");
let button32 = document.getElementById("button3-2");
let button33 = document.getElementById("button3-3");

let num1 = Math.floor(Math.random() * (100 - 1) + 1);
let num2 = Math.floor(Math.random() * (100 - 1) + 1);
let sum = num1 + num2;


function math1() {
    let userAnswer = prompt("Math time! What's "+ num1 + " + " + num2 + " ?");

    while (userAnswer != sum) {
        userAnswer = prompt("Wrong! What's "+ num1 + " + " + num2 + " ?");
    }

    window.open("page32.html");

}

function math2() {
    let userAnswer = prompt("Math time! What's "+ num1 + " + " + num2 + " ?");

    while (userAnswer != sum) {
        userAnswer = prompt("Wrong! What's "+ num1 + " + " + num2 + " ?");
    }

    window.open("page33.html");
    window.close();

}

function math3() {
    let userAnswer = prompt("Math time! What's "+ num1 + " + " + num2 + " ?");

    while (userAnswer != sum) {
        userAnswer = prompt("Wrong! What's "+ num1 + " + " + num2 + " ?");
    }

    alert("Wowieee! You did it!");
    window.close();

}

button31.onclick = math1;
button32.onclick = math2;
button33.onclick = math3;

// --- Last exercise of the day

let si; //setInterval
let clearSI;
let sec = 1;
let count = document.getElementById("counter");
let stopped = document.getElementById("stopper");

function message() {
    count.textContent = "The button was last pressed " + sec + " second(s) ago";
    sec++;
}
function start() {
    si = setInterval(message, 1000);
}

function stop() {
    clearSI = setInterval(clearSIAfter60, 60000);
}

function clearSIAfter60() {
    clearInterval(si); //clear interval of si
    stopped.textContent = "The timer was stopped 60 seconds after the Stop button was pressed."
}