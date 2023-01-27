<?php 
require '/dbconnection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User details</title>
    <style>
        body {
            font-size: 20px;
        }
    </style>
  </head>
  <body style="background-color: #DBEEF2;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                    <h1>User details</h1>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id'])){
                    $user_id=mysqli_real_escape_string($connect,$_GET['id']);
                    $query="SELECT * FROM users WHERE id='$user_id'";
                    $query_run=mysqli_query($connect,$query);
                    if(mysqli_num_rows($query_run)>0){
                     $user=mysqli_fetch_array($query_run);
                     ?>
                        Name: <p name="name" ><?=$user['Name'];?></p><br>
                        Email: <p name="email"><?=$user['Email'];?></p><br>
                        Gender: <p name="gender" ><?=$user['Gender'];?></p><br>
                        Mail stauts: <p name="agree" ><?=$user['Mail_Status'];?></p>
                 <?php
                    }else{
                        echo "User not found";
                    }
                    }
                    ?>
                
                </div>
              </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>