<html>
<head>
<title>Factorial of a Number</title>
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
<h3>Factorial of a Number</h3>
<form action="TWELVE.php" method="post">
<label for="num">Enter a Number:</label>
<input type="number" name="num" size="10"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $num = $_POST["num"];
    $f = 1;
    if($num == 0 || $num ==1)
    {
        $f = 1;
    }
    else
    {
        for($i=1;$i<=$num;$i++)
        {
            $f *= $i;
        }
    }
    echo "<center>Factorial of ".$num." is ".$f."<center>";
}
?>
</body>
</html>
