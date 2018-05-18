<!DOCTYPE html>
<html>
<head>
    
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highland Wholefoods Log In Page</title>
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
    
<div id = "row">
   
<div id = "row4">
    
<h2>Log in and Sign up</h2>                                          <!-- displays a heading  -->

<h2>Please enter your Email address and password</h2>                      <!-- displays a heading -->


<form method="post" action="checkaccount.php">                        <!-- if this button is clicked it will link the user to this page -->
<table>
<div id = "row2">
    <tr>
        <td>Email address :</td>
        <td><input required type="email" name="Email" size="25"/></td>                         <!-- asks the user for their email address to be validated -->
    </tr>
</div>
<div id = "row3">
    <tr>
        <td>Password:</td>
        <td><input required type="password" name="Password" size="20"/></td>               <!-- asks the user to enter their password to be checked -->
    </tr>
</div>
    <tr>
        <td colspan="2"><input type="submit" value="Log In"/></td>                <!-- submits the user entered information -->
    </tr>
 </table>
 </form>
</div>
    

    
</div> 
    
    

</body>
</html>
