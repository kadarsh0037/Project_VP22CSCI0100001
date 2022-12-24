<html>
<head>
<title>Length of a Number</title>
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
<h3>Length of a Number</h3>
<form action="FOURTEEN.php" method="post">
<label for="num">Enter a Number:</label>
<input type="number" name="num" size="10"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $num = $_POST["num"];
    $c = 0;
    while($num !=0)
    {
        $num = (int)($num/10);
        $c++;
    }
    echo("<center>");
    echo("Number of Digits = ".$c);
    echo("</center>");
}
?>
</body>
</html>
