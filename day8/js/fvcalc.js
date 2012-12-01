function fvcalc()
{
   //get input from user
   var investment = document.getElementById('investment').valueAsNumber;
   var interest_rate = document.getElementById('interest_rate').valueAsNumber;
   var years = document.getElementById('years').valueAsNumber;

   // calculate the future value
   var fv = investment;
   var counter;
   
   for (counter = 1; counter <= years; counter++)
    {
       fv = (fv + (fv * interest_rate *.01));
    }

    // apply currency and percent formatting
    investment = '$' + investment;
    document.getElementById('investment').value = investment;
    
    interest_rate = interest_rate + '%';
    document.getElementById('interest_rate').value = interest_rate;
    
    fv = '$' + fv;
    document.getElementById('fv').value = fv;
}
