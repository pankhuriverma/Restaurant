<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="restaurant.css">
	<script type="text/javascript" src="restaurant.js"></script>

</head>
<body background="images/wall2.jpg">
	<div class="head_outer">
		<div class="header">
					<div class="head">
						<div class="logo">
							<img src="images/logo.png">
						</div>
						<div class="btn">
							<!-- <input type="button" name="register" value="Register" onclick="disp1()" id="bt1"> -->
							<div class="login" >
								<p>Register</p>
							</div>
							<div class="register" >
								<p>Login</p>
							</div>
	
							<!-- <input type="button" name="login" value="Login" onclick="disp2()" id="bt2"> -->
							<div class="loc">
								<img src="images/location.png" >
							</div>

							
						</div>

					</div>
					
					<div class="nav">
						<ul>
							<li onclick="show()">HOME</li>
							<li>OUR STORY</li>
							<li>FIND RESTAURANTS</li>
							<li>NEWSLETTER</li>
							<li>CONTACT US</li>

							
							
						</ul>
					</div>
		</div>
	</div>
	
	


				

			
					<div class="form_top3">
						<div class="cross">
							<img src="images/cross.png">
						</div>
						
						<div class="form3">
							<form method="post" action="menu.php">
								<table>
									<tr>	
										<td>Select restaurant</td>
									</tr>
									<tr>
										

										<td>
											<?php

											include 'list.php';
									?>
										</td>
									</tr>
									
									
									<tr>
									
										<td><input type="submit" name="log" value="submit" class="res" ></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				
			
				
				
				
	

</body>
</html>