<html>
<head>
<title>Swapping two Numbers using Temporary Variable</title>
<style>
h3
{
    text-align:center;
    color:green;
    background-color:yellow;
}
input[type="submit"]
{
	color: #B22222;
  	background-color:#DAA520;
  	border-radius: 50px;
  	height: 2em;
  	width: 7em;
  	font-size:medium;
  	font-weight: 200;
	cursor: pointer;
}
input
{
    text-align: center;
    font-weight: bold;
}
input[type="submit"]:hover
{
  background-color: #66ffcc;
}
</style>
</head>
<body>
<center>
<h3>Swapping two Numbers using Temporary Variable</h3>
<form action="ONE.php" method="post">
<label for="num1">Enter Number 1:</label>
<input type="number" name="num1" size="10"><br><br>
<label for="num2">Enter Number 2:</label>
<input type="number" name="num2" size="10"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{

	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	echo "<center>Before Swapping, Number 1 = ".$num1." and Number 2 = ".$num2."</center><br>";
	$temp = $num1;
	$num1 = $num2;
	$num2 = $temp;
	echo "<center>After Swapping, Number 1 = ".$num1." and Number 2 = ".$num2."</center><br>";
}
?>
</body>
</html>
