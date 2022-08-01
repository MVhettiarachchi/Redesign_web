<!DOCTYPE html>
<html lang="en">

<head>
<?php 
session_start();
require_once 'config/config.php';
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Welcome to Department of ICT | Faculty of Technology</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="./css/department.css">
    <link rel="stylesheet" href="./css/Style.css">


</head>

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

<div class="topnav" id="myTopnav" style="background:RGB(8,0,128)">

    <a href="index.php" class="active">Home</a>
    <div class="dropdown">
        <button class="dropbtn">Staff
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="Academic_staff_ICT.php">Academic Staff</a>
            <a href="Temporary_academic_staff_ICT.html">Temporary Academic Staff</a>
            <a href="Non_academic_staff_ICT.html">NonAcademic Staff</a>
        </div>
    </div>
    <a href="newsAndEvents.html">News & Events</a>
    <a href="research.html">Research</a>
    <a href="industry.html">Industry</a>

    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myNavFunction()">&#9776;</a>
</div>

<!-- ------------x---------------  Navigation --------------------------x------------------- -->




<!-- ---------------------------  Page Content --------------------------------------------- -->
<main>

    <section class="site-title">
        <div class="site-background" data-aos="fade-up" data-aos-delay="100">
            <br><br>
            <h2>Department of Information & Communication Technology</h2>
            <p style="text-align:justify">One of the main problems in Sri Lanka is the lack of sufficient IT professionals to cope up with the
                rapidly developing technological advances at the work place. Many institutes, hospitals and industries
                import equipment with advanced technology in order to improve the quality of their products and enhance
                the efficiency of their procedures and production lines. Most of these high tech<span id="dots">...</span><span id="more"style="text-align:justify" >
                        equipment are computer controlled and some needs IT experts to operate and to modify
                        relevant software. The Faculty of Scienc has established an Industrial Training and Research Coordinating
                        Centre (ITRCC) in order to build collaborations with local industries.Through ITRCC, staff of the faculty
                        has visited most of the industries in the area to find industrial training opportunities as well as research
                        projects for students so that the expertise knowledge of the staff could be used to solve industrial problems.
                        Through these visits and discussions, it has been found that some industries face severe difficulties because
                        of the lack of IT experts. Furthermore, it has been noticed that some industries could have improved their
                        efficiency if technological advances in IT had been deployed. It is well known that the University system
                        still could not produce sufficient number of graduates in the area of ICT to fulfil the demand in the country.
                        </span></p>
            <button onclick="myFunction()" id="myBtn" class="btn">Read more</button>
        </div>
    </section>

    <br><br>

    <div class="main-content">
        <h2>About</h2>
        <hr>
        <p>This degree programme is designed to address the above issue in the country by producing quality graduates in ICT.
            Furthermore, the graduates produced under this programme would be given sufficient additional knowledge on
            complementary subjects and an industrial training to work as a professional ICT expert with leadership and
            management skills.
        </p>
        <h2>Main objectives of the program</h2>
        <hr>
        <p>
            Department of Information and Communication Technology offers a Bachelor of Information and Communication Technology Honours
            - BICT(Hons) degree.The proposed BICT(Hons) degree programme has been focussed on Application Development, BICT (Application
            Development), which is one of the degree programme proposed by Computer Society of Sri Lanka under new ICT Degree Programme
            Accreditation Framework. The main objective is to produce quality application developers with relevant subject knowledge
            on application development principles and ICT principles and with relevant complementary subject knowledge, who could build
            professional carriers in the field of ICT.
            <br><br>
            The main objectives, expected graduate attributes and programme outcomes are given under following sections respectively.
            <br>
        <ul>
            <li>1. Prepare graduates for positions in software development careers by providing industry-relevant applied education in
                application development.</li>
            <li>2. Produce graduates with a broad knowledge on current industry trends including Web, cloud and mobile applications,
                as well as industry practices.</li>
            <li>3. Prepare graduates to meet current and future industry needs and emerging software trends.</li>
            <li>4. Produce high quality software developers with personal skills for a successful career in research and development,
                industry, or other commercial application development related enterprises.</li>
        </ul>
        </p>
        <br>
        <a href="./assets/uni/bict_details.pdf">Course Structure- Information and Communication Technology - BICT(Hons)</a>
        <br><br>
    </div>

</main>
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
            Copyright @ 2020 Faculty of Technology. All rights Reserved.
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