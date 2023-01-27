<?php 
session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login form</title>
    <style>
        body {
            font-size: 20px;
        }
    </style>
  </head>
  <body style="background-color: #DBEEF2;">
    <div>
        <section  style="margin-top:5px">
  <div class="container">
    <div class="row">
    <a href="details.php" class="btn btn-light border mb-3 fs-4" style="width:520px;opacity:0.8;color:gray; margin-left:400px; font-weight:bold">Show users</a>
      </div>
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body">
            <h1 style="margin-left:30px">User Registiration Form</h1>
               
                    <div class="card-body">
                    <form action="code.php"  method="POST">
                        <label for="name">Name</label><br>
                        <input type="text" class="form-control" id="name" name="name" style="height:60px; font-size:30px"><br>
                        <label for="email">Email</label><br>
                        <input type="email" class="form-control" id="email" name="email" style="height:60px; font-size:30px"><br>
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" value="M" > Male<br>
                        <input type="radio" name="gender" value="F"> Female<br><br>
                        <input type = "checkbox" id="agree" name = "agree" value=<?php $agree?>/> Receive email from us <br><br>
                        <div class="container ">
                        <div class="row">
                       <input type ="submit" name="add" class="btn btn-primary" style="border-raduis:10px; font-size:30px "/> 
                       </div> 
                      </div>
                      </form>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
           </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>