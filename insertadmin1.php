<?php
include("connect.php");
$drop="drop table tokendb";
$drp=mysqli_query($conn,$drop);
$sql="CREATE TABLE tokendb(
    tokenno int NOT NULL,
    deposit int NOT NULL,
    withdraw int  NOT NULL,
    other int NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  $res=mysqli_query($conn,$sql);
  if($res){
      echo "kdk";
  }
?>