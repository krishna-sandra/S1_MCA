<?php
$conn=mysqli_connect('localhost','root','','login');
/*if($conn)
{
    echo "connection successful";
}
else
{
    echo "connection failed";
}*/
if ($_POST)
{
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];

if($conn)
{
$rq="insert into marks values('$ktuid','$semester','$subject','$series1','$series2','$assignment','$attendance')";
$rs=mysqli_query($conn,$rq);
if($rs)
{
$res="Marks added Succesfully";
}
}
}
?>

<html>
<head><title>Marks Status</title></head>
<body>
<center>
<h2><?php
echo "$res";
?></h2>
</center>
</body>
</html>