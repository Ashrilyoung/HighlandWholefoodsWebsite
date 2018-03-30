<html>
<head>
</head>
<body>
    

<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database

    
    
    
    $Email_address      = $_POST['Email_address'];
    echo "Hello, ".$_SESSION['Email_address']."!";
    
    $Email_address = "-1";
    if (isset($_SESSION['Email_address'])) {
    $Email_address = $_SESSION['Email_address'];

}
    
    $OrderID = "-1";
    $OrderID = $_SESSION['OrderID'];
    $Product_Code	     = $_POST['Product_Code'];  
    $Adjust	             = $_POST['adjust'];
    

    $Query = "INSERT INTO Client_Order
    VALUES('$OrderID', '$Product_Code', '$Adjust')";                                    //sql query to check whether the supplied user data corresponds with an account on the database

    
    
  
    $Result = mysqli_query($DB,$Query);	      //generates a result for the database query
    
    $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
    
    if ($NumResults==1)                                           
	  
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsOrder.php');    //if the database query produced one result then go to the home page
	
  else
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');   //if the database query did not produce one result then go to the log in error page
	


?>
    
  
</body>
</html>