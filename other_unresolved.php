<?php
include "connect.php";
$token=$_GET['id'];
if($token!="done"){
$qu2="update tokendb set withdraw=0,deposit=0,other=3 where tokenno=$token";
$res=mysqli_query($conn,$qu2);
if($res){
     header("Location:counterother.php");
}}
header("Location:counterother.php");

    

?>