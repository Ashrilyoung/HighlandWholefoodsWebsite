<html>
<head>
</head>
<body>
     
<table style = 'width: 70%' border= "10" bordercolor = black>

<tr>
<th>Product Name</th>                                           <!-- headings for a table -->
<th>Product Code</th>
<th>Product Stock</th>
</tr>
    

<?php

  session_start();                                              //allows session data to be used
  
  
  include("Connect.php");                                  //links to a page which will connect to the iCars database


  $product	     = $_POST['product'];  


  
    $Query = "SELECT Product_Name, Product_code, Stock_Level
    FROM Product
    WHERE Product_name LIKE '%$product%'";                        

  
  $Result = mysqli_query($DB,$Query);	                        //generates a result for the database query
    
    

				 	 
									   
  $NumResults = mysqli_num_rows($Result);	                    //saves the number rows of data database query produces
  
  if ($NumResults==0)                                           
	  
      header('Location: https://comp-hons.uhi.ac.uk/~16007873/DevelopingWebsitesstuff/CookieLoginError.html');    //if the database query produced one result then go to the home page



 
	
  else
	  
    while($row = mysqli_fetch_assoc($Result)){                 



    echo "<tr>";
    echo "<td>" . $row["Product_Name"] . "</td>";               //allows the data from the database to be displayed in the table
    echo "<td>" . $row["Product_code"] . "</td>";
    echo "<td>" . $row["Stock_Level"] . "</td>";
    echo "</tr>";

}
            



?>
</table>  
    
<form method="post" action="HighlandwholefoodsSearch.html">                             <!-- if this button is clicked the user will be moved to this page -->
 <table>

 <tr>
 <td colspan="2"><input type="submit" value="Return"/></td>                  <!-- this button enters the information -->
 </tr>
	
</table>
</form>

</body>
</html>