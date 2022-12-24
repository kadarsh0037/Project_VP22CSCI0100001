<html>
<head>
<title>Display Identity Matrix</title>
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
<h3>Display Identity Matrix</h3>
<form action="TEN.php" method="post">
<label for="rows">Enter Number of Rows:</label>
<input type="number" name="rows" size="5"><br><br>
<label for="cols">Enter Number of Columns:</label>
<input type="number" name="cols" size="5"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{
    $arr = array();
    $r = $_POST["rows"];
    $c = $_POST["cols"];
    echo("<center>");
	for($i=0;$i<$r;$i++)
	{
		for($j=0;$j<$c;$j++)
		{
			if($i == $j)
			{
				$arr[$i][$j] = 1;
			}
			else
			{
				$arr[$i][$j] = 0;			
			}
		}
	}
    echo("Identity Matrix : <br>");
    for($i=0;$i<$r;$i++)
    {
        for($j=0;$j<$c;$j++)
        {
            echo($arr[$i][$j]." ");
        }
        echo("<br>");
    }
    echo("</center>");
}
?>
</body>
</html>
