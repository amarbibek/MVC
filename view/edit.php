<html>
<body>
<form action="index.php?controller=Admincontroller&action=update" method="post">
<?php foreach($result as $row){
	?>

title:
<input type="text" name="title" value="<?php echo $row['title'] ?>"></br>
summary:
<input type="text" name="summary" value="<?php echo $row['summary'] ?>"></br>
description:
<input type="text" name="des" value="<?php echo $row['des'] ?>"></br>
<input type="submit" name="update" value="update">
<input type="hidden" name="hidden" value="<?php echo $id; ?>"><br/>
<?php
}
?>
</form>
<body>
</html>