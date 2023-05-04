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
	<a href=""><button class="right-button">Add new</button></a>
	
</body>
</html>
