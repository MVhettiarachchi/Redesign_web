<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome to Faculty of Technology | University of Ruhuna</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/degree.css">
    <link rel="stylesheet" href="./css/Style.css">


</head>

<body>


    <body>

        <!-- ----------------------------  Navigation ---------------------------------------------- -->
        <div class="tab">
       
            <div class="text">
                <p>
                    <img src="./assets/uni/logoFac.jpg">
                    <span class="ban1">Faculty of Technology</span>
                    <span class="ban2">University of Ruhuna</span>
                </p>
                <div class="buttons">
                    <button class="btn-group"><a href="https://learn.zoom.us/"  target="_blank">Zoom Meetings(LEARN)</a></button>
                    <button class="btn-group"><a href="http://teclms.ruh.ac.lk/moodle/"  target="_blank">LMS</a></button>
                    <button class="btn-group"><a href="http://paravi.ruh.ac.lk/tecmis/" target="_blank">TECMIS</a></button>
                    <button class="btn-group"><a href="./assets/uni/Intercom.pdf" target="_blank">INTERCOM</a></button>
                </div>
            </div>
    
    
        </div>
    
        <div class="topnav" id="myTopnav">
    
            <a href="index.php" class="active">Home</a>
            <a href="aboutus.html">About Us</a>
            <div class="dropdown">
                <button class="dropbtn">Departments
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="dep_ET.html">Engineering Technology</a>
                    <a href="department1.php">Information & Communication Technology</a>
                    <a href="dep_BST.html">Biosystems Technology</a>
                    <a href="dep_MDS.html">Multidisciplinary Studies</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Degree Programs
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="degree.php"> Bachelor of Engineering Technology Honours</a>
                      <a href="degree-ict.html">Bachelor of Information & Communication Technology Honours</a>
                    <a href="degree-bst.html">Bachelor of Biosystems Technology Honours</a>
                 </div>
            </div>
            <a href="Vacancies.html">Vacancies</a>
            <a href="contact.php">Contact Us</a>
            <!-- <a href="http://www.ruh.ac.lk/" target="_blank">University Home</a> -->
     <?php if(isset($_SESSION['user_name'])){ ?>
     <div class="dropdown">
                <button class="dropbtn">My Profile
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="view-profile.php/<?php echo $_SESSION['user_id'] ?>" style="color:#800000;">View My Profile</a>
                    <a href="logout.php/<?php echo $_SESSION['user_id'] ?>" style="color:#800000;">Logout</a>
                </div>
            </div>
    
    
    <?php } ?>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myNavFunction()">&#9776;</a>
        </div>
    
        <!-- ------------x---------------  Navigation --------------------------x------------------- -->


    <!-- ---------------------------  Page Content --------------------------------------------- -->

    <main>

        <!-- ---------------------- Site Content -------------------------->
        <br><br>
        <div class="main-content">

            <div class="tabContent">
                <p>Department of Engineering Technology</p>
            </div>
            <br>
            <h1><b>Bachelor of Engineering Technology Honours</b></h1>
            <hr>
            <p>
                The time duration of the Engineering Technology Honours degree program is full time 4 years.
                The course consists of subjects in the areas of Basic Sciences, Mathematics, Workshop Technology,
                Electrical Systems, Electronics, Mechatronics, Robotics, Automobile Technology, Material Engineering,
                Technical Drawing and Computer Programming. Further, a total of 6 months of industrial training in
                a recognize institution is a mandatory component of the degree program. In addition the students
                are required to follow the complementary subjects offered by the Department of Multidisciplinary
                Studies as recommended by the degree program.<br><br>
                The distribution of subjects in the full duration of the degree program is as follows :
            </p>
            <br>
            <h2>Industrial Representatives of the ICC -2020</h2>

            <div class="table-content">
                <table class="content-table  table-bordered ">
                    <tr width="100%">
                        <th width="30%">Level</th>
                        <th width="70%">Subjects</th>

                    </tr>

                    <tr>
                        <td>Level 1</td>
                        <td>Basic Sciences, Mathematics, Workshop Technology, Computer Programming.
                            Electronics (Introductory), Electrical Systems (Introductory) and Material Engineering.

                            <br><br>Complementary Subjects: English</td>
                    </tr>

                    <tr>
                        <td>Level 2</td>
                        <td>Electronics(Analogue and Digital), Electrical Systems, Object Oriented Programming, Numerical Methods,
                            Automobile Technology, Technical Drawing, Circuit Analysis, Instrumentation and Calibration, Workshop Technology.

                            <br><br>Complementary Subjects: Fundamentals of Management, Ethics for Technologists, English, Business Economics, Soft Skills.</td>

                    </tr>

                    <tr>
                        <td>Level 3</td>
                        <td>Electrical Power Systems, Robotics, Properties of Materials, Renewable and Alternative Energy Technology, Environmental Science

                            <br><br>Complementary Subjects: Art and Tradition, English, Accounting for Technologists, Safety and Risk Managements</td>

                    </tr>

                    <tr>
                        <td>Level 4</td>
                        <td>Mechatronics, Nanotechnology, Bio-Medical Equipment, Refrigeration and Air Conditioning, Welding Techniques, Design Project

                            <br><br>Complementary Subjects: Communication for Technologists, Creativity, Innovation and Entrepreneurship, Industrial Sociology</td>

                    </tr>



                </table>
            </div>
        </div>
    </main>
    <!-- -----------x---------- Site Content -------------x------------>


    <!-- ------------x---------------  Page Content --------------------------x------------------- -->




    <!-- --------------------------- Footer ---------------------------------------- -->
    <footer class="footer">
        <div class="footer-content">
            <div class="box" data-aos="fade-right" data-aos-delay="200">
                <h2 class="footerHeader">WELCOME</h2>
                <div class="content">
                    <p class="welcome">Faculty of Technology is a leading faculty of University of Ruhuna in the region welcomes you to witness a truly unique experience!
                    </p>
                </div>
                <h2 class="footerHeader">University of Ruhuna</h2>
                <div class="content">
                    <p class="uor"> <a href="http://www.ruh.ac.lk/" target="_blank">Click Here</a>
                    </p>
                </div>
            </div>

            <div class="center box" data-aos="fade-right" data-aos-delay="200">
                <h2 class="footerHeader">Departments</h2>
                <div class="content">
                    <ul id="list">
                        <li><a href="department1.html">&nbsp;&nbsp;Information & Communication Technology</a></li>
                        <li><a href="dep_ET.html">&nbsp;&nbsp;Engineering Technology</a></li>
                        <li><a href="dep_BST.html">&nbsp;&nbsp;Biosystems Technology</a></li>
                        <li><a href="dep_MDS.html">&nbsp;&nbsp;Multidisciplinary Studies</a></li>
                    </ul>
                </div>
            </div>

            <div class="box" data-aos="fade-right" data-aos-delay="200">
                <h2 class="footerHeader">Contact Us</h2>
                <div class="content">
                    <div class="place">
                        <i class="fas fa-address-book"></i>
                        <span class="text">&nbsp;&nbsp;Faculty of Technology,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of Ruhuna,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karagoda Uyangoda,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matara</span>
                    </div>
                    <div class="phone">
                        <i class="fas fa-phone"></i>
                        <span class="text">&nbsp;&nbsp;041 - 3006138</span>
                    </div>
                    <div class="phone">
                        <i class="fa fa-envelope-open"></i>
                        <span class="text">&nbsp;&nbsp;dean@tec.ruh.ac.lk</span>
                    </div>
                </div>
            </div>

        </div>

        <div class="rights flex-row">
            <h6 class="foot">
                Copyright ?? 2020 Faculty of Technology. All rights Reserved.
            </h6>
        </div>
    </footer>

    <!-- -------------x------------- Footer --------------------x------------------- -->





<!-- Jquery Library file -->
<script src="./js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="./js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="./js/aos.js"></script>

<!-- Custom Javascript file -->
<script src="./js/main.js"></script>

</body>

</html>