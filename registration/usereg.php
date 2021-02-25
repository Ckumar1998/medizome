<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";
  if (isset($_POST['login'])) {
  	$name = mysqli_real_escape_string($db, $_POST['name']);
  	$address = mysqli_real_escape_string($db, $_POST['address']);
    $number = mysqli_real_escape_string($db, $_POST['number']);
    $place = mysqli_real_escape_string($db, $_POST['place']);
    $usename = mysqli_real_escape_string($db, $_POST['usename']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);

  	$sql = "INSERT INTO userreg (name , address , number , place , username , password) VALUES ('$name', '$address' , '$number' , '$place' , '$usename' , '$pass')";
  	mysqli_query($db, $sql);


    $res23 = mysqli_query($db, "SELECT * FROM userreg");
    while ($row = mysqli_fetch_array($res23)) {
      $id2 = $row['uid'];
  }





    $sql1 = "INSERT INTO login (uid , username , password) VALUES ( '$id2' ,'$usename' , '$pass')";
  	mysqli_query($db, $sql1);

  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/00df3b64a6.js" crossorigin="anonymous"></script>
</head>
<style>
  body{
    background-color: #e5e6e8;
    width: 100%;
  }
  a{
    color: #fff;
  }
  label{
    color: #fff;
  }

a:hover{
  color: aqua;
}
</style>
<body>




    <div class="container">
      <br><br>
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8 d-flex justify-content-center">
              <div class="card" style="width: 40rem;background: transparent;border-color: #fff;">
                <div style="background-color: #babbbf;" class="card-body">
                  <div class="text-center">
                    <a href="usereg.php">User Registration</a>&nbsp;&nbsp;
                    <i style="color: #fff;" class="fas fa-ruler-vertical"></i>&nbsp;&nbsp;
                    <a href="hosreg.php">Hospital Registration</a>                    
                  </div>
                  <br>
                    <form method="POST" action="usereg.php" enctype="multipart/form-data" style="border: 1px solid #7f7f7f;border-radius: 5px;width: 90%;margin: 30px;margin-top: 10px;margin-bottom: 20px;background-color: #929397;">  
                        <br>
                        <h3 style="color: #fff;" class="text-center">User Registration</h3>                    
                        <div class="form-group d-flex justify-content-center">
                          <label  for="exampleInputEmail1">Name</label>
                          <input style="width: 300px;background-color: transparent;color: #fff;" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                          <label  for="exampleInputEmail1">Address</label>
                          <textarea style="background: transparent;color: #fff;" name="address" id="" cols="40" rows="4"></textarea>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                          <label  for="exampleInputEmail1">Phone Number</label>
                          <input style="width: 300px;color: #fff;background-color: transparent;" name="number" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                          <label  for="exampleInputEmail1">Place</label>
                          <input style="width: 300px;background-color: transparent;color: #fff;" name="place" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                          <label  for="exampleInputEmail1">Username</label>
                          <input style="width: 300px;background-color: transparent;color: #fff;" name="usename" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                          <label for="exampleInputPassword1">Password</label>
                          <input style="width: 300px;background-color: transparent;color: #fff;" name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button style="margin-left: 220px;margin-bottom: 15px;color: #fff;" type="submit" name="login" class="btn btn-primary btn5">Submit</button>
                    </form>           

                </div>
              </div>

            </div>
            <div class="col-sm-2">
                
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
              <br><br>
          </div>
      </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
</body>
</html>






