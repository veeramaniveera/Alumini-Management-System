<html>
<head>
<title>even</title>
<style>
fieldset
{
margin-left:450px;
margin-right:450px;
margin-top: 100px;
//background:linear-gradient(blue,black);
background-image:url("hd3.jpeg");
text-align: center;
border-top-right-radius: 50px;
border-top-left-radius: 50px;
border-bottom-right-radius: 50px;
border-bottom-left-radius: 50px;
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
<form action="" method= "post">
<h2>alumini login </h2>
<tr><td>mail id</td><td><input type= "text" name= "t1" placeholder= "enter your mail id"></td></tr>
<tr><td>mobile number</td><td><input type= "text" name= "t2"placeholder= "enter your mobile number"></td></tr>

<tr><td><input type= "submit"  name= "veera" id= "in1"></td></tr>
</form>
</fieldset>
<?php
if(isset($_POST["veera"]))
{
$mail= $_POST["t1"];
$mob1= $_POST["t2"];


$conn= mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("connection error".mysqli_error());
}
$a="select mobile_number from alumini_reg where mail_id='$mail'";

$b=mysqli_query($conn,$a);

if(mysqli_num_rows($b)>0)
{
while($r=mysqli_fetch_assoc($b))
{
$mob=$r["mobile_number"];
if($mob==$mob1)
{
echo"<script>alert('LOGIN SUCCESS FULLY'); location= 'alu_alumini.php'</script>";
}
if($mob!=$mob1)
{
echo"<script>alert('PASSWORD INCORRECT'); location= 'alumini.php'</script>";
}
}
}
else
{
echo"<script>alert('No data Found'); location= 'alumini.php'</script>";
}

$a1="select user_id,name from alumini_reg where mail_id= '$mail'";
$b1=mysqli_query($conn,$a1);
if(mysqli_num_rows($b1))
{
while($r=mysqli_fetch_assoc($b1))
{
$uid2=$r["user_id"];
$name=$r["name"];
}
}
else
{
echo"<script>alert('No data Found');</script>";
}

session_start();
$user1="$name";
$user2="$uid2";
$_SESSION["name"]=$user1;
$_SESSION["user_id"]=$user2;
//echo"$user1";
//echo"$user2";
}

?>

</body>
</html>
