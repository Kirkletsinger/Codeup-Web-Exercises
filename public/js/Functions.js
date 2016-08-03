
var myNameIs = 'Kirk'; // TODO: Fill in your name here.

// TODO:
// Create a function called 'sayHello' that takes a parameter 'name'.
// When called, the function should log a message that says hello from the passed in name.

function sayHello(name){
	return "hello," + name;
}

//function sayHEllo(name){
//	var result = 'hello' +name;
//	return result;
//}

//function sayHello(name){
//	console.log "hello," + name;
//}

// TODO: Call the function 'sayHello' passing the variable 'myNameIs' as a parameter.
console.log (sayHello(myNameIs));



// Don't modify the following line
// It generates a random number between 1 and 100 and stores it in random
var random = Math.floor((Math.random()*100)+1);

// TODO:
// Create a function called 'isOdd' that takes a number as a parameter.
// The function should use the ternary operator to log a message.
// The log should tell the number passed in and whether it is odd or not.

function isOdd(odds){
	var result = (odds % 2!== 0) ? 'is not an ood number' : 'this is an even number';
	console.log(result);
}

//function isOdd (number){
//	var message = number + 'is';
//	message += (number %2 === 1) ? 'odd' : 'even';
//	message += ".";
//	return message:
//}




// TODO: Call the function 'isOdd' passing the variable 'random' as a parameter.
isOdd(random)



//----------------------------------------//


//take something and remove the spaces
// input => 'hello lassen'
// output => 'hellotherelassen'

//takes a needle and a haystack
//returns true if the needle is in the haystack, otherwise false


function stringContains (haystack, needle){
	var index = haystack.indexOf(needle);
	if (index === -1){
		return false;
	} else {
		return true;
	}

}


stringContains('hello codeup' , 'codeup'); // => ture
stringContains('hellocodeup , alkdsbf'); //=> false



//take a string as input
//return true if there is a '  ' in the string' otherwise false
function hasASpace (stingTocheck) {
	var stringHasASpace = stringContains(stringToCheck, ' ');
	return stringHasASpace;
}






//While string has spaces

function removeSpaces (phrase) {
	while (hasASpace(phrase , ' ')) {
		phrase = phrase.replace(' ','  ')
}
	
	return phrase;
}

var result = removeSpaces('hello there lassen');
console.log(result);
// console.log(result);





///what is Functions?
//sequence of steps - gives direction also know as algorithm
//reusable code
//repeatable  code
//takes input, puts output

///what do functions do?
// do verbs, hands us nouns
//do a sequence of steps
//allow us to name that sequence of steps

///When do we use functions?
// when you have a related sequence of steps
//when we're going to resuse somthing
// when naming a chunck of cod helps us understand what that code does

/// Why do we us functions?
// reseon about the business logic
//we're able to code as close to natural languages as possible

///what does a retun do?
// return gives us value as output
//stops the function

///returns vs. console.log
//
  

//// in javascript if you dont have a return and return a value it will return undefined










