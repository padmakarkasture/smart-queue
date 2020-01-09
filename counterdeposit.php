
<?php
include "connect.php";
$qu2="select min(tokenno) from tokendb where deposit=1";
$res=mysqli_query($conn,$qu2);
$row=mysqli_fetch_row($res);

$qu3="select min(tokenno) from tokendb where deposit=1 and tokenno not in(select min(tokenno) from tokendb where deposit=1)";
$res2=mysqli_query($conn,$qu3);
$row1=mysqli_fetch_row($res2); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V12</title>
	<meta charset="UTF-8">
    
   <?php if(empty($row[0])){
      $row[0]="done";
  
    echo "<meta http-equiv = 'refresh' content = '2'/>";}?>
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
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="maincntr.css">
<!--===============================================================================================-->
<style>
	.sarkaa{
		padding-left: 100px;
		font-size: 150px;
	}
</style>
</head>
<body onload="btn();">

	<div class="bg-contact100">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt" data-tilt>
		     <div class="sarkaa">
				 
                <font><?php echo $row[0] ?></font>
			 </div>
					
				</div>

				<div class="contact100-form validate-form">
					<span class="contact100-form-title">
					Deposit counter
					</span>

					<div class="container-contact100-form-btn">
						<?php echo"<a href='delete.php?id=".$row[0]."'"; ?>
						<button  class="contact100-form-btn">
							resolved
						</button></a>
					</div>

					<div class="container-contact100-form-btn">
					<?php echo"<a href='deposit_unresolved.php?id=".$row[0]."'"; ?>
						<button class="contact100-form-btn">
							unresolved
						</button>
</a>
					</div>

					
					<div class="container-contact100-form-btn">
					<?php echo"<a href='deposit_un_list.php'"; ?>
						<button class="contact100-form-btn">
						list of unresolved
						</button>
</a>
					</div>
</div>
			</div>
		</div>
	</div>
	<?php
	if(empty($row1[0])){
                ?>
                <h1 id='kela' hidden>token number <?php echo $row[0]; ?> go to counter number 1</h1><?php }else{
            ?>
            
            
            <h1 id="kela" hidden>token number <?php echo $row1[0]; ?> go to counter number 1</h1>




                <?php }
          if($row[0]!="done"){ ?>  <button id='voice' onclick="responsiveVoice.speak(ac);" 
type="button" value="Play" hidden>Play</button> 
          <?php } ?>
            <script>
var ac=document.getElementById('kela').innerHTML

</script>
   <script>
     function btn(){
        document.getElementById("voice").click();

     }
     </script>    
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=xUsUkwuc"></script>

              




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


</body>
</html>
