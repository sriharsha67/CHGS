<?php
if(isset($_POST['mobile']))
{

$host="localhost";
$username="root";
$password="";
$dbname="kalpavriksh";
$conn=mysqli_connect($host,$username,$password,$dbname);
if(!$conn)
{
die('Error establishing connection');    
}
else
{
$sql="INSERT INTO leads(firstname,lastname,email,mobile) VALUES('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['mobile']."')";
$insert=mysqli_query($conn,$sql);
if($insert)
{
echo 'Thank you, We will get back to you shortly.';  
}
else
{
echo 'Server is busy, please try again later';    
}
}
    
    
}
    
?>