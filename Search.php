<html>
<head>
</head>
<body>


<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


  $product	     = $_POST['product'];  


  
  $Query = "SELECT Product_Name, Product_code
FROM Product
WHERE Product_name LIKE '%$product%'";                                    //sql query to check whether the supplied user data corresponds with an account on the database
  

  
  $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
  
  if ($NumResults==1)                                           
	  
//	  
//	header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsSearch.html');    //if the database query produced one result then go to the home page
while($row = mysqli_fetch_assoc($Result)){                 



echo "<tr>";
echo "<td>" . $row["Product_Name"] . "</td>";                               //allows the data from the database to be displayed in the table
echo "<td>" . $row["Product_Code"] . "</td>";
echo "</tr>";


 }
	
  else
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');   //if the database query did not produce one result then go to the log in error page
	


?>

</body>
</html>