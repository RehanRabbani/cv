<!DOCTYPE html>
<html>
<head>
<style>
body{
background-color:black;
padding-top:100px;
color:ghostwhite;
font-size:22px;
font-family:serif;
text-align:center;}
</style>
<body>

<?php
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];

echo("Your request has been sent to our main head office<br>For further query visit our site Mr." . $username  );
echo("<br>email:"  . $email);
echo("<br>mobile:"  . $mobile);



?>

</body>
</html>