<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
				</div>
				</div>
			<!-- end header -->




<?php

$tot11=$_GET['tot1'];
$address1=$_GET['address'];

unset($_SESSION['cart']);
echo "
      <center>THANK YOU FOR SHOPPING AT ONLINE SHOP.COM</center><br/><br/>
			  <center>A TOTAL OF RS.$tot11 HAS BEEN COLLECTED IN YOUR ACCOUNT</center><br/><br/>
			  <center>your order will be shipped as below address:$address1 AND PLEASE ARRANGED THE AMOUNT TO COLLECTED YOUR ORDER</center>";
			  

?>
</body>
</html>




