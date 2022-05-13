<?php 
include 'connection.php';
$sql=$db->prepare("SELECT * FROM item");
$sql->execute();
?>
<a href="add.php">Add Data</a>
<table> 
	<th>ID</th>
	<th>Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Photo</th>
	<th>Edit</th>
	<th>Delete</th>

<?php 
while($row=$sql->fetch(PDO::FETCH_ASSOC)){
    extract($row);
    
?>
	<tr>
		<td><?php echo $IID; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $category; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $photo; ?></td>
		<td><a href="edit.php?eid=<?php echo $IID; ?>">Edit</a></td>
		<td><a href="delete.php?did=<?php echo $IID; ?>">Delete</a></td>
	</tr>
<?php 
}
?>
</table>