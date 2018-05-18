<?php
session_start();                                                    //allows session data to be used
?>


<html>

<title>WholefoodsLogOut.php</title>

<link rel="stylesheet" type="text/css" href="WholefoodsStyle.css" media="screen">                                          <!-- links to style sheet which decides how the website will look-->

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


<?php

session_unset();                                                    /* Removes all session variables */


session_destroy();                                                  /* destroys the session and all of its unsaved data */

echo "You Are Now Logged Out!";                                      /* a message for the user*/
?>

<form method="post" action="https://comp-hons.uhi.ac.uk/~16007873/HighlandWholefoods/HighlandWholefoodsHome.php?">                         <!-- takes the user to the home screen if this button is clicked -->
<table>
  <tr>
  <td colspan="2"><input type="submit" value="Back To Site"/></td>             <!-- displays text on the button so the user knows what it does-->
 </tr>
 </table>
 </form>



</body>
</html>