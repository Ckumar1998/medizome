<?php
  $db = mysqli_connect("localhost", "root", "", "medizome");
  $msg = "";

    $result = mysqli_query($db, "SELECT * FROM userreg");
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
    border-radius:5px;
}

#para_div:hover{
    background-color:#929397;
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
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="hospital.php"><i class="fas fa-video fa-1x"></i>&nbsp;&nbsp;HOSPITALS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="user.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;USERS</a>
                        </li>
                        <li class="nav-item">
                            <a style="color: #63637a;font-family: serif;font-size: 13px;" class="nav-link" href="appointment.php"><i class="fab fa-blogger fa-1x"></i>&nbsp;&nbsp;VIEW APPOINTMENTS</a>
                        </li>
                        <li class="nav-item active">
                            <a style="color: #c8ced6;font-family: serif;font-size: 13px;" class="nav-link" href="logout.php"><i class="fab fa-dashcube fa-1x"></i></i>&nbsp;&nbsp;SIGNOUT<span class="sr-only">(current)</span></a>
                        </li>
                      </ul>
               
            </div>
            <div style="background-color:#babbbf;" class="col-sm-10">
                   <div class="row text-center">
                   <div class="col-sm-12 d-flex justify-content-center">
                            <div class="card" style="width: 55rem;height: 18rem;background-color: #929397;">
                                    <div class="card-body">
                                        <h3 class="d-flex justify-content-center">MY ACCOUNT</h3>
                                        <p class="text-center">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                        <button onclick="myFunction()">LOGOUT</button>
                                            <script>
                                                function myFunction() {                                   
                                                    if (window.confirm('Are you sure you want to logout? ')) 
                                                    {
                                                    window.location.href='login.php';
                                                    };
                                                }
                                            </script>
                                    </div>
                            </div>                            
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