<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="form3">
							<form method="post" action="cart.php">
								<table>
									
									<tr>
										

										<td>
											<?php
											include 'connect.php';



											if($con==true)
											{
												$query="select * from abs";

												$run=mysqli_query($con,$query);
												while($data=mysqli_fetch_array($run))
												{

												
													?>
															<input type="checkbox" name="id[]" value="<?php echo $data[0]; ?>" />
															<?php 
																echo "$data[1] &nbsp";
																echo "$data[2]";
														?>
													<br>

													<?php
												 }
														
													
											}
											else
											{
												echo "Error in connection";
											}
											
									?>
										</td>
									</tr>
									
									
									<tr>
									
										<td><input type="submit" name="log" value="submit" class="res" ></td>
									</tr>
								</table>
							</form>
						</div>

</body>
</html>



























