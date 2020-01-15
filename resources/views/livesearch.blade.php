<!DOCTYPE html>
<html>
 <head>
  <title>Live search in laravel using AJAX</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Live search in laravel using AJAX</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Search Customer Data</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span></h3>


      <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal Code</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $tbl_customer)
            <tr>
                <td>{{ $tbl_customer->CustomerName }}</td>
                <td>{{ $tbl_customer->Address }}</td>
                <td>{{ $tbl_customer->City }}</td>
                <td>{{ $tbl_customer->PostalCode }}</td>
                <td>{{ $tbl_customer->Country }}</td>
               
             
            </tr>
            @endforeach
            </tr>
        </tbody>
    </table>>

     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<div class="col-md-3">
    <form action="{{ url('/livesearch') }}"  method="GET"  >
      
          <div class="form-group">
          <label for="search">search</label>
          <input type="text" name="search" id="objet" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
      
      <button class="btn btn-primary btn-block">search</button>
        </form>

</div>







<script>
$(document).ready(function(){

 fetch_customer_data();

 function fetch_customer_data(query = '')
 {
  $.ajax({
   url:"{{ route('livesearch.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });
});
</script>
