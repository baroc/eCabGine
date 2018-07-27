<!doctype html>
<html lang="en">
  <head>
    <!-- <Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" 
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" 
          crossorigin="anonymous">

    <title>Admin page!</title>
  </head>
  <body>
     
     <div class="container" style="margin-top:30px">  
     <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">My Admin page</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="btn-group-vertical">
            <ul class="navbar-nav ml-auto"></ul>
                </div>
     </nav><br><br>
                <div class="alert alert-success">
                     <h5> Welcome to your main admin page! </h5>
                </div>
                     <br><br>
                       <div class="container" style="margin-top:30px">
              <div class="btn-group btn-group-justified">             
             <div class="btn-group-vertical">
                 <ul >
              
                    <div class="btn-group">
                   <a href="http://www.google.com" class="btn btn-primary btn-lg">Medical check-up</a> 
               </div>
                     <div class="btn-group">
                   <a href="#" class="btn btn-default btn-lg">Laboratory tests</a> 
                </div>
                     <div class="btn-group">
                   <a href="<?php echo site_url('Admin_controller/user_list');?>"class="btn btn-default btn-lg">Users list</a> 
                   </div>
                <div class="btn-group">
                   <a href="#" class="btn btn-default btn-lg">Practice administration</a> 
                </div>
            </ul>
                </div>
              </div>

                       
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" 
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" 
    crossorigin="anonymous"></script>
    
  </body>
</html>
