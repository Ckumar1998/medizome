<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";
  // if (isset($_POST['login2'])) {
  // 	$name = mysqli_real_escape_string($db, $_POST['name1']);
  // 	$address = mysqli_real_escape_string($db, $_POST['address1']);
  //   $number = mysqli_real_escape_string($db, $_POST['number1']);
  //   $place = mysqli_real_escape_string($db, $_POST['place1']);
  //   $usename = mysqli_real_escape_string($db, $_POST['usename1']);
  //   $pass = mysqli_real_escape_string($db, $_POST['pass1']);

  // 	$sql = "INSERT INTO hospreg (hname , haddress , hnumber , hplace , husername , hpassword) VALUES ('$name', '$address' , '$number' , '$place' , '$usename' , '$pass')";
  // 	mysqli_query($db, $sql);



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
        <div class="row">
            <div class="col-sm-2">

            </div>
            <div class="col-sm-8">
              <br><br><br><br><br>
              <div class="card" style="width: 40rem;background-color:#babbbf;border-color: #fff;">
                <div class="card-body">
                <h3 style="color: #fff;" class="text-center">Login</h3>  
                    <form method="POST" action="login.php" enctype="multipart/form-data" style="border: 1px solid #7f7f7f;border-radius: 5px;width: 90%;margin: 30px;margin-top: 10px;margin-bottom: 20px;background-color: #929397;">  
                        <br>                  
                        <div class="form-group d-flex justify-content-center">
                        <label  for="exampleInputEmail1">Username</label>
                        <input style="width: 300px;color: #fff;background-color: transparent;" name="usename1" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group d-flex justify-content-center">
                        <label for="exampleInputPassword1">Password</label>
                        <input style="width: 300px;color: #fff;background-color: transparent;" name="pass1" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button style="margin-left: 220px;margin-bottom: 15px;" type="submit" name="login2" class="btn btn-primary btn5">Submit</button>
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




