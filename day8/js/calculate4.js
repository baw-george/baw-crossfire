// create helper function
var $ = function (id)
{
   return document.getElementById(id);	
}


function calculate()
{
   //get input from user
   var listPrice = $('list_price').valueAsNumber;
   var customerType = $('type').value;
   
  ===> call the discPerCalc function here
   
   // call calculate...
   
   //calculate discount amount and discount price
   var discount = listPrice * discountPercent * 0.01; 	
   var discountPrice = listPrice - discount;
      
   // set output in currency format (sort of)
   $('discount_percent').valueAsNumber = discountPercent;
   
   discount = '$' + discount.toFixed(2);
   $('discount').value = discount;
   
   discountPrice = '$'+ discountPrice.toFixed(2);
   $('discount_price').value = discountPrice;
}

// calculate discount percent function

function  discPercCalc (listPrice,customerType)
{
	if (customerType == "R")
	   {
		   if (listPrice < 100) discountPercent = 0;
		   else if (listPrice >= 100 && listPrice < 250) discountPercent = 10;
		         else if (listPrice >= 250) discountPercent = 25; 
	   }	   
	   else if (customerType == "C")
	   {
		   if (listPrice < 250) discountPercent = 20;
		   else discountPercent = 30;
	   }	   
	   discountPercent = parseFloat(discountPercent);
	   return discountPercent;
}

// calculate discount amount function

function discAmountCalc (listPrice, discountPercent)
{
   var discAmount = listPrice * discountPercent * 0.01;
   return discAmount;
}

// calculate discount price function

function discPriceCalc (listPrice, discount)
{
   	var discPrice = listPrice - discount;
   	return discPrice;
}
