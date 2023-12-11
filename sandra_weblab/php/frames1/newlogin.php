<html>
<head>
    <title>Login</title>
</head>
<body>
   <form method="POST" action="newlogin.php ">
<center>
<table border="1" width="50%" height="50%">
<tr>
  <th colspan="2"><h2>REGISTRATION</h2></th>
</tr>

<tr>
<th>Name</th>
<td><input type="textbox" name="name" required/></td>
</tr>

<tr>
<th>Age</th>
<td><select name="age" required>
<option>select</option>

<?php
for ($i=18;$i<=40;$i++)
{
  echo "<option>".$i."</option>";
}
?>
</select>
<?td>
</tr>

<tr>
<th>Email ID</th>
<td><input type="textbox" name="emailid" required/> </td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="password" required/></td>
</tr>
<tr>
<th>Re-Password</th>
<td><input type="password" name="repassword" required/></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
</tr>


</table>
</center>
</form>
</body>
</html>

<?php
if(isSet($_POST["submit"])){

$conn=mysqli_connect('localhost','root','','login');
/*if($conn)
{
    echo "connection successful";
}
else
{
    echo "connection failed";
}*/

$name=$_POST['name'];
$age=$_POST['age'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];

if($password!=$repassword)
{
	echo "<script> alert(' password mismatch'); </script>";
}
else
{
if($name && $age && $emailid &&  $password){
$s="INSERT INTO `stud` (`Name`, `Age`, `Email ID`, `Password`, `id`) VALUES ('$name','$age','$emailid','$password', NULL);";
echo($s);
$p=mysqli_query($conn,$s);
}
if($p) echo "<script> alert('insert successfully'); window.location.href = \"login.php\";</script>";
else echo "<script> alert('unsuccessfull')</script>";}
}
?>




