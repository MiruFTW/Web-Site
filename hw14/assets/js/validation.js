// JavaScript Document
function validateName(name, Id)
{
	var validRegex = /^[a-z ,.'-]+$/i;
	var elNameStatus = document.getElementById(Id);
	elNameStatus.classList.add("alert");
	
	if (name.value.match(validRegex))
		{
			elNameStatus.classList.remove("alert-danger");
			elNameStatus.classList.add("alert-success");
			document.getElementById(Id).innerHTML = "Name is valid!"
		}
	else
		{
			name.focus();
			elNameStatus.classList.remove("alert-success");
			elNameStatus.classList.add("alert-danger");
			document.getElementById(Id).innerHTML = "Name is NOT valid!";
		}
}

function validateEmail(email)
{
	var validRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var elEmailStatus = document.getElementById('emailStatus');
	elEmailStatus.classList.add("alert");
	
	if (email.value.match(validRegex))
		{
			elEmailStatus.classList.remove("alert-danger");
			elEmailStatus.classList.add("alert-success");
			document.getElementById("emailStatus").innerHTML = "Email is valid!"
		}
	else
		{
			email.focus();
			elEmailStatus.classList.remove("alert-success");
			elEmailStatus.classList.add("alert-danger");
			document.getElementById("emailStatus").innerHTML = "Email is NOT valid!";
		}
}

function validateNumber(number)
{
	var validRegex = /^\d{10}$/;
	var elNumberStatus = document.getElementById('phoneNumberStatus');
	elNumberStatus.classList.add("alert");
	
	if (number.value.match(validRegex))
		{
			elNumberStatus.classList.remove("alert-danger");
			elNumberStatus.classList.add("alert-success");
			document.getElementById("phoneNumberStatus").innerHTML = "Phone Number is valid!"
		}
	else
		{
			number.focus();
			elNumberStatus.classList.remove("alert-success");
			elNumberStatus.classList.add("alert-danger");
			document.getElementById("phoneNumberStatus").innerHTML = "Phone Number is NOT valid!";
		}
}

function validateComment(comment)
{
	var validRegex = /.{1,}/;
	var elCommentStatus = document.getElementById('commentStatus');
	elCommentStatus.classList.add("alert");
	
	if (comment.value.match(validRegex))
		{
			elCommentStatus.classList.remove("alert-danger");
			elCommentStatus.classList.add("alert-success");
			document.getElementById("commentStatus").innerHTML = "Comment is valid!"
		}
	else
		{
			comment.focus();
			elCommentStatus.classList.remove("alert-success");
			elCommentStatus.classList.add("alert-danger");
			document.getElementById("commentStatus").innerHTML = "Comment is NOT valid!";
		}
}

var elFirstName = document.getElementById('firstName');
elFirstName.addEventListener('blur', function() {validateName(elFirstName, 'firstNameStatus');}, false);

var elLastName = document.getElementById('lastName');
elLastName.addEventListener('blur', function() {validateName(elLastName, 'lastNameStatus');}, false);

var elEmail = document.getElementById('email');
elEmail.addEventListener('blur', function() {validateEmail(elEmail);}, false);

var elNumber = document.getElementById('phoneNumber');
elNumber.addEventListener('blur', function() {validateNumber(elNumber);}, false);

var elComment = document.getElementById('comment');
elComment.addEventListener('blur', function() {validateComment(elComment);}, false);
