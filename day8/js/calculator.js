function calculate()
{
//get input from user

var $list_price = document.getElementById('list_price').valueAsNumber;

var $discount_percent = document.getElementById('discount_percent').valueAsNumber;


//calculate discount amount and discount price

var $discount = $list_price * $discount_percent * .01; 	
	
var $discount_price = $list_price - $discount;


// set output
	
$discount = $discount.toFixed(2);
$discount = '$'+$discount;
var tempVar;
tempVar = document.getElementById('discount');
tempVar.value = $discount;

$discount_price = '$'+$discount_price.toFixed(2);
document.getElementById('discount_price').value = $discount_price;

}	