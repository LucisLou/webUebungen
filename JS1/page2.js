let el1 = document.getElementById("el-1")
let el2 = document.getElementById("el-2")
let el3 = document.getElementById("el-3")
let el4 = document.getElementById("el-4")

function changeText() {
    el1.textContent = "The paragraph's text has been changed!"
}

function worry() {
    el2.style.color = "grey"
}

function noWorry() {
    el2.style.color = "black"
}

function shrink() {
    el3.style.fontSize = "smaller"
    el3.textContent = "Oh no! It has been shrunk..."
}

function shrink2() {
    el4.style.fontSize = "smaller"
}

function revert() {
    el4.style.fontSize = "initial"
}