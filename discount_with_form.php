<?php
     // Get the item price from the form
     
     $item_price = $_POST["item_price"];
     
     // Calculate the discounted cost
     
     if ($item_price <= 10.00)
        {
     	   $discount_percent = 10;
        }
     else
       {
     	   $discount_percent = 20;
        }
     
     $list_price = number_format($item_price, 2);
     
     $discount = $list_price * $discount_percent * 0.01;
     
     $discounted_cost = $list_price - $discount;
          
     $list_price_formatted = "$".$list_price;
     $discount_percent_formatted = $discount_percent."%";
     $discount_formatted = "$".number_format($discount,2);
     $discounted_cost_formatted = "$".number_format($discounted_cost,2);
     
?>

<!DOCTYPE html>
<html>

<head>
    <title>Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/hwwk6.css" />
</head>
<body>
  <section id="container">
    <div id="content">
        <h1>Here is your discount information</h1>

        <label>Item Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br />

        <label>Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br />

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br />

        <label>Discounted Cost:</label>
        <span><?php echo $discounted_cost_formatted; ?></span><br />

        <p>&nbsp;</p>
    </div>
  </section>
</body>

</html>
