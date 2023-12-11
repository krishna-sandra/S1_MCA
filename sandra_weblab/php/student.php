<?php

include 'connection2.php';
if($_POST)
{
    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $mark = $_POST['mark'];
    $sq="insert into stud values ('$rollno','$name','$mark')";
    $p=mysqli_query($conn,$sq);
    if($p)
    { 
    echo "<script>
    alert('data inserted successfully')
    
    </script>";
    echo "successfully inserted";
    }
}
else
{
    echo "<br>Form data not received";
}
?>