<?php
include "connect.php";
$token=$_GET['id'];
if($token!="done"){
$qu2="update tokendb set withdraw=3,deposit=0,other=0 where tokenno=$token";
$res=mysqli_query($conn,$qu2);
if($res){
     header("Location:counterwithdraw.php");
}}
header("Location:counterwithdraw.php")

    

?>