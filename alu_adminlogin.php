<html>
<head>
<style>
fieldset
{
border-top-right-radius: 50px;

border-bottom-left-radius: 50px;
margin-left:450px;
margin-right:450px;
margin-top: 100px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
text-align: center;
}
table
{

font-size: 20px;
}
#in1
{
color: white;
background-color: black;
margin-left: 150px;
margin-top: 50px;
width: 100px;

}


</style>
</head>
<body>
<?php
//include("project1_company.php");
?>

<fieldset>
<table cellpadding= "5px" cellspacing= "5px">
<form action="" method= "post" enctype="multipart/form-data">
<h2>ADMIN LOGIN</h2>
<tr><td>NAME</td><td><input type= "text" name= "t1" placeholder= "enter user name"></td></tr>
<tr><td>PASSWORD</td><td><input type= "text" name= "t2" placeholder= "emter your password"></td></tr>
<tr><td><input type= "submit"  name= "veera" id= "in1"></td></tr>
</form>
</fieldset>
<?php

if(isset($_POST["veera"]))
{
$un= $_POST["t1"];
$pass= $_POST["t2"];

$a="admin";
$b= 1234;
if(($a==$un)&&($b==$pass))
{
echo"<script>alert('login successfully'); location= 'alu_admin.php'</script>";
}
if($a!=$un)
{
echo"<script>alert('username incorrect');  location= 'alumini.php'</script>";
}
if($b!=$pass)
{
echo"<script>alert('password incorrect');  location= 'alumini.php'</script>";
}
}
?>

</body>
</html>
