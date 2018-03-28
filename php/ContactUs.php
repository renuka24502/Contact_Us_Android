<?php
//header('Content-Type: application/json');
//EDIT THE DATABASE TABLE with 2 columns Namely CompanyName and CompanyDetails
   $con=mysqli_connect('localhost','root','143myself','ContactUs') or die('Failed to connect to MySQL.');
		$Sql_Query = "select * from contact";
		
		$d = mysqli_query ($con, $Sql_Query);
		
		if ($d)
			{
$rows = array();
$i = 0;

					while($r = mysqli_fetch_assoc($d))
				{
						
						$rows[$i] = $r;
						$i++;

				}

				echo json_encode($rows);
				
			}
			else {
				echo 'TRy Again T_T'; 
			    }   
   mysqli_close($con);
?>
