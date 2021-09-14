let el1 = document.getElementById("el-1");
let el2 = document.getElementById("el-2");
let el3 = document.getElementById("el-3");
let el4 = document.getElementById("el-4");

function changeText() {
    el1.textContent = "The paragraph's text has been changed!";
}

function worry() {
    el2.style.color = "grey";
}

function noWorry() {
    el2.style.color = "black";
}

function shrink() {
    el3.style.fontSize = "smaller";
    el3.textContent = "Oh no! It has been shrunk...";
}

function shrink2() {
    el4.style.fontSize = "smaller";
}

function revert() {
    el4.style.fontSize = "initial";
}

let div1 = document.getElementById("div-1");
let div2 = document.getElementById("div-2");
let div3 = document.getElementById("div-3");
let div4 = document.getElementById("div-4");

let i = 0;

function doThing() {


    console.log("this worked, maybe");

    if (i === 0 ) {
        this.style.backgroundColor = 'green';
        i++;
    } else if (i === 1) {
        this.style.backgroundColor = 'yellow';
        i++;
    } else {
        event.stopPropagation();
        i = 0;
    }
    
}

div1.onclick = doThing;
div2.onclick = doThing;
div3.onclick = doThing;
div4.onclick = doThing;


let fancyTable = document.getElementById("table");

function doThingTable() {
    let t = event.target;
    t.style.backgroundColor = 'darkred'; 
    t.style.color = 'white';
}

fancyTable.onclick = doThingTable;