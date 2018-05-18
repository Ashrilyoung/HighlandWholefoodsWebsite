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
    
    
<table style = 'width: 100%' border= "10" bordercolor = black>

<tr>                                          <!-- headings for a table -->
<th>Product Sales</th>
<th>Product Name</th>
</tr>
    
<?php
    
  include("Connect.php");                          //allows this page to connect to the database


  
  $Query = "SELECT SUM(Client_Order.Quantity), Product.Product_Name
  FROM Client_Order, Product
  WHERE Client_Order.Product_Code = Product.Product_Code 
  GROUP BY Product.Product_Name";    //sql query to insert this user data into the database
   

  
  $Result = mysqli_query($DB,$Query);	           //generates a result for the query
							   

$NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
  
  if ($NumResults==0)    
	  
      header('Location: https://comp-hons.uhi.ac.uk/~16007873/iCars/iCarsFailedcreation.php');           //if the data does not go into the table properly direct the user to an error page


	
  else
	  
	
                      //if the data goes into the table properly put them back to the log in screen
    while($row = mysqli_fetch_assoc($Result)){                 

    echo "<tr>";
    echo "<td>" . $row["SUM(Client_Order.Quantity)"] . "</td>";               //allows the data from the database to be displayed in the table
    echo "<td>" . $row["Product_Name"] . "</td>";
    echo "</tr>";

    }
?>
	
</table>
</body>
</html>