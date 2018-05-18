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

<?php
    
     include("Connect.php");                          //allows this page to connect to the database

    
    $Email_address      = $_POST['Email_address'];
    $NewOrderY      = $_POST['NewOrderY'];
    
    $_SESSION['Email_address'] = $Email_address; 
    
    if ($NewOrderY == '1') {
	
     $Query = "INSERT INTO Order_Client (Customer_Id, Email_Address)
     SELECT Customer_Id, Email_address FROM Account
     WHERE  Email_Address = '$Email_address'";                                    //sql query to check whether the supplied user data corresponds with an account on the database"
    
    
     $Result = mysqli_query($DB,$Query);	           //generates a result for the query
						   

        $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
    
  
    if ($NumResults==1)  
	  
        header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsOrder.php'); 
	
    else
	  
        header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsOrder.php');           //if the data does not go into the table properly direct the user to an error page
    
        
    } else {
    echo 'Hello';
    header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsOrder.php');
    }
        
   
    
?>

</body>
</html>