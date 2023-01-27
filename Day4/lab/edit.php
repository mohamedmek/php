<?php 
session_start();
require '/dbconnection.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Edit</title>
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
                    <h1>User Edit Form</h1>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id'])){
                    $user_id=mysqli_real_escape_string($connect,$_GET['id']);
                    $query="SELECT * FROM users WHERE ID='$user_id'";
                    $query_run=mysqli_query($connect,$query);
                    if(mysqli_num_rows($query_run)>0){
                     $user=mysqli_fetch_array($query_run);
                     ?>
                     <form action="code.php"  method="POST">
                     <input type="hidden" name="user_id" value="<?= $user['id'];?>">
                     <label for="name">Name</label><br>
                     <input type="text" class="form-control" id="name" name="name" value="<?=$user['Name'];?>" style="height:60px; font-size:30px"><br>
                     <label for="email">Email</label><br>
                     <input type="email" class="form-control" id="email" name="email" value="<?=$user['Email'];?>" style="height:60px; font-size:30px"><br>
                     <label for="gender">Gender</label><br>
                     <input type="radio" name="gender" <?php if ($user['Gender']=="M") echo " checked"; ?> value="M"/> Male<br>
                     <input type="radio" name="gender" <?php if ($user['Gender']=="F") echo " checked"; ?> value="F"/> Female<br><br>
                     <input type = "checkbox" id="agree" name = "agree" <?php if ($user['Mail_Status']=="yes") echo " checked"; ?>/> Receive email from us <br><br>
                     <input type ="submit" name="save" class="btn btn-primary" style="border-raduis:10px; font-size:30px " value="Save"/>   
                 </form>
                
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