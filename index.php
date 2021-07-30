<html>
  <head>
  <link rel="stylesheet"href="index.css">
  <script src="jquery.min.js"></script>
  <script src="ajax.js"></script>
 <link rel="stylesheet" href="bootstrap.min.css">
  </head>
 <body>
     
    <!-- Login Form--------------------- -->
     <div class="outer">
         <div class="log-left">
            <div class="form-handle">
               <h2>Login Here</h2><br>
        
                <form method="post">
                 <label for="">Username:</label><br>
                 <input type="text"name="user"id="user"><br><br>
                <label for="">Password:</label><br>
                <input type="password"name="pass"id="pass"><br><br>
                 <input type="submit"name="submit"id="submit1"value="Login"><br><br>
                </form>
            </div>
          </div>
        </div>  
   <!-- Navigation Form------------ -->
     <div class=inner-sec>

      <div class="nav">
      <form method="post">
                 
              <button id="btn1">Set Data</button><br>
                </form>
               <form method="post">
        
                <input type="submit"name="btn2"id="btn2"value="Show Product"><br><br>
                 
                </form>


      </div>
      <!-- First Form-------------------- -->
      <div class="form">

      <form id="fupForm" enctype="multipart/form-data">
    <div>
        <label for="name">Product Name:</label>
        <input type="text"  id="name" name="name" placeholder="Product name" required />
    </div>
    <div >
        <label for="email">Price</label>
        <input type="text"  id="price" name="price" placeholder="Enter Price" required />
    </div>
      
    <div >
        <label for="text">Details</label>
        <input type="text" id="des" name="des" placeholder="Enter Details" required />
    </div>

    <div>
        <label for="file">File</label>
        <input type="file"  id="file" name="file" required />
    </div>

    


    <input type="submit" name="submit" value="SUBMIT"/>
</form>

      
      </div>
      <!-- Table Generate -->
      <div class="show_data">
    
    <table class="table table-bordered table-sm" >
    <thead>
      <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Price</th>
		    <th>Detail</th>
        <th>Image</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody id="table">
      
    </tbody>
  </table>
    
</div>



<!-- Update Form -->
<div class="update1">
<form id="fupForm1" enctype="multipart/form-data">
    <div>
    <input type="hidden"id="id1" name="id1" placeholder="Enter name"  />
        <label for="name">Product Name:</label>
        <input type="text"  id="name1" name="name1" placeholder="Enter name"  />
    </div>
    <div >
        <label for="email">Price</label>
        <input type="text"  id="price1" name="price1" placeholder="Enter  Price"  />
    </div>
      
    <div >
        <label for="text">Details</label>
        <input type="text" id="des1" name="des1" placeholder="Enter Details"  />
    </div>

    <div>
        <label for="file">File</label>
        <input type="file"  id="file1" name="file1"/>
        <img src="" alt="">
    </div>

    <div>
        
    </div>
    <input type="submit" name="submit3" value="Update"id="update3">
</form>

      
      </div>

</div>

     
     
 </body> 
</html>