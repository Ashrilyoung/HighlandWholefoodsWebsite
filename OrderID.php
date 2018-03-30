


<html>
<head>
</head>
<body>
    

<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database

                                       
	  
    
        $Order_Number	     = $_POST['OrderID'];                             //variables which were entered on the previous page
        $Product_Code 	 = $_POST['Product_Code'];
        $Qunatity 	 = $_POST['adjust'];
    

    
                                       //sql query to check whether the supplied user data corresponds with an account on the database
        $Query ="INSERT INTO Client_Order
                VALUES($Order_Number, $Product_Code, $Qunatity)";
    
    
  
    $Result = mysqli_query($DB,$Query);	      //generates a result for the database query

      if ($Result)                                       
	  
        echo 'Success';

	
    else
	  
	    header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');   //if the database query did not produce one result then go to the log in error page
	

        $Order_Number	     = $_POST['OrderID'];                             //variables which were entered on the previous page
        $Product_Code 	 = $_POST['Product_Code'];
        $Qunatity 	 = $_POST['adjust'];
    
                                       //sql query to check whether the supplied user data corresponds with an account on the database
        $Query2 ="UPDATE Product
        SET Stock_Level = Stock_Level  + '-$Qunatity'
        WHERE Product_Code='$Product_Code';";
    
    
  
    $Result2 = mysqli_query($DB,$Query2);	      //generates a result for the database query

    
      if ($Result2)                                       
	  
        header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsOrder.php');

	
    else
	  
	    header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');   //if the database query did not produce one result then go to the log in error page
	
      

?>
    
  
</body>
</html>