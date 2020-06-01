<html>
<head>
<title>cms example</title>
<style type="text/css">
#container{
padding:100px 30px 100px 150px;	
}
a{
	text-decoration:none;
	color:red;
	font-size:25px;
}
ul li{
	list-style-type:none;
	float:left;
	padding:20px 150px 20px 50px;
	background-color:#003399;
}
th{
	
}
table{
	border:2px solid black;
	
}

</style>
</head>
<body>
<div id="container">
<ul>
<li><a href="index.php">home</a></li>
<li><a href="news.php">news</a></li>
<li><a href="category.php">category</a></li>
</ul>
</div>
<a href="insert_new.php">Add News</a>
</body>
<form action="#" method="POST">
title:
<input type="text" name="title"/><br/>
summary:
<input type="text" name="summary"/><br/>
description:
<input type="text" name="des"/><br/>
<input type="submit" name="submit" value="insert"/><br/>
</form>
</html>

