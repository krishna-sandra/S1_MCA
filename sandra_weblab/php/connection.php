<?php
$conn=mysqli_connect('localhost','root','','student');
if($conn)
{
    echo "connection successful";
}
else
{
    echo "connection failed";
}
$sq="insert into stud values('8','ramya','48')";
$p=mysqli_query($conn,$sq);
if($p)
{ 
    echo "<script>
    alert('data inserted successfully');
    
    </script>";
    echo "successfully inserted";
}
?>