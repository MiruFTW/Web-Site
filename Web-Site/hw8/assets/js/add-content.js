// JavaScript Document
var today = new Date();
var hourNow = today.getHours();
var greeting;
var eltag = document.getElementById("greeting");

switch (true)
{
	case hourNow > 18:
		greeting = "Good evening!";
		break;
	case hourNow > 12:
		greeting = "Good afternoon!";
		break;
	case hourNow > 0:
		greeting = "Good morning!";
		break;
	default:
		greeting = "Welcome!";
}
	
eltag.innerHTML = "<h3>" + greeting + "</h3>";
