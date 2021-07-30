<?php
include'con1.php';
$result = mysqli_query($con,"SELECT * FROM product1 ");
?>
<!DOCTYPE html>
<html>
 <head>  
 <style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}

 
 
 
 </style>
   <link rel="stylesheet" href="bootstrap.min.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table>
  
  <tr>
    <td>Product Id</td>
    <td>Product Name</td>
    <td>Price</td>
    <td>Description</td>
    <td>Image</td>
    <td>Action</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td><?php echo $row["des"]; ?></td>
	<td><img src="images/<?=$row['img'];?>"height="50px";width="50px"></td>
    <td><a href="add_to_cart.php?id=<?php echo $row["id"]; ?>">Add To Cart</a></td>>

			
</tr>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>
