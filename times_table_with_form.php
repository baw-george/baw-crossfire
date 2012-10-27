<?php
     // Get the number for which the times table is to be generated
     
     $tt_number = $_POST["tt_number"];
     
     $t_num = number_format($tt_number,0);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Times Table</title>
    <link rel="stylesheet" type="text/css" href="css/hwwk6.css" />
</head>
<body>
  <section id="container">
    <div id="content">
        <h1>Here is the times table</h1>

        <span><?php 
        for ($i = 1; $i < 13; $i = $i + 1)
        {
        	echo $t_num . " x " . $i . " = " . $t_num * $i;
        	echo "<br />";
        }
        ?></span><br />

        <p>&nbsp;</p>
    </div>
  </section>
</body>

</html>
