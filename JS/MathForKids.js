var result = 0; // Global variable
var question = "" // Global variable
var correct = 0; // Global variable
var incorrect = 0; // Global variable
var theArray = new Array(); // Global array

/*
Function that generates two random numbers between 0 to 9 and outputs a string,
asking user what the addition of the numbers is and calls the start() function.
 */
function addition() {
    // Appends an empty string to HTML tag with id="guess"
    document.getElementById("guess").innerHTML = "";
    // Generates a random number between 0 to 9 and assigns to variable
    var a1 = Math.floor(Math.random() * 10);
    var a2 = Math.floor(Math.random() * 10);
    // Appends a string to HTML tag with id="question" and assigns to variable
    question = document.getElementById("question").innerHTML = "What is " + a1 + " + " + a2 + " ?"
    result = a1 + a2; // Assigns the sum to variable
    start(); // Calls function
} // Function end

/*
Function that generates two random numbers between 0 to 9 and outputs a string,
asking user what the subtraction of the numbers is and calls the start() function.
 */
function subtraction() {
    // Appends an empty string to HTML tag with id="guess"
    document.getElementById("guess").innerHTML = "";
    // Generates a random number between 0 to 9 and assigns to variable
    var a1 = Math.floor(Math.random() * 10);
    var a2 = Math.floor(Math.random() * 10);

    if (a1 < a2) {
        const temp = a1;
        a1 = a2;
        a2 = temp;
    }
    // Appends a string to HTML tag with id="question" and assigns to variable
    question = document.getElementById("question").innerHTML = "What is " + a1 + " - " + a2 + " ?"
    result = a1 - a2; // Assigns the sum to variable
    start(); // Calls function
} // Function end

/*
Function that generates two random numbers between 0 to 9 and outputs a string,
asking user what the multiplication of the numbers is and calls the start() function.
 */
function multiplication() {
    // Appends an empty string to HTML tag with id="guess"
    document.getElementById("guess").innerHTML = "";
    // Generates a random number between 0 to 9 and assigns to variable
    var a1 = Math.floor(Math.random() * 10);
    var a2 = Math.floor(Math.random() * 10);
    if (a2 > a1) {
        let temp = a1;
        a1 = a2;
        a2 = temp;
    }
    // Appends a string to HTML tag with id="question" and assigns to variable
    question = document.getElementById("question").innerHTML = "What is " + a1 + " x " + a2 + " ?"
    result = a1 * a2; // Assigns the sum to variable
    start(); // Calls function
} // Function end

/*
Function that generates two random numbers between 0 to 9 and outputs a string,
asking user what the multiplication of the numbers is and calls the start() function.
 */
function division() {
    // Appends an empty string to HTML tag with id="guess"
    document.getElementById("guess").innerHTML = "";
    // Generates a random number between 0 to 9 and assigns to variable
    var a1 = Math.floor(Math.random() * 10);
    var a2 = Math.floor(Math.random() * 10);

    if (a1 > a2) {
        if (a2 == 0) {
            a2 = 1;
        }
        // Appends a string to HTML tag with id="question" and assigns to variable
        question = document.getElementById("question").innerHTML = "What is " + a1 * a2 + " / " + a2 + " ?"
        result = (a1 * a2) / a2
    }
    else {
        if (a1 == 0) {
            a1 = 1;
        }
        // Appends a string to HTML tag with id="question" and assigns to variable
        question = document.getElementById("question").innerHTML = "What is " + a1 * a2 + " / " + a1 + " ?"
        result = (a1 * a2) / a1
    }
    start(); // Calls function
} // Function end

/*
Function that checks if guess from user is correct, outputs the result and
appends items to array.
 */

function guess() {
    var output = ""; // Assigns empty string to variable
    var guess = document.getElementById("inputField");
    // Checks if user guess is correct
    if (guess.value != "") {
        if (guess.value == result) {
            // Assigns string to variable
            output = "<div>Correct &#x2611;</div>";
            // Adds 3 items to the array
            theArray.push(question, guess.value, output);
            correct++;
        }
        // Executes if guess incorrect
        else {
            // Assigns string to variable
            output = "<div>Incorrect &#x2612;</div>";
            // Adds 3 items to the array
            theArray.push(question, guess.value, output);
            incorrect++;
        }
    }
    else {
        output = '<div>Please enter a number before<br>clicking on the "Check" button !</div>';
    }
    guess.value = ""; // Sets value to empty string
    // Appends a string from variable to HTML tag with id="guess"
    document.getElementById("guess").innerHTML = output;
} // Function end

/*
Function that creates a table from the items in the array and
outputs the table.
 */
function seeResults() {
    // Assigns table and table head to variable
    var results = "<table><caption>Overview of your guesses</caption>" +
        "<thead style='background: black; color: white'><th>Problem</th>" +
        "<th>Guess</th><th>Outcome</th></thead><tbody style='font-weight: bold'>";
    // Loop through the array and adds items from array to table row and
    // increments variable
    for (var i = 0; i < theArray.length; i += 3) {
        results += "<tr style='background: rgba(248, 148, 6, 1); color: black'>"
        results += "<td>" + theArray[i] + "</td>";
        results += "<td>" + theArray[i + 1] + "</td>";
        results += "<td>" + theArray[i + 2] + "</td></tr>";
    } // End of for loop
    results += "</tbody></table>";
    // Appends table from variable to HTML tag with id="results"
    document.getElementById("results").innerHTML = results;
    seeTotal();
} // Function end

/*
Function that creates a table from the items in the array and
outputs the table.
 */
function seeTotal() {
    var rate = 100;

    if (correct == 0 && incorrect == 0) {
        rate = 0;
    }

    // If incorrect, will calculate rate, else rate is unchanged.
    if (incorrect > 0) {
        rate = ((correct * 100) / (correct + incorrect)).toFixed(0);
    }
    // Assigns table to variable
    var total = "<table><caption>Total / Succes Rate %</caption>" +
        "<thead style='background: black; color: white'><th>Correct &#x2611;</th>" +
        "<th>Incorrect &#x2612;</th></thead><tbody style='font-weight: bold'>";
    // Increment variable
    total += "<tr style='background: rgba(248, 148, 6, 1); color: black'>"
    total += "<td>" + correct + "</td><td>" + incorrect + "</td></tr>";
    total += "<tr style='background: lightgray; color: black'>"
    total += "<td>Succes Rate:</td><td>" + rate + "%</td></tr>"
    total += "</tbody></table>";
    // Appends table from variable to HTML tag with id="total"
    document.getElementById("total").innerHTML = total;
} // Function end

/*
Function that adds EventListener to button, at calls guess() function
when clicked.
 */
function start() {
    var checkButton = document.getElementById("checkButton");
    checkButton.addEventListener("click", guess, false);
} // Function end

/*
Function which takes in two arguments and creates table with name, image and nerd level.
*/
function about(name, level) {
    // Assigns table to variable
    var info = "<table><thead><th>" + name + "</th></thead>" +
        "<tbody><tr><td><img src='../IMG/Nerd.png'></td></tr></tbody>" +
        "<tfoot><td>NERD LEVEL <meter min='0' max='100' value='" + level + "'></meter> " + level + "%</td></tfoot>" +
        "</table>"
    // Appends table from variable to HTML tag with id="info"
    document.getElementById("info").innerHTML += info;
} // Function end

/*
Function that calls about() function 4 times.
*/
function aboutStart() {
    about('ALEX SAMUELSEN', '89');
    about('ARI T. JOHANNESEN', '97');
    about('ARNOLD KRISTIANSEN', '95');
    about('EMIL RONALDSSON', '88');
} // Function end

$(document).ready(function (){

    $("#success").fadeOut(6000);

    $("#drawBtn").click(function () {
        var radius = $("#radiusField").val() * 20;
        var x = parseInt($("#xField").val()) * 20;
        var y = -(parseInt($("#yField").val())) * 20;
        var color = $("#colorCircle").val();
        var canvas = document.getElementById("idCanvas");
        var context = canvas.getContext("2d");
        context.beginPath();
        context.arc(x, y, radius, 0, Math.PI * 2);
        context.strokeStyle = color;
        context.stroke();
    })

    $("#lineBtn").click(function () {
        var x1 = parseInt($("#x1Field").val()) * 20;
        var x2 = parseInt($("#x2Field").val()) * 20;
        // var x3 = parseInt($("#x3Field").val()) * 20;
        // var x4 = parseInt($("#x4Field").val()) * 20;
        var y1 = -(parseInt($("#y1Field").val())) * 20;
        var y2 = -(parseInt($("#y2Field").val())) * 20;
        // var y3 = -(parseInt($("#y3Field").val())) * 20;
        // var y4 = -(parseInt($("#y4Field").val())) * 20;
        var color = $("#colorLine").val();
        var canvas = document.getElementById("idCanvas");
        var context = canvas.getContext("2d");
        context.beginPath();
        context.moveTo(x1, y1);
        context.lineTo(x2, y2);
        // context.lineTo(x3, y3);
        // context.lineTo(x4, y4);
        context.strokeStyle = color;
        context.stroke();
    })
    // $("#clearCanvas").click(function (){
    //     var canvas = document.getElementById("idCanvas");
    //     var context = canvas.getContext("2d");
    //     context.clearRect(-300, -300, canvas.width, canvas.height);
    // })

    let currentPage = $(location).attr("href");
    let href = currentPage.substring(currentPage.indexOf('HTML/') + 5)
    href = href.split('?');
    href = href[0];

    if (href == 'Home.php') {
        $("#home").addClass("start");
    }
    if (href == 'MathForKids.php' || href == 'Addition.php' || href == 'Subtraction.php' ||
        href == 'Multiplication.php' || href == 'Division.php') {
        $("#mfk").addClass("start");
    }
    if (href == 'Calculator.php' || href == 'CalcAdd.php' || href == 'CalcSub.php' ||
        href == 'CalcFac.php') {
        $("#calc").addClass("start");
    }
    if (href == 'Circle.php' || href == 'Index.php' || href == 'Read.php' ||
        href == 'Update.php' || href == 'Delete.php') {
        $("#circle").addClass("start");
    }
    if (href == 'AboutUs.php') {
        $("#about").addClass("start");
    }
    if (href == 'Login.php') {
        $("#login").addClass("start");
    }
}) // end main jquery function
