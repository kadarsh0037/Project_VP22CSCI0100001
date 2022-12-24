<html>
<head>
<title>Matrix Addition</title>
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
<h3>Matrix Addition</h3>
<form action="FIVE.php" method="post">
<label for="num">Enter Elements of First Matrix:</label><br><br>
<input type="number" name="num1" size="5">
<input type="number" name="num2" size="5">
<input type="number" name="num3" size="5"><br><br>
<input type="number" name="num4" size="5">
<input type="number" name="num5" size="5">
<input type="number" name="num6" size="5"><br><br>
<input type="number" name="num7" size="5">
<input type="number" name="num8" size="5">
<input type="number" name="num9" size="5"><br><br>
<label for="num">Enter Elements of Second Matrix:</label><br><br>
<input type="number" name="num10" size="5">
<input type="number" name="num11" size="5">
<input type="number" name="num12" size="5"><br><br>
<input type="number" name="num13" size="5">
<input type="number" name="num14" size="5">
<input type="number" name="num15" size="5"><br><br>
<input type="number" name="num16" size="5">
<input type="number" name="num17" size="5">
<input type="number" name="num18" size="5"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $arr1 = array();
    $arr2 = array();
    $arr3 = array();
    $arr1[0][0] = $_POST["num1"];
    $arr1[0][1] = $_POST["num2"];
    $arr1[0][2] = $_POST["num3"];
    $arr1[1][0] = $_POST["num4"];
    $arr1[1][1] = $_POST["num5"];
    $arr1[1][2] = $_POST["num6"];
    $arr1[2][0] = $_POST["num7"];
    $arr1[2][1] = $_POST["num8"];
    $arr1[2][2] = $_POST["num9"];

    $arr2[0][0] = $_POST["num10"];
    $arr2[0][1] = $_POST["num11"];
    $arr2[0][2] = $_POST["num12"];
    $arr2[1][0] = $_POST["num13"];
    $arr2[1][1] = $_POST["num14"];
    $arr2[1][2] = $_POST["num15"];
    $arr2[2][0] = $_POST["num16"];
    $arr2[2][1] = $_POST["num17"];
    $arr2[2][2] = $_POST["num18"];

    echo("<center>");
    echo("Matrix 1: <br>");
    for($i=0;$i<count($arr1);$i++)
    {
        for($j=0;$j<count($arr1[0]);$j++)
        {
            echo($arr1[$i][$j]." ");
        }
        echo("<br>");
    }
    echo("Matrix 2: <br>");
    for($i=0;$i<count($arr2);$i++)
    {
        for($j=0;$j<count($arr2[0]);$j++)
        {
            echo($arr2[$i][$j]." ");
        }
        echo("<br>");
    }
    for($i=0;$i<count($arr1);$i++)
    {
        for($j=0;$j<count($arr1[0]);$j++)
        {
            $arr3[$i][$j] = $arr1[$i][$j]+$arr2[$i][$j];
        }
    }
    echo("Sum of Matrices: <br>");
    for($i=0;$i<count($arr3);$i++)
    {
        for($j=0;$j<count($arr3[0]);$j++)
        {
            echo($arr3[$i][$j]." ");
        }
        echo("<br>");
    }
    echo("</center>");
}
?>
</body>
</html>
