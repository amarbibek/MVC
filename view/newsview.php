<html>
<body>
<table>
	<tr>
		<td>id</td>
		<td>title</td>
		<td>summary</td>
		<td>description</td>
		<td>action</td>
	</tr>
	<?php foreach($result as $row){ ?>
	<tr>
	<td><?php echo $row['id']; ?></td>
     <td><?php       echo $row['title'];?></td>
	<td><?php		echo $row ['summary']; ?></td>
	<td><?php		 echo $row ['des'];?> </td>
	<td>
	<?php echo "<a href='index.php?controller=Admincontroller&action=edit&id=$row[id]'>edit</a>";?>
	<?php echo "<a href='index.php?controller=Admincontroller&action=delete&id=$row[id]'>delete</a>";?>
	</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>