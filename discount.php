<!--
   Building Advanced Websites class
	
   George Alcoforado
		
   Homework - Part 1 - Day 5
-->

<?php

   $item_costs = array(7.50, 9.00, 15.00, 25.00);
     
   echo '<table>';
    
   echo '<tr> <td align="center" width="100"> Item Cost </td> <td align="center" width="100"> Discount </td> <td align="center" width="100"> Final Cost </td> </tr>'; 
   
   foreach ($item_costs as $item_cost)
   {
      if ($item_cost <= 10.00) 
      { 
         $discount = 10;
      }
      else
      { 
         $discount = 20;                  
      }
      
      $item_price = "$" . number_format($item_cost, 2);
      $discount_applied = $discount . "%";      
      $final_cost = "$" . number_format( $item_cost - ($item_cost * $discount * .01), 2 );
       
      echo '<tr> <td align="right" width="100">' . $item_price . '</td> <td align="right" width="100">' . $discount_applied . '</td> <td align="right" width="100">' . $final_cost . '</td> </tr>';     
   }
 
   print "<br />"; 
   
?>
