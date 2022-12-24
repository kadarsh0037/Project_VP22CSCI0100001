<html>
<head>
<title>Fibonacci Series</title>
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
<h3>Fibonacci Series</h3>
<form action="THIRTEEN.php" method="post">
<label for="num">Enter a Number:</label>
<input type="number" name="num" size="10"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $num = $_POST["num"];
    $a = 0;
    $b = 1;
    $c = 0;
    echo("<center>");
    echo("Fibonacci Series upto ".$num." terms is :<br>");
    for($i=1;$i<=$num;$i++)
    {
        if($i == 1)
        {
            echo $a." ";
            continue;
        }
        if($i == 2)
        {
            echo $b." ";
            continue;
        }
        $c = $a+$b;
        $a = $b;
        $b = $c;
        echo $c." ";
    }
    echo("</center>");
}
?>
</body>
</html>
