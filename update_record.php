<?php
	include 'con1.php';
    $id=$_POST['id1'];
	$name=$_POST['name1'];
	$price=$_POST['price1'];
	$desc=$_POST['des1'];
	
   $sql="SELECT * FROM product1 where id='$id'";
   $result=$con->query($sql);
   if($result->num_rows>0){

while($row=$result->fetch_assoc()){

	$filename=$row['img'];
}

   }
   $uploadDir = 'images/'; 
   unlink($uploadDir.$filename);
   $filename=basename($_FILES["file1"]["name"]); 
   $targetPath= $uploadDir.$filename;
   $result=move_uploaded_file($_FILES["file1"]["tmp_name"],$targetPath);

     $sql = "UPDATE product1 SET name='$name',price='$price',des='$desc',img='$filename' WHERE id=$id";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($con);
?>