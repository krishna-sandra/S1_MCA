<html>
<head><title>STUDENT REGISTRATION</title></head>
<body>
<form action="kturegistration.php" method="post">
<center>
<table>
<table border="1" padding=40px width=600px>
<tr rowspan=2>
<th colspan=2><center<h2>REGISTRATION FORM</h2></CENTER></th>
</tr>


<tr>
<th>Name</th>
<td><input type="text" name="name" required/></td>
</tr>

<th>KTU ID</th>
<td><input type="text" name="ktuid" required/></td>
</tr>
<tr>
<th>SEMESTER</th>
<td><select name='semester'>
    <option>SELECT</option>
    <?php
    for($i=1;$i<7;$i++)
    {
        echo "<option>".$i."</option>";
    }
    ?> </td>
</tr>

<tr>
<th>ROLL NO</th>
<td><input type="number" name="rollno"required/></td>
</tr>
<tr>
<th>GENDER</th>
<td><input type="radio" name="gender" value="male">MALE</input>&nbsp;
<input type="radio" name="gender" value="female">FEMALE</input>&nbsp;
<input type="radio" name="gender" value="other">OTHER</input></td>

</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Register"></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>


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
if($_POST)
{
    $name=$_POST['name'];
    $ktuid=$_POST['ktuid'];
    $semester=$_POST['semester'];
    $rollno=$_POST['rollno'];
    $gender=$_POST['gender'];
if($conn)
{
$q="insert into registration values('$name','$ktuid','$semester','$rollno','$gender')";
$p= mysqli_query($conn,$q);
if($p) echo "<script> alert('register successfully'); window.location.href = \"kturegistration.php\";</script>";
else echo "<script> alert('unsuccessfull')</script>";}
}
