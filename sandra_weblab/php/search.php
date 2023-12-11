<?php
include 'connection2.php';
if($_POST)
{
    if(isset($_POST["rollno"]))
    {
        $rollno=$_POST['rollno'];
        $s= "SELECT * FROM stud WHERE rollno='$rollno'";
        $q= mysqli_query($conn,$s);
        // $row = mysqli_fetch_assoc($q);
        echo "<br>";
        while($row = mysqli_fetch_assoc($q)){
            echo "Roll No: " . $row["rollno"] . " ";
            echo "Name: " . $row["name"] . " ";
            echo "Mark: " . $row["mark"] . " ";
        }
        // for($i=0;$i<3;$i++)
        // {
        //     echo " " . $row["$i"] . " ";
        // }
    }
}
?>   
        