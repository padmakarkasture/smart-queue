<?php
include("connect.php");
$drop="drop table tokendb";
$drp=mysqli_query($conn,$drop);
$sql="CREATE TABLE tokendb(
    tokenno int NOT NULL AUTO_INCREMENT,
    deposit int NOT NULL,
    withdraw int  NOT NULL,
    other int NOT NULL,
    PRIMARY KEY(tokenno)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  $res=mysqli_query($conn,$sql);
  if($res){
      echo "<meta http-equiv='refresh' content='5; url=admin.php'>";
  }
?>
