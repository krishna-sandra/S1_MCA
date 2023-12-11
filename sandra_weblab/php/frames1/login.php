<html>
<head>
    <title>Login</title>
</head>
<body>
   <form method="POST" action="login.php ">
<center>
<table border="1">
<tr>
  <th colspan="2">LOGIN</th>
</tr>

<tr>
<th>Username</th>
<td><input type="textbox" name="name" </td>
</tr>

<tr>
<th>Password</th>
<td><input type="password" name="password" </td>
</tr>

<tr>
<td colspan="2" align-"center"><input type="submit" value="Login">&nbsp<input type="reset" value="Reset"></td>
</tr>

<tr><td colspan="2" align-"center"><a href="newlogin.php">Doesn't have an account</a></td>
</tr>
</table>
</center>
</form>
</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','login');
$uname=$_POST['name'];
$pswd=$_POST['password'];
$s="select * from stud where name='$uname'";
$p=mysqli_query($conn,$s);

if(mysqli_num_rows($p))
{
while($row=mysqli_fetch_array($p))
{	
	if($row['Password']!=$pswd)
		echo "<script> alert('Password invalid')</script>";
	else
	{
		echo "<center>
			<table border='1'>
			<tr>
			  <th>Name</th>
			  <th>Age</th>
			  <th>Email ID</th>
			</tr>
			<tr>
			  <td>".$row['Name']."</td>
		          <td>".$row['Age']."</td>
			  <td>".$row['Email ID']."</td>
    			</tr>
			</table>
			</center>";
	}
   
}
}

?>

