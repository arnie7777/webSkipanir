/*
Function which sums two numbers (a + b) from the user input and shows the result
 */
function addition() {
    // Assigning two variables to the elements in the HTML file to retrieve the user input
    var additionField1 = document.getElementById("additionField1");
    var additionField2 = document.getElementById("additionField2");
    var result = parseInt(additionField1.value) + parseInt(additionField2.value);
    // Outputting the result on HTML page, to the location at the id "pTagId"
    document.getElementById("pTagId").innerHTML = "The result is: " + result;
    // Setting the value in the input boxes to be empty/cleared after the result is showed
    additionField1.value = "";
    additionField2.value = "";
} // End of function addition

/*
Function which waits until the "Addition" button/row is pressed/clicked -
and when pressed the function addition() is called.
 */
function startAdd() {
    var additionButton = document.getElementById("additionButton");
    additionButton.addEventListener("click", addition);
} // End of function startAdd

/*
Function which subtracts two numbers (a - b) from the user and shows the result.
 */
function subtraction() {
    // Assigning two variables to the elements in the HTML file to retrieve the user input
    var subtractionField1 = document.getElementById("subtractionField1");
    var subtractionField2 = document.getElementById("subtractionField2");
    var result = parseInt(subtractionField1.value) - parseInt(subtractionField2.value);
    // Outputting the result on HTML page, to the location at the id "pTagId"
    document.getElementById("pTagId").innerHTML = "The result is: " + result;
    // Setting the value in the input boxes to be empty/cleared after the result is showed
    subtractionField1.value = "";
    subtractionField2.value = "";
} // End of function subtraction

/*
Function which waits until the "Subtraction" button/row is pressed/clicked -
and when pressed the function subtraction() is called.
 */
function startSub() {
    var subtractionButton = document.getElementById("subtractionButton");
    subtractionButton.addEventListener("click", subtraction);
} // End of function startSub

/*
Function which takes an input from the user and calculates the factorial of the input (a!) -
and shows the result.
 */
function factorial() {
    // Assigning two variables to the elements in the HTML file
    var factorialField = document.getElementById("factorialField");
    var factorial = 1; // variable that end up being the result which is displayed for the user
    if (parseInt(factorialField.value) < 0) { // if user input is a negative number
        document.getElementById("pTagId").innerHTML = "Please enter an integer, which is not a negative number!"
    } // end if
    else {
        // for loop that loops as often as the number the user has inserted into the input field
        for (var i = 1; i <= factorialField.value; i++) {
            factorial *= i
        } // end for loop
        document.getElementById("pTagId").innerHTML = "The factorial of " + factorialField.value + " is " + factorial;
        factorialField.value = "";
    } // end else
} // end function factorial

/*
Function which waits until the "Factorial" button/row is pressed/clicked -
and when pressed the function addition() is called.
 */
function startFac() {
    var factorialButton = document.getElementById("factorialButton");
    factorialButton.addEventListener("click", factorial);
} // End of function startFac

$(document).ready(function (){

    /*
    add css class to factorial button and input field, when user clicks on minimize button
     */
    $("#minimizeBtn").click(function (){
        $("#factorialButton").addClass("minimizeButtons")
        $("#factorialField").addClass("minimizeInputField")
    })

    /*
    Remove css class from factorial button and input field when user clicks on button
     */
    $("#normalBtn").click(function (){
        $("#factorialButton").removeClass("minimizeButtons")
        $("#factorialField").removeClass("minimizeInputField")
    })

}) // end main jquery function