<html>
<head>
<title>PHP File Upload</title>
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
input[type="file"]
{
    text-align: center;
    font-weight: bold;
	cursor: pointer;
	background-color:#ff6666;
}
input[type="submit"]:hover
{
  background-color: #66ffcc;
}
</style>
</head>
<body>
<h3>PHP File Upload</h3>
<center>
<form action="File.php" method="post" enctype="multipart/form-data">
<label for="file">Select a file to Upload :</label>
<input type="file" name="fileToUpload" id="fileToUpload"><br><br>
<input type="submit" value="Upload File" name="submit">
</form>
</center>
</body>
</html>