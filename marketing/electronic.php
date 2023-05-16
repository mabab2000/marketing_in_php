<link href="style.css" rel="stylesheet">

<body>
	
    <?php
include('connection.php');

// Retrieve data from the database
$query = "SELECT * FROM images";
$result = $conn->query($query);

?>


<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<div class="overflow-x-auto">
<table >
    <thead >
      <tr>
        <th >
          Id
        </th>
		<th >
          Title
        </th>
		<th >
          Name
        </th>
        <th width=20%>
          Description
        </th>
        <th >
          Type
        </th>
        <th colspan=2 >
         Action 
        </th>
        <th class="px-4 py-2"></th>
      </tr>
    </thead>

	<tbody>
			<?php while ($row = $result->fetch_assoc()): ?>
				<tr>
                <td ><?php echo $row['id']; ?></td>
					<td><?php echo $row['head']; ?></td>
					<td ><?php echo $row['name']; ?></td>
					<td ><?php echo $row['description']; ?></td>
					<td ><?php echo $row['type']; ?></td>
						<td>
						
						<a
  class="inline-block rounded border border-indigo-600 bg-red-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
  href="delete.php?id=<?php echo $row['id'];?>"
>
  Delete
</a>		
<a
  class="inline-block rounded border border-indigo-600 bg-green-600 px-12 py-3 text-sm font-medium text-green hover:bg-green-500 hover:text-indigo-600 focus:outline-none focus:ring active:text-indigo-500"
  href="prod.php?id=<?php echo $row['id'];?>"
>
  view
</a>			

          
        </td>
                        
					
				</tr>
			<?php endwhile; ?>
		</tbody>
    
  </table>
</div>


	</table>
</body>
</html>


</body>
</html>
