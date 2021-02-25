<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";
  if (isset($_POST['upload'])) {
  	$image = $_FILES['image']['name'];
    $dname = mysqli_real_escape_string($db, $_POST['dname']);
  	$image_text = mysqli_real_escape_string($db, $_POST['text']);

  	$sql = "INSERT INTO doctor (image , drname , drdescription) VALUES ('$image', '$dname' ,'$image_text')";
  	mysqli_query($db, $sql);

  }
  $result = mysqli_query($db, "SELECT * FROM doctor");

//   if (isset($_POST['upd'])) {
//     $image = $_FILES['pic']['name'];  
//     $image_text = mysqli_real_escape_string($db, $_POST['text']);
//     $sql3 = "UPDATE music SET image = '$image' , text = '$image_text'  WHERE id= 1";
//     mysqli_query($db, $sql3);
// }

// $result = mysqli_query($db, "SELECT * FROM music");

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
   #img_div{
    width: 100%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #63637a;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 10px;
    width: 50%;
    height: 300px;
    background-color:#fdfd;
}

#para1{
    padding-top:70px;
    padding-right:20px;
    padding-left:600px
}
p{
    color: #000;
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
        <p style="color: #c8ced6;font-family: serif;font-size: 11px;">MEDIZOME</p>

        <div class="row">
            <div class="col-sm-2">
                <br>
                <p style="color: #63637a;font-family: serif;font-size: 15px;"><i class="fas fa-bolt fa-2x"></i>&nbsp;&nbsp;ADMIN PANEL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(HOSPITAL)</p>
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="dashboard.php"><i class="fas fa-image fa-1x"></i>&nbsp;&nbsp;DASHBOARD</a>
                        </li>
                        <li class="nav-item active">
                            <a style="color: #c8ced6;font-family: serif;font-size: 13px;" class="nav-link" href="doctor.php"><i class="fab fa-dashcube fa-1x"></i></i>&nbsp;&nbsp; ADD DOCTORS<span class="sr-only">(current)</span></a>
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
                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="card" style="width: 55rem;height: 18rem;background-color: #38434d;">
                                    <div class="card-body">
                                        <p style="color: #c8ced6;font-size:16px;" class="text-center">Upload Our Doctors List</p>
                                        <form method="POST" action="doctor.php" enctype="multipart/form-data">
                                            <input type="hidden" name="size" value="1000000">
                                                <div>
                                                    <input style="color: #c8ced6" type="file" name="image">
                                                    <br> <input style="color: #c8ced6" type="text" name="dname" placeholder="Doctor Name">
                                                    <br> <textarea id="text" cols="80" rows="5" name="text" placeholder="Doctor Description Here..."></textarea>                                                  
                                                   <br> <button type="submit" name="upload">Upload</button>
                                                </div>                                       
                                        </form>
                                    </div>
                            </div>                            
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12 text-center">   
                            <h3>view Doctors</h3>
                                    <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<div id='img_div'>";
                                                echo "<img src='images/".$row['image']."'>";
                                                echo "<p id='para1'>".$row['drname']."</p>";
                                                echo "<p id='para1'>".$row['drdescription']."</p>";
                                            echo "</div>";
                                        }
                                    ?>     
                                        
                        </div>
                    </div>

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