<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highland Wholefoods Product Stock Adjustment Page</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="WholefoodsStyle.css">
    
    
</head>
    
<body>
    
    <nav>

        <ul>

    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsHome.php?">Home</a></li>                       <!-- creates a navgation bar -->
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsSearch.php?">Product Search</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsChooseOrder.php?">Create Order</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsStockAdjust.php?">Adjust Stock</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsSalesSearch.php?">View Sales</a></li>  
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/WholefoodsLogOut.php?">Log Out</a></li>
  
        </ul>
        
    </nav>
 
<?php
session_start();                                                          //allows php session data to be used on this page

if (isset($_SESSION['employee']) && $_SESSION['employee'] == true) {       // if the user is logged in display a message
    echo "Hello, ".$_SESSION['Email']."!";
} else {
   header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsHome.php');           //if user is not logged in as admin direct them to the home page
}

?>
    
<form method="post" action="StockAdjust.php">                             <!-- if this button is clicked the user will be moved to this page -->
 <table>

     
<tr>
 <td>Product Code:</td>
 <td><input type="text" name="Product_Code" size="25" required/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>
     
     
<tr>
 <td>Adjustment:</td>
 <td><input type="text" name="adjust" size="25" required/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>
     
 <tr>
 <td colspan="2"><input type="submit" value="Adjust Stock"/></td>                  <!-- this button enters the information -->
 </tr>
	
</table>
</form>
</body>
</html>
