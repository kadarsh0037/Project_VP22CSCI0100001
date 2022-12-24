<html>
<head>
<title>String Palindrome</title>
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
<h3>String Palindrome</h3>
<form action="THREE.php" method="post">
<label for="str">Enter a String:</label>
<input type="text" name="str" size="50"><br><br>
<input type="submit" value="Calculate" name="btn">
</form>
</center>
<?php 
if(isset($_POST["btn"]))
{

	$str = $_POST["str"];
    $rev = strrev($str);
    if($str == $rev)
    {
        echo("<center>".$str." is a Palindrome</center>");
    }
    else
    {
        echo("<center>".$str." is not a Palindrome</center>");
    }

}
?>
</body>
</html>
