
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
?>
<html>
<head><title>STUDENT REGISTRATION</title></head>
<body>
<form action='marksadded.php' method='post'>
<center>
<table border=1px padding=40px width=600px>
<tr rowspan=2>
<td colspan=2><center><h1>MARKS</h1></center></td></tr>



<tr>
<td width=250px>KTU-ID</td>
<td>
<select name="ktuid">
<option value="">Select an option</option>
<?php
$query = "SELECT ktuid FROM registration";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
echo "<option>".$row['ktuid'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>

<tr>
<td width=250px>SEMESTER</td>
<td><select name='semester'>
    <option>SELECT</option>
    <?php
    for($i=1;$i<7;$i++)
    {
        echo "<option>".$i."</option>";
    }
    ?>
</tr>

<tr>
<td width=250px>SUBJECT</td>
<td>
<select name="subject">
<option value="">Select an option</option>
<?php
$query2 = "SELECT subject FROM subjects";
$result2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($result2) > 0) 
{
while ($row = mysqli_fetch_assoc($result2)) 
{
echo "<option>".$row['subject'] . "<br></option>";
}
}
?>
</select>
</td>
</tr>

<tr>
<td width=250px>SCORES</td>
<td>
FIRST SERIES <input type='text' name='series1'>
SECOND SERIES <input type='text' name='series2'>
ASSIGNMENT <input type='text' name='assignment'>
ATTENDANCE <input type='text' name='attendance'>
</td>
</tr>

<tr>
<td colspan=2><center><input type='submit' value='Save'></center></td>
</tr>
</table>
</center>
</form>
</body>
</html>