<?php
include('src/php/dbconnect.php');


?><html>

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
    <link rel="stylesheet" href="/src/css/patient.css">

</head>

<body>

    <!-- partial:index.partial.html -->
    <nav class="navbar navbar-expand-custom navbar-mainbg" id="navvv">
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
                    <a class="nav-link" href="javascript:void(0);" onclick="window.location.href='#navvv';"><i
                            class="fas fa-tachometer-alt"></i>Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>My details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Doctor's availability</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><i class='fas fa-user-alt'></i>Profile</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Left Para & Button -->
    <section id="homeee">
    <div id="left" style="
    position: relative;
    top: 315px;
    left: 116px;
    width: fit-content;">
        <div>
            <p id="para" style="color: #5161ce;">
                Click here to get Appoitment Form!
            </p>
            <!-- <div>
                <button type="button" class="btn btn-primary btn-lg" fdprocessedid="dgj4s9" style="
                background: #5161ce;"></button><a class="link" href="#form"></a></button>
            </div> -->
            <a class="btn btn-primary" href="#form" role="button" style="
    width: 142px;
    height: 40px;
   background-color: #5161ce;
">Get Form</a>
        </div>

    </div>
</section>

    <section>
        
        <div class="formbold-main-wrapper">
            <!-- Author: FormBold Team -->
            <!-- Learn More: https://formbold.com -->
            <divclass="formbold-form-wrapper" style="
            position: relative;
            top: 610px;;
        ">
                <form action="src/php/appointment.php" method="POST">
                    <h1 style="font-family: 'Times New Roman', Times, serif; text-align: center;">Appoitment Form</h1>
                    <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label"> Full Name </label>
                        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                        <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                            class="formbold-form-input" />
                    </div>
                    <div class="formbold-mb-5" id="form">
                        <label for="email" class="formbold-form-label"> Email Address </label>
                        <input type="email" name="email" id="email" placeholder="Enter your email"
                            class="formbold-form-input" />
                    </div>
                    <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5 w-full">
                                <label for="date" class="formbold-form-label"> Date </label>
                                <input type="date" name="date" id="date" class="formbold-form-input" />
                            </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                                <label for="time" class="formbold-form-label"> Time </label>
                                <input type="time" name="time" id="time" class="formbold-form-input" />
                            </div>
                        </div>
                    </div>

                    <div class="formbold-mb-5 formbold-pt-3">
                        <label class="formbold-form-label formbold-form-label-2">
                            Address Details
                        </label>
                        <div class="flex flex-wrap formbold--mx-3">
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input type="text" name="area" id="area" placeholder="Enter area"
                                        class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input type="text" name="city" id="city" placeholder="Enter city"
                                        class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input type="text" name="state" id="state" placeholder="Enter state"
                                        class="formbold-form-input" />
                                </div>
                            </div>
                            <div class="w-full sm:w-half formbold-px-3">
                                <div class="formbold-mb-5">
                                    <input type="text" name="post_code" id="post-code" placeholder="Post Code"
                                        class="formbold-form-input" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="
                margin-bottom: 79px;
            ">
                        <button class="formbold-btn" fdprocessedid="e87gb" style="
                        background: #5161ce;" name="submit">Book Appointment</button>
                    </div>
                </form>
        </div>
        </div>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: "Inter", Arial, Helvetica, sans-serif;
            }

            .formbold-mb-5 {
                margin-bottom: 20px;
            }

            .formbold-pt-3 {
                padding-top: 12px;
            }

            .formbold-main-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 48px;
            }

            .formbold-form-wrapper {
                margin: 0 auto;
                max-width: 550px;
                width: 100%;
                background: white;
            }

            .formbold-form-label {
                display: block;
                font-weight: 500;
                font-size: 16px;
                color: #07074d;
                margin-bottom: 12px;
            }

            .formbold-form-label-2 {
                font-weight: 600;
                font-size: 20px;
                margin-bottom: 20px;
            }

            .formbold-form-input {
                width: 100%;
                padding: 12px 24px;
                border-radius: 6px;
                border: 1px solid #e0e0e0;
                background: white;
                font-weight: 500;
                font-size: 16px;
                color: #6b7280;
                outline: none;
                resize: none;
            }

            .formbold-form-input:focus {
                border-color: #6a64f1;
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }

            .formbold-btn {
                text-align: center;
                font-size: 16px;
                border-radius: 6px;
                padding: 14px 32px;
                border: none;
                font-weight: 600;
                background-color: #6a64f1;
                color: white;
                width: 20%;
                cursor: pointer;
                margin-left: 40%;
                margin-right: 60%;
            }

            .formbold-btn:hover {
                box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
            }

            .formbold--mx-3 {
                margin-left: -12px;
                margin-right: -12px;
            }

            .formbold-px-3 {
                padding-left: 12px;
                padding-right: 12px;
            }

            .flex {
                display: flex;
            }

            .flex-wrap {
                flex-wrap: wrap;
            }

            .w-full {
                width: 100%;
            }

            @media (min-width: 540px) {
                .sm\:w-half {
                    width: 50%;
                }
            }
        </style>
    </section>

    <!-- partial -->
    <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src="/src/js/main.js"></script>
    </script>
    <script src="/src/js/script.js"></script>

</body>



</html>