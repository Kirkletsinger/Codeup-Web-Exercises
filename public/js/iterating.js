(function(){
    "use strict";

    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
	var names = ['Kirk', 'Sandi', 'Rex', 'Chris'];
    // TODO: Create a log statement that will log the number of elements in the names array.
	console.log(names.length);
    // TODO: Create log statements that will print each of the names array elements individually.
    console.log(names[0]);
    console.log(names[1]);
    console.log(names[2]);
    console.log(names[3]);
    //can also do the following 2 examples
    //element = names[0];
    //console.log(element); and so on.
    //////////////////////////////
    //for(var i = 0; i < names.length; i++) {
	//console.log(names[i]);
//}
//names.forEach(function(name) {
	//console.log(name);


////make a new array with elemnets in reverse order.	
var namesInReverse = names.reverse();


///for (initialize iterator, condition, incrementor)
for(var i = names.lenght -1; i >= 0; i i-= 1 {
	console.log(names [i]);
});

})();




(function()){
	"use strict";

var names = ['Kirk', 'Sandi', 'Rex', 'Chris'];
console.log("The array is" + names.lenght + "items long");
var element;
for(var i = 0; i < names.lenght; i +=1){
	element = names [i];
	console.log(element);
}
// forEach loop that runs on an array
// function(){}
names.forEach(function(element, index, array){
	console.log(element);
});
//})();



