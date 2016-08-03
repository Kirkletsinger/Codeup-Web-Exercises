'use strick'

//defining inputs
//defining our prossess or squence of steps
//defining outputs


// Exercise 1
var average = (70 + 80 + 90) / 3;

if (averageGrade > 80) {
	console.log("You're awsome!");
} else {
	console.log("You need to pratice more!");
}

//takes in 3 grades, calculates average, checks average vs. passing grade
function gradesStudents(grade1,grade2,grade3){
	//average 3 grades
	var averageGrade = (grade1,grade2,grade3) /3;
	var message;
	if(averageGrade> 80){
		message = "You're awsome!";
	} else {
		message = "You need to pratice more!"
	}
}


console.log(gradesStudents(75, 90, 80));
console.log(gradesStudents(25, 100, 70));
console.log(gradesStudents(80, 85, 78));


// Exercise 2
// input
// prossess
// outputs
// name the fuctions after what it does or what it returns
function showCustermerSaleAndDiscontAmount(person, salesAmount, discountPercentage, discountAboveThisAmount) {
	var finalAmount;

	if(salesAmount < discountAboveThisAmount){
		finalAmount = salesAmount - (salesAmount * discountPercentage);
		return person + " purchased $" + salesAmount + " and discount was applied. "
	} else {
		finalAmount = salesAmount;
		return person + "purchased $" + salesAmount + " and a discount was not applied. "

}

var result = showCustermerSaleAndDiscontAmount("Zach", 205, 0.35, 200);
console.log(result);

console.log(showCustermerSale("fernando", 210, 0.35, 200));


// Exercise 3
//returns a random number between 0 and 1
function flipACoin() {
	var flipACoin = Math.floor(Math.random()*2);
	return flipACoin;
}

function shouldBuyHouseOrCar(){
	var flipAcoin = Math.floor(Math.random()*2);

	if (flipACoin() == 0) {
		console.log("buy a car");
	} else {
		console.log("Buy that house!");
	}
}




////////////////




