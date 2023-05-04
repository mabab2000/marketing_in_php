<?php
include('menu.php');
?>
<html>
<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 315px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}
div.desc {
    width:100%;
  padding: auto;
  background-color:green;
  color:white;
  font-size:23px;
  text-align: center;
}

div.head {
  padding: auto;
  font-size:30px;
  text-align: center;
}
</style>
</head>
<body>

<?php
include('connection.php');
// Retrieve images from database
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

// Display images and descriptions in table cells

while($row = $result->fetch_assoc()) {
   
    echo '<div class="gallery">';
    echo '<div class="head">'.$row['head'].'</div>';
    echo '<a target="_blank" href=""><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" /></a>';
    echo '<div class="desc">'.$row['description'].'</div>';
    echo '</div>';
    
}

?>

</body>
</html>
