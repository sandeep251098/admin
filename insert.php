<?php
       include 'con1.php'; 
$uploadDir = 'images/'; 

    // Get the submitted form data 
    $name = $_POST['name']; 
    $price = $_POST['price']; 
    $des = $_POST['des']; 
    
   
     
    // submitted data is not empty 
    if(!empty($name) && !empty($price) && !empty($des)){ 
        
       
            if(!empty($_FILES["file"]["name"])){ 
                 
                
                $fileName = basename($_FILES["file"]["name"]); 
                $targetFilePath = $uploadDir . $fileName; 
                 
                 $uploadStatus=1;
               
                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){ 
                        $uploadedFile = $fileName; 
                    
                    }else{ 
                        $uploadStatus = 0; 
                        $response['message'] = 'Sorry, error Not uploading your file.'; 
                    } 
                
            } 
             
            if($uploadStatus == 1){ 
            
         
                 
        
                $insert = $con->query("INSERT INTO product1(name,price,des,img) VALUES ('".$name."','".$price."','".$des."','".$uploadedFile."')"); 
                 
                if($insert){ 
                    
                  return 1;
                } 
            } 
        } 
    
    else{ 
        
         echo 0;
    } 

 

?>