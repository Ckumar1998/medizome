<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";


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



   body{
    background: #485563;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #29323c, #485563);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #29323c, #485563); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
       /* background-color: #e5e6e8; */
       margin: 5%;
    
   }
   h5{
       color: #ffffff;
   }
   #para_div{
    width: 97%;
    padding: 5px;
    margin: 15px; 
    border: 1px solid #000;
    border-radius:5px;
}

#para_div:hover{
    background-color:#929397;
}

p{
    color: #000;
}

/* h1 {
  font-size: 22px;
  background: -webkit-linear-gradient(#eee, #333);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
} */

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





    <div style="background: #fff" class="container">
        <i style="color: #c70910;" class="fas fa-level-up-alt"></i><i style="color: #c70910;" class="fas fa-level-up-alt"></i>
        <p style="color: #31a6dd;font-family: serif;font-size: 17px;">MEDIZOME</p>

        <div class="row">
            <div class="col-sm-2">
                <br>
                <p style="color: #63637a;font-family: serif;font-size: 15px;"><i class="fas fa-bolt fa-2x"></i>&nbsp;&nbsp;ADMIN PANEL (MASTER ADMIN)</p>
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a style="color: #c8ced6;font-family: serif;font-size: 13px;" class="nav-link" href="dashboard.php"><i class="fab fa-dashcube fa-1x"></i></i>&nbsp;&nbsp;DASHBOARD <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="hospital.php"><i class="fas fa-image fa-1x"></i>&nbsp;&nbsp;HOSPITALS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="user.php"><i class="fas fa-video fa-1x"></i>&nbsp;&nbsp;USERS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="appointment.php"><i class="fab fa-blogger fa-1x"></i>&nbsp;&nbsp;VIEW APPOINTMENTS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;SIGNOUT</a>
                        </li>
                      </ul>
               
            </div>
            <div style="background: #c8d1e1" class="col-sm-10">
                   <div class="row text-center">
                       <div class="col-sm-12">                           
                            <h1>STATUS</h1>                     
                       </div>
                   </div>
                   
                   
                   <div class="row text-center">
                       <div class="col-sm-12">   
                            <?php
                            echo "<div id='para_div'>";
                                    $res23 = mysqli_query($db, "SELECT * FROM userreg");
                                    while ($row = mysqli_fetch_array($res23)) {
                                    $id2 = $row['uid'];
                                }
                                echo "Total users Registered: " . $id2;?><br><br><?php
                                    $res24 = mysqli_query($db, "SELECT * FROM hospreg");
                                    while ($row = mysqli_fetch_array($res24)) {
                                    $id3 = $row['hid'];
                                    }
                                echo "Total Hospitals Registered: " . $id3;?><br><br><?php

                                $res25 = mysqli_query($db, "SELECT * FROM doctor");
                                while ($row = mysqli_fetch_array($res25)) {
                                $id4 = $row['did'];
                                }
                                echo "Total Doctors Registered: " . $id4;
                            echo "</div>";
                            ?>         
                                                        
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