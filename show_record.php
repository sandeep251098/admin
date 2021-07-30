<?php
//$con=mysqli_connect("localhost","root","","admin");
	 include 'con1.php';
	$sql = "SELECT * FROM product1";
	$result = $con->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
?>	
		<tr>
            <td><?=$row['id'];?></td>
			<td><?=$row['name'];?></td>
			<td><?=$row['price'];?></td>
			<td><?=$row['des'];?></td>
			
			<td><img src="images/<?=$row['img'];?>"height="50px";width="50px"></td>
			
			<td><button type="button" class="update2 btn-success btn-sm" data-toggle="modal" 
            data-keyboard="false" data-backdrop="static" data-target="#update_country"
			data-id="<?=$row['id'];?>"
			data-name="<?=$row['name'];?>"
			data-price="<?=$row['price'];?>"
			data-des="<?=$row['des'];?>"
			data-img="<?=$row['img'];?>
			">Edit</button>
            </td>
		</tr>
<?php	
	}
	}
	else {
		echo "<tr >
		<td colspan='5'>No Result found !</td>
		</tr>";
	}
	mysqli_close($con);
?>
