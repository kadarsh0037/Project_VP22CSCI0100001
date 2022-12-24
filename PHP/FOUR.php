<html>
<head>
<title>Sort a String Array</title>
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
<h3>Sort a String Array</h3>
<form action="FOUR.php" method="post">
<label for="str">Enter five Strings:</label>
<input type="text" name="str1" size="10">
<input type="text" name="str2" size="10">
<input type="text" name="str3" size="10">
<input type="text" name="str4" size="10">
<input type="text" name="str5" size="10"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{

	$str[0] = $_POST["str1"];
    $str[1] = $_POST["str2"];
    $str[2] = $_POST["str3"];
    $str[3] = $_POST["str4"];
    $str[4] = $_POST["str5"];
    $len = count($str);
    echo("<center>Before Sorting, Array of Strings is: </center>");
    echo("<center>");
    for($i=0;$i<5;$i++)
    {
        echo ($str[$i]." ");
    }
    echo("</center>");
    for($i=0;$i<$len-1;$i++)
    {
        for($j=($i+1);$j<$len;$j++)
        {
            if($str[$i]>$str[$j])
            {
                $k = $str[$j];
                $str[$j] = $str[$i];
                $str[$i] = $k;
            }
        }
    }
    echo("<center>After Sorting, Array of Strings is: </center>");
    echo("<center>");
    for($i=0;$i<5;$i++)
    {
        echo ($str[$i]." ");
    }
    echo("</center>");
}
?>
</body>
</html>
