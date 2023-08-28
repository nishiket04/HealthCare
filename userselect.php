<?php
include ('src/php/dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Select</title>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/usersel.css">
</head>

<body>
    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">HMIS</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector">
                    <div class="left"></div>
                    <div class="right"></div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-sign-in"></i>LogIn</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-pencil-square-o"></i>Register</a>
                </li> -->
            </ul>
        </div>
    </nav>

    <div class="card">
        <div class="title" style="color: white;">Are You ?</div>
        <div class="content">
            <input type="radio" name="box" id="one" />
            <input type="radio" name="box" id="two" />
            <input type="radio" name="box" id="three" />

            <label for="one" class="box first">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">Doctor</span>
                </div>
                <img src="src/pic/doctor.png" alt="" srcset="" style="width: 46px; margin-right: 3px;">
            </label>
            <label for="two" class="box second">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">Patient</span>
                </div>
                <img src="src/pic/patient.png" alt="" srcset="" style="width: 46px;">

            </label>
            <label for="three" class="box third">
                <div class="course">
                    <span class="circle"></span>
                    <span class="subject">Sttaf/nurse</span>
                </div>
                <img src="src/pic/nurse.png" alt="" srcset="" style="width: 46px;
            margin-right: 5px;;">
            </label>
        </div>
    </div>


    </div>
    <div onclick="goTo()" style="position: relative;
    top: 149px;
    left: 637px;
    width:fit-content;
">
        <input class="btn btn-primary" type="submit" value="submit" name="submit" style="background: #5161ce;width: 135px;" fdprocessedid="igf4c">
    </div>
    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="src/js/main.js"></script>
    </script>
    <script src="src/js/script.js"></script>

</body>

</body>

</html>