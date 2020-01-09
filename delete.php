<?php
include "connect.php";
$token=$_GET['id'];
if($token!="done"){
$qu2="update tokendb set deposit=2 where tokenno=$token";
$res=mysqli_query($conn,$qu2);
if($res){
    echo"kdk";

    header("Location:counterdeposit.php");
}
}
header("Location:counterdeposit.php");

    

?>