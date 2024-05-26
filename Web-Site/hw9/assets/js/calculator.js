// JavaScript Document
var num1 = document.getElementById('num1');
var answer;
var num2 = document.getElementById('num2');
var calcFunc = document.getElementById('calcFunc');
var results = document.getElementById('results');
var calcExec = document.getElementById('calcExec');

calcExec.addEventListener("click", function() {
	if (calcFunc.value == "multiply")
		{
			answer = parseInt(num1.value)*parseInt(num2.value);
			results.innerHTML = '<h3>Result is: ' + answer + '</h3>';
		}
	else if (calcFunc.value == "add")
		{
			answer = parseInt(num1.value)+parseInt(num2.value);
			results.innerHTML = '<h3>Result is: ' + answer + '</h3>';
		}
	else if (calcFunc.value == "subtract")
		{
			answer = parseInt(num1.value)-parseInt(num2.value);
			results.innerHTML = '<h3>Result is: ' + answer + '</h3>';
		}
	else
		{
			answer = parseInt(num1.value)/parseInt(num2.value);
			results.innerHTML = '<h3>Result is: ' + answer + '</h3>';
		}
});
