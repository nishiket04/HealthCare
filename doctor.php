<?php
include('src/php/login.php');
include('src/php/signup.php');
include('src/php/dbconnect.php');
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="src/css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Patient details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>appointment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)" ; onclick="location.href='login.php'"><i
                            class="fa fa-sign-in"></i>profile</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fa fa-pencil-square-o"></i>Register</a>
                </li> -->
            </ul>
        </div>
    </nav>
 <!-- Left Para & Button -->
 
  <button onclick="runSpeechRecog()">Speech</button>
        <h3 id="output" class="hide"></h3>
        <script>
            runSpeechRecog = () => {
               document.getElementById("output").innerHTML = "Loading text...";
               var output = document.getElementById('output');
               var action = document.getElementById('action');
               let recognization = new webkitSpeechRecognition();
               recognization.onstart = () => {
                  action.innerHTML = "Listening...";
               }
               recognization.onresult = (e) => {
                  var transcript = e.results[0][0].transcript;
                  output.innerHTML = transcript;
                  output.classList.remove("hide")
                  action.innerHTML = "";
               }
               recognization.start();
            }
         </script>

    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="/src/js/main.js"></script>
    </script>
    <script src="/src/js/script.js"></script>

</body>



</html>