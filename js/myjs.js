
function message2()
{
	alert("move alert it outside in an external javascript file");
	var x = 5;
	var str = '5';
	x = x + str;
	//document.write(x); needs to be in the body of the html page itself not in an external javascript file

}


function showAlert()
{
	alert("Hello I am an alert box Haha =P ! ");
}

function showconfirm() {
	var r = confirm("Press a button");

	if (r == true)
		alert("You pressed OK =D ");
	else
		alert("You pressed cancel =( ");

}

function showprompt()
{
	var r = prompt("Please enter your name ");

	if (r != null && r !="")
		alert("Hello " + r + " Good to see you =D ");
	else
		alert("why so sad =( !");
}


function validate()
{
	var fname = document.forms["nameForm"]["FName"].value;
	var lname = document.forms["nameForm"]["LName"].value;

	if (fname.length == 0 || lname =="")
	{
		alert("name must be filled out");
		return false;
	}

	var gender = document.forms["nameForm"]["gender"].value;

	alert("Welcome "+ fname + " "+ lname + ", you are a " + gender);

}

