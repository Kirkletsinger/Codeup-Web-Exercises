"use strict";

(function() {

	var myNameIs = 'kirk';
	function sayHello(name) {
		console.log("Greetings  " + myNameIs + "!");
	}
	sayHello(myNameIs);


	var random = Math.floor((Math.random()*100)+1);
	function isOdd(number) {
		((number % 2) == 1) ? console.log(number + " is odd") : console.log(number + " is even")
	}
	isOdd(random);

	
})();

