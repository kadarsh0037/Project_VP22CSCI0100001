<html>
<head>
<title>Maximum and Minimum Value of an Array</title>
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
<h3>Maximum and Minimum Value of an Array</h3>
<form action="FIFTEEN.php" method="post">
<label for="num">Enter Array Elements:</label>
<br><br>
<input type="number" name="num1" size="5">
<input type="number" name="num2" size="5">
<input type="number" name="num3" size="5">
<input type="number" name="num4" size="5">
<input type="number" name="num5" size="5"><br><br>
<input type="number" name="num6" size="5">
<input type="number" name="num7" size="5">
<input type="number" name="num8" size="5">
<input type="number" name="num9" size="5">
<input type="number" name="num10" size="5"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $arr = array();
	$arr[0] = $_POST["num1"];
	$arr[1] = $_POST["num2"];
	$arr[2] = $_POST["num3"];
    $arr[3] = $_POST["num4"];
    $arr[4] = $_POST["num5"];
    $arr[5] = $_POST["num6"];
    $arr[6] = $_POST["num7"];
    $arr[7] = $_POST["num8"];
    $arr[8] = $_POST["num9"];
    $arr[9] = $_POST["num10"];
    for($i=0;$i<count($arr)-1;$i++)
	{
		for($j=$i+1;$j<count($arr);$j++)
		{
			if($arr[$i]>$arr[$j])
			{
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
    echo("<center>");
    echo("Maximum Value = ".$arr[count($arr)-1]."<br>");
    echo("Minimum Value = ".$arr[0]);
    echo("</center>");
}
?>
</body>
</html>
