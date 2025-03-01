/*
John Treon
02/17/2025
ISTE240 Exercise 5 – JavaScript Part 1
*/

// finds the element with ID = text, changes its font color to blue, and changes its font size to 20px.
function jsStyle() {
    var element = document.getElementById('text');
    element.style.color = 'blue';
    element.style.fontSize = '20px';
}

// finds the value of the inputted first name and last name from fname and lname respectively, outputs them as a concatinated string.
function getFormValues() {
    var first = document.getElementById('fname').value;
    var last = document.getElementById('lname').value;
    alert(first + ' ' + last);
}

// finds all elements with the tag option, outputs the length of the array (the number of elements)
function getOptions() {
	var count = document.getElementsByTagName('option');
	alert(count.length);
}

// sets the color of id = 'rb' to red
function textRed() {
    document.getElementById('rb').style.color = 'red';
}

// sets the color of id = 'rb' to black
function textBlack() {
    document.getElementById('rb').style.color = 'black';
}

// takes the values of the first operand and the second operand, parses them as an int, and performs multiplication
function multiply() {
    var first = parseInt(document.getElementById('firstoperand').value);
    var second = parseInt(document.getElementById('secondoperand').value);
    document.getElementById('result').innerHTML = first * second;
}

// takes the values of the first operand and the second operand, parses them as an int, and performs multiplication
function divide() {
    var first = parseInt(document.getElementById('firstoperand').value);
    var second = parseInt(document.getElementById('secondoperand').value);
    document.getElementById('result').innerHTML = first / second;
}
