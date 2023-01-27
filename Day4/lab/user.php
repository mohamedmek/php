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
    <title>Users details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <style>
      @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
      	td,th {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 8px;
	}

	tr:nth-child(even) {
		background-color: #dddddd;
    
	}
    </style>
</head>
  <body style="background-color: #DBEEF2;;">
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header">
                    <span style="font-weight:bold; font-size:30px">User details</span>
                    <a href="login.php" class="btn btn-light border mb-4 float-end">Login</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-stripe">
                    <thead>
                     <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Mail stauts</th>
                      <th>Actions</th>
                     </tr>
                    </thead>
                     <tbody>
                      <?php $query= "SELECT * FROM users";
                            $query_run= mysqli_query($connect,$query);
                            if(mysqli_num_rows($query_run)>0){
                              foreach($query_run as $user){
                                ?>
                                <tr>
                                <td><?= $user['id']; ?></td>
                                <td><?= $user['Name']; ?></td>
                                <td><?= $user['Email']; ?></td>
                                <td><?= $user['Gender']; ?></td>
                                <td><?= $user['Mail_Status']; ?></td>
                                <td>
                                <a href="view.php?id=<?= $user['id']; ?>"><i class="bi bi-eye" style="color:blue"></i></a> 
                                <a href="edit.php?id=<?= $user['id']; ?>"><i class="bi bi-pencil-square"  style="color:green"></i></a>
                                <form action="code.php" method="POST">
                                <button type="submit" name="delete" value="<?=$user['id'];?>" style="padding:0px; border:0px; background-color:inherit"><i class="bi bi-trash" style="color:red"></i> </button>
                                </form>
                                </td>
                                </tr>
                                <?php

                            }}
                            else{
                              echo '<div class="alert alert-danger">No records found</div>'; 
                            }        
                      ?>
                     </tbody>
                </table>
                </div>
              </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>