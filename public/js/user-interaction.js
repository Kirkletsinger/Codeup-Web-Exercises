"use strict";
//TODO: Ask the user for their name.
//       Keep asking if an empty input is provided

var name = "";
while (name == "") {
	name = prompt("what is your name");

}
// TODO: Show an alert message that welcomes the user based on their input.
alert('Welcome' + name + "Hell");
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.

var confirmed = confirm('do you like pizza');
if (confirmed) {
	alert('Alright!');
} else {
	alert('Sorry for yah');
}




