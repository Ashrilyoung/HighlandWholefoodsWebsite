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
    

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {       // if the user is logged in display a message
    echo "Hello, ".$_SESSION['Email']."!";
    
} else {
   header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsHome.php');           //if user is not logged in as admin direct them to the home page
}
    


?>

    
<table style = 'width: 100%' border= "10" bordercolor = black>

<tr>
<th>Order Number</th>
</tr>
    
<?php
    
     include("Connect.php");                                  //links to a page which will connect to the iCars database
    
    
    $Email_address = "-1";
    if (isset($_SESSION['Email_address'])) {
    $Email_address = $_SESSION['Email_address']; }

	
	                                       //sql query to check whether the supplied user data corresponds with an account on the database
    $Query ="SELECT OrderID
            FROM Order_Client
            WHERE Email_Address = '$Email_address'";
    
    
    
    $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query

    
  $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
  
  if ($NumResults==0)                                           
	  
      header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');    //if the database query produced one result then go to the home page

	
  else
	  
    while($row = mysqli_fetch_assoc($Result)){                 

    echo "<tr>";
    echo "<td>" . $row["OrderID"] . "</td>";
    echo "</tr>";
	}
    
?>
    
</table>
    
    
<form method="post" action="OrderID.php">                             <!-- if this button is clicked the user will be moved to this page -->
 <table>

     
	 
<tr>
 <td>Order Number:</td>
 <td><input type="text" name="OrderID" size="30" required/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>

<tr>
 <td>Product Code:</td>
 <td><input type="text" name="Product_Code" size="30" required/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>
     
<tr>
 <td>Add:</td>
 <td><input type="text" name="adjust" size="30" required/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>
     
 <tr>
 <td colspan="2"><input type="submit" value="Add To Order"/></td>                  <!-- this button enters the information -->
 </tr>
	
</table>
</form>
</body>
</html>