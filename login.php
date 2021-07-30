<?php
$con=mysqli_connect("localhost","root","","admin");


$uname =$_POST['username'];
$password =$_POST['password'];

$sql="SELECT * FROM login";
$res=mysqli_query($con,$sql);
if($res->num_rows >0){
   while($row=$res->fetch_assoc()){
    if($row['user']==$uname &&$row['password']==$password){

        echo json_encode(10);
    }else{
        echo json_encode(20);
    }
}
}

mysqli_close($con);
?>