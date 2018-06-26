<?php
if(isset($_POST['name']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['message'];

$to = "hr@chgs.in";

$message = "
<html>
<head>
</head>
<body>
<table>
<tr>
<td>Name</td>
<td>".$name."</td>
</tr>
<tr>
<td>Email</td>
<td>".$email."</td>
</tr>
<tr>
<td>Phone</td>
<td>".$phone."</td>
</tr>
<tr>
<td>Message</td>
<td>".$msg."</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$name.'<'.$email.'>';

$mailing=mail($to,"Contact Form",$message,$headers);

if($mailing)
{
echo 200;
}
else
{
echo 400;
}

}

?>