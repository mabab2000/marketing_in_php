<link href="style.css" rel="stylesheet">
<?php
include('header.php');
?>
<html>
<head>
<style>
div.gallery {
  margin: 10px;
  border: 1px solid #ccc;
  float: center;
  width: 430px;
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
    font-weight: bold;
  padding: auto;
  font-size:30px;
  color:blue;
  text-align: center;
}
</style>
</head>
<body>


<section>
  <div class="max-w-screen-xl px-4 py-8 mx-auto sm:px-6 sm:py-12 lg:px-8">
   
    </header>
   
    <?php
include('connection.php');
// Retrieve images from database
$sql = "SELECT * FROM images";
$result = $conn->query($sql);
?>

<ul class="grid gap-4 mt-8 sm:grid-cols-2 lg:grid-cols-4">
  <?php while($row = $result->fetch_assoc()) { ?>
  <li>
  <p style=" font-weight:bold;font-size: large;color:blue;"><?php echo $row['head']; ?></p>
    <a href="prod.php?id=<?php echo $row['id'];?>" class="block overflow-hidden group">
      <img src="data:image/jpeg;base64,<?php echo base64_encode($row['image']); ?>" alt="" width=100% height=50% />
      <div class="relative pt-3 bg-white">
        <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
        
<p><p><p>
        <p style="font-weight:bold;font-size: large;"><?php echo $row['description']; ?></p>
        </h3>
        <p class="mt-2">
          <span class="sr-only">  <?php echo $row['description']; ?> </span>
         
        </p>
        <p>
         
        </p>
      </div>
    </a>
  </li>
  <?php } ?>
</ul>
<?php include('footer.php');?>
  </div>
    
  </section>

</body>
</html>
