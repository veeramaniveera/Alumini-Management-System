<html>
<head>
<style>
img
{
width:100px;
height:100px;
}
table
{
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size:20px;
text-align:center;
background-image:url("hd3.jpeg");

}
#tb1
{
margin-left: 240px;
//margin-top: 100px;
text-transform: capitalize;
border-width:3px;
border-color:red;
color: black;
font-size:20px;
text-align:center;
background-image:url("file/hd3.jpeg");


}
#txt2
{
color:black;
font-size: 20px;
text-align:center;

}
</style>

</head>
<body>
<form action="" method= "post">
</form>
<?php
//include("project1_staff.php");
?>
<h1>hod appro</h1>

<?php
$un=$_GET["alumini_id"];
echo"$un";
$ap= "Accept";

$conn= mysqli_connect("localhost:3306","root","","alumini");
if(!$conn)
{
die("connection error".mysqli_error());
}
$a="update lecture_req set status='$ap' where alumini_id='$un'";
if(mysqli_query($conn,$a))
{
echo"<script>alert('Accept successfully'); location= 'alu_hodlecture.php'</script>";
}




?>
</body>
</html>





