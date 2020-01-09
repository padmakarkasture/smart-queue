<?php
include "connect.php";
$token=$_GET['id'];
if($token!="done"){
$qu2="update tokendb set withdraw=0,deposit=3,other=0 where tokenno=$token";
$res=mysqli_query($conn,$qu2);
if($res){
     header("Location:counterdeposit.php");
}}
header("Location:counterdeposit.php")

    

?>