<?php
 include 'con1.php';

$id=$_REQUEST['id'];
    $sql="SELECT * FROM product1 where id='$id'";
    $result=$con->query($sql);
    if($result->num_rows>0){
 
 while($row=$result->fetch_assoc()){
 
     $name=$row['name'];
     $price=$row['price'];
     $des=$row['des'];
     $img=$row['img'];
    
     
 }
 
    }
    
      $sql ="INSERT INTO user_add_to_cart(id,name1,price1,des1,img1) VALUES ('".$id."','".$name."','".$price."','".$des."','".$img."')";
     $result=mysqli_query($con, $sql); 
     if($result){
        echo"Item Add Success";
     }   
     else{

        echo"No  Add items";
     }
?>