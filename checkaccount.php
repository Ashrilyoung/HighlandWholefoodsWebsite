<html>
<head>
</head>
<body>


<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


  $Email	     = $_POST['Email'];                             //variables which were entered on the previous page
  $Password 	 = $_POST['Password'];


  
  $Query = "SELECT Email_Address, Password FROM Account              
  WHERE Email_Address = '$Email'
  AND Password= '$Password'";                                    //sql query to check whether the supplied user data corresponds with an account on the database
  

  
  $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query
				 	 
									   
  $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
    
  
  if ($NumResults==1)                                           //if the database query generated one result then set session variable logged in equal to true
	  $_SESSION['loggedin'] = true;
      $_SESSION['Email'] = $Email;  
  
    if ($NumResults==1)                                           
	  
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsSearch.html');    //if the database query produced one result then go to the home page
	
  else
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');   //if the database query did not produce one result then go to the log in error page
	


?>

</body>
</html>