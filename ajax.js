$(document).ready(function(){

// login with ajax

  $("#submit1").click(function(e){
    e.preventDefault();
  
    var username = $("#user").val().trim();
    var password = $("#pass").val().trim();
 
if(username!="" && password!=""){
    $.ajax({
        url: "login.php",
        type: "POST",
        data: {
            username: username,
            password: password,
            			
        },
        cache: false,
        success: function(resultset){
        //    console.log(resultset);
            
            
            var resultset= JSON.parse(resultset);
            
            if(resultset==10)
            {
             
              alert(" Login Success !");
              $(".log-left").hide();
              $(".inner-sec").show();
              $(".outer").hide();
             
            }
            else if(resultset==20){
               alert("Incorrect Usename or Password");
            }
            
        }
    });
}
else{
    alert('Please fill all the field !');
}
});

//  insert Opration

$("#fupForm").on('submit', function(e){
  e.preventDefault();
  $.ajax({
      type: 'POST',
      url: 'insert.php',
      data: new FormData(this),
      dataType: 'json',
      contentType: false,
      cache: false,
      processData:false,
     
      success: function(response){ //console.log(response);
        
          if(response == 1){
             alert("Data Insert");
             $(".inner-sec").hide();
              $(".inner-sec").show();
              $(".form").hide();
          
          }else{

            alert("Not Inserted");
          }
         
      }
  });
});
$("#btn1").click(function(e){
  e.preventDefault()

$(".form").show();

});
$("#btn2").click(function(e){
  $(".form").hide();
  $(".nav").hide();
  e.preventDefault();
  $(".show_data").show();

  
  $.ajax({
		url: "show_record.php",
		type: "POST",
		cache: false,
		success: function(data_Result){
			$('#table').html(data_Result); 
		}
    });
  
});     

});
$(document).ready(function(e){

  //Edit button perform 

  $(document).on('click','.update2',function(e){
    
    e.preventDefault();
     $(".update1").show();       
    

var id=$(this).attr("data-id");
var name=$(this).attr("data-name");
var price=$(this).attr("data-price");
var des=$(this).attr("data-des");
var img=$(this).attr("data-img");
$('#id1').val(id);
$('#name1').val(name);
$('#price1').val(price);
$('#des1').val(des);
$('#file1').val(img);
});
  //  Update Data button

$(document).on("click", "#update3", function(a){ 
 
  a.preventDefault();
  var ty=$("#fupForm1")[0];
  $(".update1").hide();
  $(".show_record").show();
     
var edit_data=new FormData(ty);
  
$.ajax({
url: "update_record.php",
type: "POST",
cache: false,
contentType:false,
processData:false,
data:edit_data,
success: function(data_Result){
   console.log(data_Result);
   showdata();
 
}
});
}); 

// show data function
function showdata()
   {
    $.ajax({
      url:"show_record.php",
      type: "POST",
      cache: false,
      success: function(data_Result){
        $('#table').html(data_Result); 
        console.log(data_Result);
      }
    });
   }
   
   
});
    


