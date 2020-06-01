<html>
<head>
<title>cms example</title>
<style type="text/css">

a{
	text-decoration:none;
	color:red;
	font-size:25px;
}

</style>
</head>
<body>
<a href="insert_new.php">Add News</a>
</body>
<form action="index.php?controller=Admincontroller&action=newsinsert" method="POST">
title:
<input type="text" name="title"/><br/>
summary:
<input type="text" name="summary"/><br/>
description:
<input type="text" name="des"/><br/>
<input type="submit" name="submit" value="insert"/><br/>
</form>
</html>

