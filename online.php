<?php session_start(); ?>

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

			<!-- start page -->

				<div id="page">
						<!-- start content -->

							<div id="content">

								<div class="post">
									<h1 class="title">ENTER CARD DETAILES.</h1>

									<div class="entry">
									<br><br>
										<?php
                                                                                $tot11=$_GET['tot1'];
                                                                                 $address1=$_GET['address'];

											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}

											if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}

										?>

										<table>
											<form action="online1.php" method="POST">
                                                                                            <tr>
													<td><b> Amount :</b>&nbsp;&nbsp;</td>
                                                                                                        <td><input type='text' size="30" maxlength="30" name='tot1' readonly value="<?php echo $tot11;?>"></td>

												</tr>
                                                                                            <tr>
													<td><b> Shipping Address :</b>&nbsp;&nbsp;</td>
                                                                                                        <td><input type='text' size="30" maxlength="30" name='address' value="<?php echo $address1; ?>" readonly></td>

												</tr>
												<tr>
													<td><b> Name on Card :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='cnm'></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													 <td><b>card number :</b>&nbsp;&nbsp;</td>
													 <td><input type='intiger' size="30" maxlength="30" name='cno' placeholder="XXXX XXXX XXXX XXXX"></td>
													 <td>&nbsp;</td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>CVV no. :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='elno' size="3" placeholder="XXX"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Expire Date:</b>&nbsp;&nbsp;</td>
													<td><input type='intiger' name='exd' size="10" placeholder="MM/YYYY"></td>

												</tr>

												<tr><td>&nbsp;</tr>

												

												<tr><td>&nbsp;</tr>

												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>

												</tr>

												<tr><td>&nbsp;</tr>


												

												<tr><td>&nbsp;</tr>



												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
									</div>

								</div>


							</div>

						<!-- end content -->

						<!-- start sidebar -->
						<div id="sidebar">
								<?php
									include("includes/search.inc.php");
								?>
						</div>
						<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->

			<!-- start footer -->
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			<!-- end footer -->
</body>
</html>
