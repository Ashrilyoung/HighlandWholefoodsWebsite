<html>
<head>
</head>
<body>
    

<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


    $Product_Code	     = $_POST['Product_Code'];  
    $Adjust	             = $_POST['adjust'];
    $Email	             = $_POST['Email_Address']; 


  
    $Query = "INSERT INTO Client_Order
    VALUES("", "$Email", "$Product_Code", "$Adjust");";                                    //sql query to check whether the supplied user data corresponds with an account on the database

  
  $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query
    
    

?>

   
<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


    $Product_Code	     = $_POST['Product_Code'];  
    $Adjust	             = $_POST['adjust'];
    $Email	             = $_POST['Email_Address']; 


  
    $Query2 = "UPDATE Product
    SET Stock_Level = Stock_Level  + -'$Adjust' 
    WHERE Product_Code = '$Product_Code';";

  
  $Result = mysqli_query($DB,$Query2);	                        //generates a result for the database query
    
    

				 	 
									   

?>


    
</body>
</html>