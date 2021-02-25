<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";

    $result = mysqli_query($db, "SELECT * FROM hospreg");
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
    background: #1c92d2;
    background: -webkit-linear-gradient(to right, #f2fcfe, #1c92d2);
    background: linear-gradient(to right, #f2fcfe, #1c92d2); 
    margin: 5%;
   }
   h5{
       color: #ffffff;
   }
   #para_div{
    width: 30%;
    padding: 5px;
    margin: 15px; 
    border: 1px solid #000;
    float:left;
    border-radius:20px;
}

/* #para_div:hover{
    background-color:#929397;
} */

p{
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








    <div style="background-color:#ffffff" class="container">
        <i style="color: #c70910;" class="fas fa-level-up-alt"></i><i style="color: #c70910;" class="fas fa-level-up-alt"></i>
        <p style="color: #31a6dd;font-family: serif;font-size: 17px;">MEDIZOME</p>

        <div class="row">
            <div class="col-sm-2">
                <br>
                <p style="color: #63637a;font-family: serif;font-size: 15px;"><i class="fas fa-bolt fa-2x"></i>&nbsp;&nbsp;ADMIN PANEL (MASTER ADMIN)</p>
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="dashboard.php"><i class="fas fa-image fa-1x"></i>&nbsp;&nbsp;DASHBOARD </a>
                        </li>
                        <li class="nav-item active">
                            <a style="color: #c8ced6;font-family: serif;font-size: 13px;" class="nav-link" href="hospital.php"><i class="fab fa-dashcube fa-1x"></i></i>&nbsp;&nbsp;HOSPITALS <span class="sr-only">(current)</span></a>
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
            <div style="background-color:#fdf9f0" class="col-sm-10">
                   <div class="row text-center">
                       <div class="col-sm-12">   
                       <h3>view Hospitals</h3>
                            <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<div id='para_div'>";
                                    echo "<p id='para1'>Hospital Id :".$row['hid']."</p>";
                                    echo "<p id='para1'>Hospital Name :".$row['hname']."</p>";
                                    echo "<p id='para1'>Hospital Address :".$row['haddress']."</p>";
                                    echo "<p id='para1'>Hospital Number :".$row['hnumber']."</p>";
                                    echo "<p id='para1'>Hospital Place :".$row['hplace']."</p>";
                                    echo "<p id='para1'>Hospital Username :".$row['husername']."</p>";
                                    echo "<p id='para1'>Hospital Password :".$row['hpassword']."</p>";
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