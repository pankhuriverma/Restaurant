<?php

include 'connect.php';



if($con==true)
{
	$query="select * from restaurant";

	$run=mysqli_query($con,$query);
	while($data=mysqli_fetch_array($run))
	{

	
		?>
				<input type="radio" name="id[]" value="<?php echo $data[0]; ?>" />
				<?php 
					echo "$data[1]";
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


