<?php 
include 'connect.php';
$q1="select count(tokenno) from tokendb where deposit=1 or deposit=2 or deposit=3";
$q2="select count(tokenno) from tokendb where deposit=2";
$q3="select count(tokenno) from tokendb where deposit=3 or deposit=1";
$w1="select count(tokenno) from tokendb where withdraw=1 or withdraw=2 or withdraw=3";
$w2="select count(tokenno) from tokendb where withdraw=2";
$w3="select count(tokenno) from tokendb where withdraw=3 or withdraw=1 ";
$o1="select count(tokenno) from tokendb where other=1 or other=2 or other=3";
$o2="select count(tokenno) from tokendb where other=2";
$o3="select count(tokenno) from tokendb where other=3 or other=1";
$dep1=mysqli_query($conn,$q1);
$deprow1=mysqli_fetch_row($dep1);
$dep2=mysqli_query($conn,$q2);
$deprow2=mysqli_fetch_row($dep2);
$dep3=mysqli_query($conn,$q3);
$deprow3=mysqli_fetch_row($dep3);  
$with1=mysqli_query($conn,$w1);
$withrow1=mysqli_fetch_row($with1);
$with2=mysqli_query($conn,$w2);
$withrow2=mysqli_fetch_row($with2);
$with3=mysqli_query($conn,$w3);
$withrow3=mysqli_fetch_row($with3);
$ot1=mysqli_query($conn,$o1);
$otrow1=mysqli_fetch_row($ot1);
$ot2=mysqli_query($conn,$o2);
$otrow2=mysqli_fetch_row($ot2);
$ot3=mysqli_query($conn,$o3);
$otrow3=mysqli_fetch_row($ot3);
if(empty($deprow1[0])){
    $deper="no transactions";

}
else{
    $deper=($deprow2[0]/$deprow1[0])*100;
}
if(empty($withrow1[0])){
    $withper="no tr";

}else{
$withper=($withrow2[0]/$withrow1[0])*100;
}
if(empty($otrow1[0])){
    $otper="no transaction";
    
}else{
    $otper=($otrow2[0]/$otrow1[0])*100;

}




?>
<html lang="en">
<head>
    <style>
        .sub{
        padding-left: 45%;
        }
        .butn{
            margin-top:20px;
            padding:2%;
            background-color:#BB2CD9;
            border-color:#BB2CD9;
        }
    </style>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="mainadmin.css">
<!--===============================================================================================-->
</head><body>
<form action="insertadmin1.php" method="post">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                   
					<table>
						<thead>
							<tr class="table100-head">
                            <th class="column1">menu</th>
								<th class="column2">Deposit</th>
								<th class="column2">withdraw</th>
                                <th class="column2">other</th>
                                
								
								
							</tr>
						</thead>
						<tbody>
								<tr>
                                    <input type="hidden" name="myValue" value="My value" />
									<td class="column1">requests</td>
									<td class="column1"><?php echo $deprow1[0]; ?> <input type="hidden" name="depreq" value="<?php echo $deprow1[0]; ?> " /></td>
									<td class="column1"><?php echo $withrow1[0]; ?><input type="hidden" name="withreq" value="<?php echo $withrow1[0]; ?>" /></td>
									<td class="column1"><?php echo $otrow1[0]; ?><input type="hidden" name="otreq" value="<?php echo $otrow1[0]; ?>" /></td>
                                
									
								</tr>
								<tr>
									<td class="column1">resolved</td>
									<td class="column1"><?php echo $deprow2[0];?><input type="hidden" name="depres" value="<?php echo $deprow2[0];?>"?></td>
									<td class="column1"><?php echo $withrow2[0]; ?><input type="hidden" name="withres" value="<?php echo $withrow2[0]; ?>" /></td>
									<td class="column1"><?php echo $otrow2[0]; ?><input type="hidden" name="otres" value="<?php echo $otrow2[0]; ?>" /></td>
                                
									
								</tr>
                                <tr>
									<td class="column1">unresolved</td>
									<td class="column1"><?php echo $deprow3[0];  ?><input type="hidden" name="depun" value="<?php echo $deprow3[0]; ?>" /></td>
									<td class="column1"><?php echo $withrow3[0]; ?><input type="hidden" name="withun" value="<?php echo $withrow3[0]; ?>" /></td>
									<td class="column1"><?php echo $otrow3[0]; ?><input type="hidden" name="otun" value="<?php echo $otrow3[0]; ?>" /></td>
                                
									
								</tr>
                                <tr>
									<td class="column1">resolved %</td>
                                    <td class="column1"><?php echo sprintf("%.2f", $deper); ?><input type="hidden" name="deperc" value="<?php echo sprintf("%.2f", $deper); ?>" /></td>
									<td class="column1"><?php echo sprintf("%.2f", $withper); ?><input type="hidden" name="withperc" value="<?php echo sprintf("%.2f", $withper); ?>" /></td>
                                    <td class="column1"><?php echo sprintf("%.2f", $otper); ?><input type="hidden" name="otperc" value="<?php echo sprintf("%.2f", $otper); ?>" /></td>
                                    <input type="hidden" name="date" value="<?php echo date('d.m.y');?>">
                                
									
								</tr>
                        </tbody>
                       
                    </table>
                    
                    <div class="sub">
                        <input class="butn"type="submit" value="reset" placeholder="submit and reset tokens"></input>
                    </div>
				</div>
			</div>
		</div>
	</div>

</form>

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