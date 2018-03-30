<html>
<head>
</head>
<body>
    

<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


    $Product_Code	     = $_POST['Product_Code'];  
    $Adjust	             = $_POST['adjust'];  


  
    $Query = "UPDATE Product
    SET Stock_Level = Stock_Level  + '$Adjust' 
    WHERE Product_Code = '$Product_Code'";                                    //sql query to check whether the supplied user data corresponds with an account on the database
  

  
  $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query
    
    

				 	 
									   
  $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
  
  if ($NumResults==0)                                           
	  
      header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsStockAdjust.php');    //if the database query produced one result then go to the home page



 
	
  else
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/iCars/iCarsFailedcreation.php');           //if the data does not go into the table properly direct the user to an error page

?>


    
</body>
</html>