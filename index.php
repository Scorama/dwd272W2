<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $quantity = 30; //Buying 30 widgets.
        $price = 119.95;
        $taxrate = .05; //5% sales tax
        //Calculate the total.
        $total = $quantity * $price;
        $total = $total + ($total * $taxrate);
        //Format the total:
        $total = number_format($total, 2);
        //Print the results using double quotation marks: 
        echo "<h3>Using double quotation marks:";
        echo "<p>You are purchasing <b>$quantity</b> widget(s)at a cost"
                . "of <b>\$$price</b> each. With tax, the total comes to"
                . "<b>/$$total</>.</p>\n";
        //Print the results using single quotation marks:
        echo '<h3>Using single quotation marks:</h3>';
        echo '<p>You are purchasing <b>$quantity</b> widget(s) at a cost of'
        . '<b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n';
        ?>
        
        
    </body>
</html>
