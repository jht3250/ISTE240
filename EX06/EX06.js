/*
John Treon
02/17/2025
ISTE240 Exercise 6 – JavaScript Part 2
*/

// finds the element with ID = text, changes its font color to blue, and changes its font size to 20px.
function jsStyle() {
    var element = document.getElementById('text');
    element.style.color = 'blue';
    element.style.fontSize = '20px';
}

function moveText() {
    // moves the text to the right by 10px
    var element = document.getElementById('text');
    var currentPos = parseInt(element.style.marginLeft) || 0;
    element.style.marginLeft = currentPos + 10 + "px";
}

// finds the value of the inputted first name and last name from fname and lname respectively, outputs them as a concatinated string.
function getFormValues() {
    var first = document.getElementById('fname').value;
    var last = document.getElementById('lname').value;
    alert(first + ' ' + last);
}

function howMany() {
    // finds all elements with the tag option, outputs the length of the array (the number of elements)
    var children = document.getElementsByTagName('input');
    var count = 0;
    var count2 = 0;
    for (var i = 0; i < children.length; i++) {
        if (children[i].parentElement.id == 'regForm') {
            count++;
            if (children[i].type == 'text') {
                count2++;
            }
        }
    }
    console.log("There are " + count + " input elements in the form.");
    console.log("There are " + count2 + " text input elements in the form.");
}

// finds all elements with the tag option, outputs the length of the array (the number of elements)
function getOptions() {
	var count = document.getElementsByTagName('option');
	alert(count.length);
}

// finds the div parent element of the input element and changes its background color to the selected color
function colorChanger() {
    var color = document.getElementById('mySelect').value;
    var element = recursiveParent(document.getElementById('colors'));
    element.style.backgroundColor = color;
}

// recursively finds the div parent element of the input element
function recursiveParent(element) {
    if (element.parentElement.tagName == 'DIV') {
        return element.parentElement;
    }
    else {
        return recursiveParent(element.parentElement);
    }
}

// sets the color of id = 'rb' to the color selected in 6c
function textRed() {
    document.getElementById('rb').style.color = document.getElementById('mySelect').value;
}

// sets the color of id = 'rb' to black
function textBlack() {
    document.getElementById('rb').style.color = 'black';
}

// takes the values of the first operand and the second operand, parses them as an int, and performs multiplication
function multiply() {
    var first = parseInt(document.getElementById('firstoperand').value);
    var second = parseInt(document.getElementById('secondoperand').value);
    const quotient = document.createTextNode(first * second);
    var resultElement = document.getElementById('result');
    if (resultElement.hasChildNodes()) {
        resultElement.replaceChild(quotient, resultElement.childNodes[0]);
    } else {
        resultElement.appendChild(quotient);
    }
}

// takes the values of the first operand and the second operand, parses them as an int, and performs division
function divide() {
    var first = parseInt(document.getElementById('firstoperand').value);
    var second = parseInt(document.getElementById('secondoperand').value);
    const dividend = document.createTextNode(first / second);
    var resultElement = document.getElementById('result');
    if (resultElement.hasChildNodes()) {
        resultElement.replaceChild(dividend, resultElement.childNodes[0]);
    } else {
        resultElement.appendChild(dividend);
    }
}
