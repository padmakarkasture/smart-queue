<?php
include"connect.php";
$depreq=$_POST['depreq'];
echo $depreq;
$depres=$_POST['depres'];
$depunr=$_POST['depun'];
$depresp=$_POST['deperc'];
$withreq=$_POST['withreq'];
$withres=$_POST['withres'];
$withun=$_POST['withun'];
$withresp=$_POST['withperc'];
$otreq=$_POST['otreq'];
$otres=$_POST['otres'];
$otunr=$_POST['otun'];
$otresp=$_POST['otperc'];
$date=$_POST['date'];
echo $depreq;
echo $depres;
$qr="INSERT INTO admindb(depreq, depres, depunr, depresp, withreq, withres, withunr, withresp, otreq, otres, otunr, otresp, date) VALUES ('$depreq','$depres','$depunr','$depresp','$withreq','$withun','$withresp','$withresp','$otreq','$otres','$otunr','$otresp','$date')";
 $res=mysqli_query($conn,$qr);
 if($res){
     $create="CREATE TABLE tokendb1(
        tokenno int NOT NULL AUTO_INCREMENT,
        deposit int NOT NULL,
        withdraw int NOT NULL,
        other int NOT NULL,
        PRIMARY KEY (tokenno)
    );";
    $dropt="drop table tokendb";
    $res=mysqli_query($conn,$dropt);
    $res1=mysqli_query($conn,$create);
    header("Location:admin.php");

 }

?>