<html>
<head>
<title>Login Details</title>
<style>
h2
{
    text-align:center;
    color:chocolate;
    background-color:aqua;
}
table,th,td
{
    border: 1px solid black;
}
table
{
    width:30%;
    border-collapse: collapse;
}
td
{
    text-align:center;
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
button:hover 
{
    background-color: #66ffcc;
}
</style>
</head>
<body>
<center>
<h2>Login Details</h2>
<form action="Login.php" method="POST">
<table>
<tr>
    <th>User Name :</th>
    <td><input type="text" name="uname" id="uname"></td>
</tr>
<tr>
    <th>Password :</th>
    <td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
    <td colspan=2><input type="submit" value="Search" name="Search"></td>
</tr>
</table>
</form>
</center>
</body>
<?php
if(isset($_POST["Search"]))
{
    $uname =  $_POST["uname"];
    $pwd =  $_POST["pwd"];
    $dg = preg_match('@[0-9]@',$pwd);
    $up = preg_match('@[A-Z]@',$pwd);
    $lw = preg_match('@[a-z]@',$pwd);
    $sc = preg_match('@[^\w]@',$pwd);
    if(!$dg || !$up || !$lw || !$sc || (strlen($pwd)<8) || (strlen($pwd)>16))
    {
        echo "<center><b>Password is not Strong.</b></center>";
    }
    else
    {
        echo "<center><b>Password is Strong.</b></center>";
    }
}
?>
</html>