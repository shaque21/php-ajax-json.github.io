<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP with jQuery Ajax & JSON</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    #load_data{
      background-color: #a2b9bc;
      
    }
  </style>
</head>
<body>
  
<div class="container">
  <h1 class="text-uppercase text-center text-primary bg-dark">PHP with jQuery Ajax & JSON</h1>
</div>
<div id = "load_data" class="container p-3 table-responsive">
  <table id="load_table" class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
  </table>
</div>
<script>
  $(document).ready(function(){

    //when want to show particular data
    // $.ajax({
    //   url : "fetch_json.php",
    //   type : "POST",
    //   data : {id:"2"},
    //   dataType : "JSON",
    //   success : function(data){
    //     "<tbody>"
          
        
    //     $.each(data, function(key, value){
    //       $("#load_table").append("<tr><td>" + value.id + "</td><td>" + value.title + "</td><td>" + value.description + "</td></tr>"  );
    //     })
          
    //     "</tbody>"
        
    //     //console.log(data);
    //   }
    // });
    //another way to show data. This is shortcut way to show all records not particular.
    $.getJSON(
      "fetch_json.php",
      function(data){
        "<tbody>"
          
        
        $.each(data, function(key, value){
          $("#load_table").append("<tr><td>" + value.id + "</td><td>" + value.title + "</td><td>" + value.description + "</td></tr>"  );
        })
          
        "</tbody>"
        
        //console.log(data);
      }
      )


  });
</script>
</body>
</html>
