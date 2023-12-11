<?php
include 'connection2.php';

$s= "SELECT * FROM stud ";
$q= mysqli_query($conn,$s);
echo "<br>";
if(mysqli_num_rows($q))
{
    echo "<table border='1'>
            <tr>
                <th> Roll No </th>
                <th> Name </th>
                <th> Mark </th>
            <tr>";
    while($row = mysqli_fetch_assoc($q))
    {
        echo"<tr>";
        echo "<td>" . $row['rollno']  ."</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['mark'] . "</td>";
        echo"</tr>";
    }
    echo "</table>";
}
?>