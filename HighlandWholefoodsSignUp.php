<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highland Wholefoods Sign Up Page</title>
    <meta name="description" content="An interactive getting started guide for Brackets.">
    <link rel="stylesheet" href="WholefoodsStyle.css">
    
    
</head>
    
<body>

        <ul>

    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsHome.php?">Home</a></li>                       <!-- creates a navgation bar -->
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsSearch.php?">Product Search</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsChooseOrder.php?">Create Order</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandwholefoodsStockAdjust.php?">Adjust Stock</a></li>
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsSalesSearch.php?">View Sales</a></li>  
    <li><a href="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/WholefoodsLogOut.php?">Log Out</a></li>
  
        </ul>    
    
<form method="post" action="CreateAccount.php">                             <!-- if this button is clicked the user will be moved to this page -->
 <table>
 
<tr>
 <td>Email:</td>
 <td><input type="email" name="Email_Address" size="50"/></td>                       <!-- asks the user to enter a suitable email address -->
</tr>
  
 <tr>
 <td>Password:</td>
 <td><input type="password" name="Password" size="20"/></td>                        <!-- asks the user to enter a password -->
 </tr>
 
 <tr>
 <td>First Name:</td>
 <td><input type="text" name="First_Name" size="20"/></td>                         <!-- asks the user for their surname -->
 </tr>
 
 <tr>
 <td>Last Name:</td>
 <td><input type="text" name="Last_Name" size="20"/></td>                             <!-- asks the user for their initials -->
 </tr>
 
 
 <tr>
 <td colspan="2"><input type="submit" value="Create Account"/></td>                  <!-- this button enters the information -->
 </tr>
 </table>
 </form>
 





</body>
</html>