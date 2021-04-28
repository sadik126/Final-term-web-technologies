 
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:loginpage.php");
	exit();
}
?>





<?php

include 'header.php';
?>
<?php
include'sidebar.html';
?>
<div class="container">
  <div class="row justify-content-center">
  <div class="table-responsive mt-2 col-lg-10 ">
    <h1>
      Food menu
    </h1>
    <div align="center">

      <input type="text" name="search" id="search" placeholder="search items" class="form-control">
      
    </div>
    <ul class="list-group" id="result"></ul>
    <table class="table table-bordered table-striped" id="product_table">
      <tr>
        <th>name</th>
         <th>price</th>
         <th>discount</th>
         <th>image</th>
         

      </tr>
      
    </table>
  </div>
</div>
</div>
<script>
  // $(document).ready(function(){
    
  // });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $.getJSON("myfood.json",function(data){
       var product_data = '';

       $.each(data,function(key,value){
           product_data += '<tr>';
           product_data +='<td>'+value.name+'</td>';
       
           product_data +='<td>'+value.price+' ৳ </td>';

           product_data +='<td>'+value.discount+' ৳ </td>';

          product_data +='<td><img src="'+value.image+'" height="40" width="40"/> </td>';



           product_data += '<tr>';

        });

       $('#product_table').append(product_data);
    });


     load_number();
        
function load_number(){
        $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
              $("#cart-item").html(response);
          }
        });




          
       }

  });


        </script>
 
<script>
$(document).ready(function(){
 $.ajaxSetup({ cache: false });
 $('#search').keyup(function(){
  $('#result').html('');
  $('#state').val('');
  var searchField = $('#search').val();
  var expression = new RegExp(searchField, "i");
  $.getJSON('myfood.json', function(data) {
   $.each(data, function(key, value){
    if (value.name.search(expression) != -1 || value.price.search(expression) != -1)
    {
     $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /> '+value.name+' | <span class="text-muted">'+value.price+'</span></li>');
    }
   });   
  });
 });
 
 $('#result').on('click', 'li', function() {
  var click_text = $(this).text().split('|');
  $('#search').val($.trim(click_text[0]));
  $("#result").html('');
 });
});
</script>
        <script>
        
       
       $("#search").on("keyup",function(){


       var search_term = $(this).val();

       $.ajax({

        url:"action.php",
        type:"post",
        data:{search:search_term},
        success:function(data){
          $("#product_table").html(data);
        }

       });
        

        });



       </script>
                

  <?php include 'footerpro.php' ?>

