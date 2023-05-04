<!DOCTYPE html>
<html>
<head>
	<title>My Web Page</title>
	<style>
		.right-button {
            display: inline-block;
  border-radius: 4px;
  background-color: green;
  border: none;
  color: white;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
			float: right;
		}
	</style>
</head>
<body>
	<?php include('dashboard.php');?>
	<a href="upload_image.php"><button class="right-button">Add new</button></a>
    <?php
include('connection.php');

// Retrieve data from the database
$query = "SELECT * FROM images";
$result = $conn->query($query);

?>

<body>
	<table border=1>
		<thead>
			<tr>
            <th>ID</th>
				<th>Title</th>
				<th>Name</th>
				<th>Description</th>
				<th>Image</th>
                <th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
                <td><?php echo $row['id']; ?></td>
					<td><?php echo $row['head']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<?php if (is_file($row['image'])): ?>
						<td><img src="<?php echo $row['image']; ?>"></td>
					<?php else: ?>
						<td>Image not found</td>
                        <td>Delete</td>
					<?php endif; ?>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
</body>
</html>


</body>
</html>
