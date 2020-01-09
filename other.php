<?php
include "connect.php";
$qu="INSERT INTO tokendb(deposit,withdraw,other) VALUES (0,0,1)";
$res=mysqli_query($conn,$qu);
$qu2="select max(tokenno) from tokendb";
$res=mysqli_query($conn,$qu2);
$row=mysqli_fetch_row($res);

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv = "refresh" content = "2; url = generator.html" />
    <title>Document</title>
    <style>
        .container{
           padding-top: 1%;
           padding-left: 45%;
        font-size: 200px;
           
        }
    </style>
</head>
<body onload="printpage()">
    <div class="container">
       <P> <?php echo $row[0]; ?></P>
    </div>
    <script>
        function printpage(){
            window.print();
        }
    </script>
</body>
</html>