<html>
<head>
<title>Display Even and Odd Elements</title>
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
<h3>Display Even and Odd Elements</h3>
<form action="ELEVEN.php" method="post">
<label for="num">Enter Elements of Matrix:</label><br><br>
<input type="number" name="num1" size="5">
<input type="number" name="num2" size="5">
<input type="number" name="num3" size="5"><br><br>
<input type="number" name="num4" size="5">
<input type="number" name="num5" size="5">
<input type="number" name="num6" size="5"><br><br>
<input type="number" name="num7" size="5">
<input type="number" name="num8" size="5">
<input type="number" name="num9" size="5"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $arr1 = array();
    $arr1[0][0] = $_POST["num1"];
    $arr1[0][1] = $_POST["num2"];
    $arr1[0][2] = $_POST["num3"];
    $arr1[1][0] = $_POST["num4"];
    $arr1[1][1] = $_POST["num5"];
    $arr1[1][2] = $_POST["num6"];
    $arr1[2][0] = $_POST["num7"];
    $arr1[2][1] = $_POST["num8"];
    $arr1[2][2] = $_POST["num9"];
    $ec = 0;
    $oc = 0;
    echo("<center>");
    echo("Even Elements : <br>");
    for($i=0;$i<count($arr1);$i++)
	{
		for($j=0;$j<count($arr1[0]);$j++)
		{
			if($arr1[$i][$j] %2 == 0)
			{
				echo($arr1[$i][$j]." ");
                $ec++;
			}
		}
	}
    echo("<br>");
    echo("Odd Elements : <br>");
    for($i=0;$i<count($arr1);$i++)
	{
		for($j=0;$j<count($arr1[0]);$j++)
		{
			if($arr1[$i][$j] %2 != 0)
			{
				echo($arr1[$i][$j]." ");
                $oc++;
			}
		}
	}
    echo("<br>");
    echo("Count of Even Elements = ".$ec."<br>");
    echo("Count of Odd Elements = ".$oc."<br>");
    echo("</center>");
}
?>
</body>
</html>
