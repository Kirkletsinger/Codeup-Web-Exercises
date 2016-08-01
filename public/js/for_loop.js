'use strict';


// count from 10 to 1
// var i = 10;

// while (i>0) {
//     console.log(i);
//     i -=1;
// }

// same as 

// count from 10 to 1
for(var i = 10; i > 0; i -= 1){
		console.log(i);

}



// // for loop syntax
// for(/*initial statement*/;  condition; /* statement evaluated after each iteratuin*/)
// }


//// clock from 1:00 to 5:59
for (var i = 1; i <=5; i += 1){

	for (var j = 0; j <=59; j += 1){
		console.log(i + ':' + j);
	}
}

for (var i= 0; i <= 10; i += 1){
	console.log(i);
}

///-----------------




for (var i = 1; i <= 10; i++) {
	var num = "";
	for ( var j = 1; j <= i; j++) {
		if (i == 10) {
			num = num + 0;
		} else {
			num = num + i;
		}
	}
		console.log(num);
}
 








//////-------




for (var i = 99; i >= 0; i -=1){
	if (i == 0) {
		console.log(i + " Go get more")
	} else if( i==1) {
		console.log(i + " bottle of beer")
	} else { 
		console.log(i + " bottles of beer")

	}
}



///////-------------------


 var random = Math.floor((Math.random() * 10) + 1);
 	console.log("the random number is " + random)
 	

for (var i= 1; i <= 10; i += 1){
		console.log(i * random );
		console.log(i + " x " + random)

		
	}


///random numbers Even or Odd///


for (var i= 1; i <= 10; i += 1){
	var oddsEvens = Math.floor(Math.random() * (200 - 20)) + 20;
 	console.log("The random number is " + oddsEvens)
	if (oddsEvens % 2 ==0) {
		console.log("is even" )
	}else{
		console.log(" is odd" )
	}

	}
	
///////--------------------------

for(var answer= 100; answer>=5; answer-=5){
	console.log(answer)
}

		




       



