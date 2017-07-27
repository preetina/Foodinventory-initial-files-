<?php include("../public/index.php");?>

<html>
<head>
<link href="../public/stylesheets/basic1.css" media="all" rel="stylesheet" type="text/css"/>
  <style type="text/css">
        body {      
            font-family: Verdana;
        }
         
        div.invoice {
        border:1px solid #ccc;
        padding:10px;
        height:740pt;
        width:570pt;
        }
 
        div.company-address {
            border:1px solid #ccc;
            float:left;
            width:200pt;
        }
         
        div.invoice-details {
            border:1px solid #ccc;
            float:right;
            width:200pt;
        }
        
         
        </style>
    </head>
   
         
</head>

<div id="main" style="font-family:calibri;">

    <div id="navigation">
    <br />
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="login.php" ><b>Admin Panel</b></a></p>
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="kitchenlogin.php"><b>Kitchen Panel</b></a></p>
      <p style="font-size: 17px; font-family:Minion Pro Med;"><a href="billing.php"><b>Customer Billing</b></p></a>
     

    <h1></h1>
    
    </div>
    <div class="invoice">
        <div class="company-address">
            ACME ltd
            <br />
            489 Road Street
            <br />
           
        </div>
     
        <div class="invoice-details">
            Invoice No: 564
            <br />
            Date: 24/01/2012
        </div>
    
    <br />
    <br />
    <
<table width=400px" border="5" cellpadding="1" cellspacing="1" align="center">
                <tr>
                    <th width=250>Description</th>
                    <th width=80>Amount</th>
                    <th width=100>Unit price</th>
                    <th width=100>Total price</th>
                </tr>
 
    </div>
            <?php
            $total = 0;
            $vat = 21;
             
            $articles = array(
                        array("Motherboard","Case","RAM","Hard Disk","Monitor", "Installation"),
                        array(1,1,2,2,1,1),
                        array(65,80,70,125,210,30)
            );
 
            for($a=0;$a<5;$a++) {
                    $description = $articles[0][$a];
                    $amount = $articles[1][$a];
                    $unit_price = number_format( $articles[2][$a], 2);
                    $total_price = number_format( $amount * $unit_price, 2);
                    $total += $total_price;
                    echo("<tr>");
                    echo("<td>$description</td>");
                    echo("<td class='text-center'>$amount</td>");
                    echo("<td class='text-right'>€$unit_price</td>");
                    echo("<td class='text-right'>€$total_price</td>");
                    echo("</tr>");
            }
             
            echo("<tr>");
            echo("<td colspan='3' class='text-right'>Sub total</td>");
            echo("<td class='text-right'>€" . number_format($total,2) . "</td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'>VAT</td>");
            echo("<td class='text-right'>€" . number_format(($total*$vat)/100,2) . "</td>");
            echo("</tr>");
            echo("<tr>");
            echo("<td colspan='3' class='text-right'><b>TOTAL</b></td>");
            echo("<td class='text-right'><b>€" . number_format(((($total*$vat)/100)+$total),2) . "</b></td>");
            echo("</tr>");
            ?>
            </table>
</body></html>
 
  
    
    