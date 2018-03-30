<html>
<head>
</head>
<body>



<?php
    
  include("Connect.php");                          //allows this page to connect to the database

 
  $Email	 = $_POST['Email_Address'];                  //allows user inputs from the previous page to be used on this one
  $Password  = $_POST['Password'];
  $First 	 = $_POST['First_Name'];
  $Last	     = $_POST['Last_Name'];

  

  
  $Query = "INSERT INTO Account
  VALUES('', '$Email', '$Password', '$First', '$Last', 'c')";    //sql query to insert this user data into the database
   

  
  $Result = mysqli_query($DB,$Query);	           //generates a result for the query
				 	 
									   
								   

  if ($Result)
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsLogIn.php');                     //if the data goes into the table properly put them back to the log in screen
	
  else
	  
	header('Location: https://comp-hons.uhi.ac.uk/~16007873/iCars/iCarsFailedcreation.php');           //if the data does not go into the table properly direct the user to an error page
   


   


?>

</body>
</html>