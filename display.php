<?php
include "connect.php";
$qu1="select min(tokenno) from tokendb where deposit=1 and tokenno not in(select min(tokenno) from tokendb where deposit=1)";
$res=mysqli_query($conn,$qu1);
$row=mysqli_fetch_row($res);  
if(empty($row[0])){
$qude="select min(tokenno) from tokendb where deposit=1";

$resde=mysqli_query($conn,$qude);
$row=mysqli_fetch_row($resde);

}
$qu2="select min(tokenno) from tokendb where withdraw=1 and tokenno not in(select min(tokenno) from tokendb where withdraw=1)";
$res2=mysqli_query($conn,$qu2);
$row2=mysqli_fetch_row($res2); 
if(empty($row2[0])){
	$qude="select min(tokenno) from tokendb where withdraw=1";
	$resde=mysqli_query($conn,$qude);
	$row2=mysqli_fetch_row($resde);
	
	} 
$quu="select min(tokenno) from tokendb where other=1 and tokenno not in(select min(tokenno) from tokendb where other=1)";
$res3=mysqli_query($conn,$quu);
$row3=mysqli_fetch_row($res3); 
if(empty($row3[0])){
	$quuu="select min(tokenno) from tokendb where other=1";
	
	$resde=mysqli_query($conn,$quuu);
	$row3=mysqli_fetch_row($resde);
	
	} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="3">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="util.css">
	<link rel="stylesheet" type="text/css" href="maindisplay.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">TOKEN NO.</th>
								<th class="column2">COUNTER NO.</th>
								
							</tr>
						</thead>
						<tbody>
							
								<tr>
									<td class="column1"><?php echo $row[0];?></td>
									<td class="column2">1</td>
									
								
								</tr>	<tr>
									<td class="column1"><?php echo $row2[0];?></td>
									<td class="column2">2</td>
									
								
								</tr>	<tr>
									<td class="column1"><?php echo $row3[0];?></td>
									<td class="column2">3</td>
									
								
								</tr>
								
								
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>