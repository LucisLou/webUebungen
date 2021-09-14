headln = document.getElementById("headline");
text = document.getElementById("content");

function domTree() {
    document.body.firstElementChild.nextElementSibling.firstElementChild.textContent = prompt("Give this page a headline!");
    document.body.firstElementChild.nextElementSibling.firstElementChild.nextElementSibling.textContent = prompt("Add some text to the page, too!");
    //first goes: body > header (first element after body) > article (second Element after body, sibling to header) > h1 (first element after article)
    //second goes: body > header > article > h1 > p
}

function getElement() {
    headln.textContent = prompt("Give this page a headline!");
    text.textContent = prompt("Add some text to the page, too!");
}

// ----

input = document.getElementById("inputField");

function fillInput() {
    input.value = prompt("Add some text into the input field:");
}

// ----


let emailField = document.getElementById("email");
let warningEmail = document.getElementById("warningMessageEmail");

function emailMessage() {
    if (!emailField.value.includes('@')) {
        warningEmail.textContent = "Please insert a valid address.";
    } else {
        warningEmail.textContent = "";
    }
}

emailField.onblur = emailMessage;

// ----

let inputPage = document.getElementById("inputFieldPage");
let warningPage = document.getElementById("warningMessagePage");
let fullURL;

function validURL() {
    if (!inputPage.value.includes('.')) {
        warningPage.textContent = "Please insert a valid URL."
    } else {
        warningPage.textContent = "";
    }
}

function goToPage() {
    if (!inputPage.value.includes('https://')) {
        fullURL = "https://" + inputPage.value;
        window.open(fullURL);
    } else {
        window.open(inputPage.value);
    }

}

inputPage.onblur = validURL;

// ----

let axolotlIMG = document.getElementById("axolotl");
let birbIMG = document.getElementById("birb");
let appearBTN = document.getElementById("appear-btn");

function assignImages() {
    axolotlIMG.src = "axolotl.jpg";
    birbIMG.src = "birb.png";
    appearBTN.textContent = "They have appeared!"
}

// ----

let lastParagraph = document.getElementById("last-paragraph");

let fontWeightBtn = document.getElementById("font-weight-btn");
let bold = false;

function makeBold() {

    if (!bold) {
        lastParagraph.style.fontWeight = "bolder";
        bold = true;
        fontWeightBtn.textContent = "Make the text thin!"
    } else {
        lastParagraph.style.fontWeight = "initial";
        bold = false;
        fontWeightBtn.textContent = "Make the text bold!"
    }
    
}

let left = false;
let right = false;

let textAlignButton = document.getElementById("text-align-btn");

function putToTheLeft() {

    if (!left && !right) {
        lastParagraph.style.textAlign = "left";
        left = true;
        textAlignButton.textContent = "Now put it to the right!"
    } else if (!right && left) {
        lastParagraph.style.textAlign = "right";
        right = true;
        textAlignButton.textContent = "Now put it to the center!"
    } else if (left && right) {
        lastParagraph.style.textAlign = "center";
        left = false;
        right = false;
        textAlignButton.textContent = "Now put it to the left!"
    }
    
}

let colorButton = document.getElementById("color-button");
let buttonPressed = false;
let choice = 0;

function changeColor() {
    let colors = ["red", "blue", "orange", "green"];

    if (choice != colors.length) {
        lastParagraph.style.color = colors[choice];
        choice++;
    } else {
        choice = 0;
        lastParagraph.style.color = colors[choice];
        choice++;
    }

    if (!buttonPressed) {
        changeBtnText();
    }
    
}

function changeBtnText() {
    colorButton.textContent = "One more time!";
    bunPressed = true;
}