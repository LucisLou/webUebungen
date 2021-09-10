let greeting = document.getElementById("greeting")
let personalizedGreeting = document.getElementById("persGreeting")
let buttonText = document.getElementById("buttonText")

function greet() {
    buttonText.textContent = "Yo!"
}

function greetingPersonalized() {
    let name = prompt("Please tell me your name.")

    if (name.length != 0) {
        personalizedGreeting.textContent = "Hello, " + name + "!"
    } else {
        personalizedGreeting.textContent = "Hello!"
    }
}

function threeVariables() {
    let zahl = 5
    let string = "This is a string."
    let boolean = true

    alert("Variable 1 is: " + typeof zahl + ", and contains: " + zahl)

    alert("Variable 2 is: " + typeof string + ", and contains: " + string)
    
    alert("Variable 3 is: " + typeof boolean + ", and is: " + boolean)
}

function login() {
    let user = ["Lou", "passme"]

    let inputUser = [" ", " "]

    inputUser[0] = prompt("Please enter your username")
    inputUser[1] = prompt("Please enter your password")

    if (user[0] == inputUser[0] && user[1] == inputUser[1]) {
        alert("Login successful.")
    } else {
        alert("Username and/or password is incorrect. Try again.")
        login()
    }
}

function game() {
    let points = 0

    let answers = [2,12,6,2,9]
    let userAnswers = [0, 0, 0, 0, 0]

    alert("Yay! Let's calculate some stuff!")

    for (let i = 0; i < 5; i++) {

        if (i == 0) {
            userAnswers[i] = prompt("1 + 1 is:")

            if (userAnswers[i] == answers[i]) {
                points++
            }
        } else if (i == 1) {
            userAnswers[i] = prompt("14 - 2 is:")

            if (userAnswers[i] == answers[i]) {
                points++
            }
        } else if (i == 2) {
            userAnswers[i] = prompt("12 / 2 is:")

            if (userAnswers[i] == answers[i]) {
                points++
            }
        } else if (i == 3) {
            userAnswers[i] = prompt("4 / 4 + 2 is:")

            if (userAnswers[i] == answers[i]) {
                points++
            }
        } else if (i == 4) {
            userAnswers[i] = prompt("4 * 3 - 3 is:")

            if (userAnswers[i] == answers[i]) {
                points++
            }
        }
    }

    if (points == 5) {
        alert("DING DING! FULL POINTS!!")
    } else if (points < 5 && points > 2) {
        alert("You scored " + points + " points! Not bad!")
    } else if (points == 2) {
        alert("You got two correct!")
    } else if (points <= 1) {
        alert("Maybe try again. But it's ok! You learn from failures :)")
    }

}

let messageAboutMe = document.getElementById("aboutMeMessage")
let aboutMeMessage = document.getElementById("aboutMe")

function aboutYou() {
    let aboutMeFull = [" ", " ", " "]

    for (let i = 0; i < 3; i++) {
        if (i == 0) {
            aboutMeFull[i] = prompt("What's your first name?")
        }
        if (i == 1) {
            aboutMeFull[i] = prompt("What's your last name?")
        }
        if (i == 2) {
            aboutMeFull[i] = prompt("How old are you?")
        }
    }

    messageAboutMe.textContent = "Cool! I know some stuff about you now!"

    aboutMeMessage.textContent = "Your name is " + aboutMeFull[0] + " " + aboutMeFull[1] + " and you're " + aboutMeFull[2] + " years old. Neato!"


}

let persons = [
    [" ", " ", " "],
    [" ", " ", " "],
    [" ", " ", " "]
]

let resultPersonData = document.getElementById("afterPersonData")
let readPersonButtonE = document.getElementById("readPersonButton")

function personData() {

    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            persons[i][j] = prompt("Please insert the data of person #" + (i+1) + " (First Name, Last Name, Age)")
        }
    }

    resultPersonData.textContent = "Cool! Now you can press the button below to read a person's data!"
    readPersonButtonE.style.display = "block"
}

function readPerson() {
    let userInput1 = prompt("Select the # of the person you want to read the data of: (1, 2, or 3)")
    let userInput2 = prompt("Select the # of the data you want to read of the person. (1 for first name, 2 for last name, 3 for age)")

    alert("You selected Person #" + userInput1 + " and the data you selected is: " + persons[(userInput1-1)][(userInput2-1)])
}

let buttonMorePressed = document.getElementById("notdone")

function moreArrayStuff() {
    let anotherArray = new Array(5)

    for (let i = 0; i < anotherArray.length; i++) {
        anotherArray[i] = prompt("Insert anything you want here (5 times)")
    }

    alert(anotherArray)

    buttonMorePressed.textContent = "You knew the drill"
}

let buttonMorePressed2 = document.getElementById("notdone2")

function moreArrayStuffWhile() {
    let anotherArray2 = new Array(5)
    let i = 0

    while (i < anotherArray2.length) {
        anotherArray2[i] = prompt("Insert anything you want here (5 times)")
        i++
    }

    alert(anotherArray2)

    buttonMorePressed2.textContent = "You knew the drill, again"
}

let reallyNotDonePressed = document.getElementById("reallynotdone")

function giveBackDouble() {
    let yourInput = prompt("Give me a number")

    alert("I multiplied it by two! " + (yourInput*2))

    reallyNotdonePressed.textContent = "Neato"
}

function giveBackDouble2(number) {
    number = number * 2
    return
}

function readUserNumber() {
    let userNumber = 0

    alert(giveBackDouble(userNumber))
}

function multiplyArray() {
    let funArray = [6, 45, 12, 44, 7]

    alert("Check the console!")

    console.log("Here's an array: " + funArray)

    for (let i = 0; i < funArray.length; i++) {
        funArray[i] = funArray[i] * 2
    }
    console.log("Here's the same array with all its values multiplied by 2: " + funArray)
    console.log("Nifty! First JavaScript exercises done! Celebrate a little! 😃🎉")
}