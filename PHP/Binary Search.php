<html>
<head>
<title>Binary Search</title>
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
input[type="submit"]:hover
{
  background-color: #66ffcc;
}
</style>
</head>
<body>
<center>
<h3>Binary Search</h3>
<form action="Binary Search.php" method="post">
<label for="num">Enter Ten Numbers:</label>
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
<label for="search">Enter Search Value:</label><br><br>
<input type="number" name="search"><br><br>
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
    $key = $_POST["search"];
    $len = count($arr);
    $res = false;
    $low = 0;
    $high = count($arr) - 1;
    while ($low <= $high) 
    {
        $mid = floor(($low + $high) / 2);
        if($arr[$mid] == $key) 
        {
            $res = true;
        }
  
        if ($key < $arr[$mid]) 
        {
            $high = $mid -1;
        }
        else 
        {
            $low = $mid + 1;
        }
    }
    if($res == true)
    {
        echo("<center>Element found</center>");
    }
    else{
        echo("<center>Element not found</center>");
    }
}
?>
</body>
</html>
