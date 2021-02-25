<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['text']);

  	$sql = "INSERT INTO musichh (image, text) VALUES ('$image', '$image_text')";
  	mysqli_query($db, $sql);

    // $sql1 = "UPDATE images SET image='$image',text='$image_text' WHERE id=1";
    // mysqli_query($db, $sql1);
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






<style type="text/css">

   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }

   body{
       background-color: #e5e6e8;
       /* background-image: url(""); */
       margin: 5%;
   }
   h5{
       color: #ffffff;
   }

</style>
</head>
<body>

   <!-- header starts here -->

   <header>
        <div style="background-color: #57556b;" class="container">
            <div class="row">
                <!-- <marquee style="color: #ffffff;">Welcome To Admin Dashboard</marquee> -->
            </div>
        </div>
    </header>

    <!-- header ends here -->








    <div style="background-color: #babbbf;" class="container">
        <i style="color: #c8ced6;" class="fas fa-level-up-alt"></i><i style="color: #c8ced6;" class="fas fa-level-up-alt"></i>
        <p style="color: #c8ced6;font-family: serif;font-size: 11px;">HIGH LEVEL</p>

        <div class="row">
            <div class="col-sm-2">
                <br>
                <p style="color: #63637a;font-family: serif;font-size: 15px;"><i class="fas fa-bolt fa-2x"></i>&nbsp;&nbsp;ADMIN PANEL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(HOSPITAL)</p>
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a style="color: #c8ced6;font-family: serif;font-size: 13px;" class="nav-link" href="dashboard.php"><i class="fab fa-dashcube fa-1x"></i></i>&nbsp;&nbsp;DASHBOARD <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="doctor.php"><i class="fas fa-image fa-1x"></i>&nbsp;&nbsp;ADD DOCTORS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="medicine.php"><i class="fas fa-video fa-1x"></i>&nbsp;&nbsp;ADD MEDICINES</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="appointment.php"><i class="fas fa-video fa-1x"></i>&nbsp;&nbsp;VIEW APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href=""><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;SIGNOUT</a>
                        </li>
                      </ul>
               
            </div>
            <div style="background-color:#babbbf;" class="col-sm-10">
                   <div class="row text-center">
                       <div class="col-sm-12">                           
                                                        
                       </div>
                   </div>
                   
                   
                    <div class="row">
                        <div class="col-sm-4 d-flex justify-content-center">
                            <div class="card" style="width: 15rem;height: 18rem;background-color: #929397;">
                                <div class="card-body">
                                  <a href=""><i style="color: #63637a;" class="fas fa-ellipsis-v d-flex justify-content-end"></i></a>
                                  <h1 style="color: #c8ced6;" class="card-title text-center">NIBIN</h1>
                                  <!-- <p style="color: #63637a;">Iam A bad Boy</p>&nbsp;&nbsp; -->
                                   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <div class="card" style="width: 15rem;height: 18rem;background-color: #929397;">
                                <div class="card-body">
                                  <a href=""><i style="color: #63637a;" class="fas fa-ellipsis-v d-flex justify-content-end"></i></a>
                                  <h1 style="color: #c8ced6;" class="card-title text-center">NIBIN</h1>
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 d-flex justify-content-center">
                            <div class="card" style="width: 15rem;height: 18rem;background-color: #929397;">
                                <div class="card-body">
                                  <a href=""><i style="color: #63637a;" class="fas fa-ellipsis-v d-flex justify-content-end"></i></a>
                                  <h1 style="color: #c8ced6;" class="card-title text-center">NIBIN</h1>
                                  <!-- <p style="color: #63637a;">I am A bad Boy</p>&nbsp;&nbsp; -->
                                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

                                </div>
                            </div>
                        </div>
                    </div>

                  
                    </div>
                    <br><br>
            </div>
            <br>
        </div>
    </div>




<footer style="background-color: #000000;" class="footer-bottom container">
    <!-- <marquee style="color: #ffffff;">Copyright © Nibin Kurian</marquee> -->
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    


</body>
</html>