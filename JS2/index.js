// Task 1 - jQuery selector

$('p').text($('h1')[0].innerHTML);
$('p')[3].innerHTML = "";

let input = "";

function changeTwo() {
    input = prompt("Enter whatever. You can even insert HTML tags!");
    $('p')[1].innerHTML = input;
}


// Task 2 - jQuery css- and DOM-manipulation

$('#colored-div').css({"background-color": "darkcyan", "color": "white", "display": "flex", "justify-content": "center", "align-items": "center", "text-align": "center", "height": "200px"});

$('#colored-div')[0].innerHTML = "This is a div that has been colored with jQuery. Also this text is inserted with it!<br>How about you try to do things with it?";

function react1() {
    $('p')[3].innerHTML = "You mouse'd out of here!";
}

function react2() {
    $('p')[3].innerHTML = "You double-clicked!";
}

function react3() {
    $('p')[3].innerHTML = "You right-clicked!";
}

$('#colored-div').on({mouseout: react1, dblclick: react2, contextmenu: react3});

// Task 3 - jQuery toggle

$('#colored-div-22').hide();

function toggleDiv() {
    $('#colored-div-21').toggle("slow");
    $('#colored-div-22').toggle("slow");
}

//Task 4 - Cookies (with extras because I like being extra)

function saveCookie(name, color, duration) {
    let date = new Date();

    date.setTime(date.getTime() + (duration*24*60*60*1000)); //duration*24*60*60*1000 sets duration into milliseconds

    let expiryDate = "expires=" + date.toGMTString();

    document.cookie = `userName=${name};${expiryDate}`;
    document.cookie = `favColor=${color};${expiryDate}`;
    $('#cookie-ask').hide();
}

function getCookieUser(cookieName) {
    cookieName += "=";
    let decCookie = decodeURIComponent(document.cookie);
    let deCookieArr = decCookie.split(";");
    
    for (let i = 0; i < deCookieArr.length; i++) {
        let content = deCookieArr[i];

        while (content.charAt(0) === ' ') {
            content = content.substring(1);
        }
        if (content.indexOf(cookieName) === 0) {
            return content.substring(cookieName.length);
        }
    }

    return "";
}

function getCookieColor(cookieColor) {
    cookieColor += "=";
    let decCookie = decodeURIComponent(document.cookie);
    let deCookieArr = decCookie.split(";");
    
    for (let i = 0; i < deCookieArr.length; i++) {
        let content = deCookieArr[i];

        while (content.charAt(0) === ' ') {
            content = content.substring(1);
        }
        if (content.indexOf(cookieColor) === 0) {
            return content.substring(cookieColor.length);
        }
    }

    return "";
}

function checkCookieUserAndColor() {
    let user = getCookieUser("userName");
    let color = getCookieColor("favColor");
    if(user != "" && color != "") {
        $('#cookie-ask').hide();
        $('#greet-user').text(`Hello, ${user}!`);
        $('#their-fav-color').text(`Your favorite color is ${color}, right?`);
    } else {
        $('#cookie-ask').show();
    }
  }

  // Task 5 - local Storage

  function saveStorage(age, animal) {
      age = age + "";
      animal = animal + "";
      localStorage.setItem("userAge", age);
      localStorage.setItem("favAnimal", animal);
      $('#local-storage-div').hide();
      checkLocalStorage();
  }

  function checkLocalStorage() {
      let message = "";
      let age = "";
      let animal = "";

      if (localStorage.getItem("userAge") && localStorage.getItem("favAnimal")) {
        age = localStorage.getItem("userAge");
        animal = localStorage.getItem("favAnimal");
        message = `I got some info on you! <br> You're ${age} years old!<br> Your favorite animal is ${animal}!`;
        $('#local-storage-div').hide();
      } else {
        $('#local-storage-div').show();
      }

      $('#user-info')[0].innerHTML = message;
  }