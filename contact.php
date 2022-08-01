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
    <link rel="stylesheet" href="./css/contact.css">
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

<div class="topnav" id="myTopnav">

   <a href="index.php" class="active">Home</a>
   <a href="aboutus.html">About Us</a>
   <div class="dropdown">
       <button class="dropbtn">Departments
           <i class="fa fa-caret-down"></i>
       </button>
       <div class="dropdown-content">
           <a href="dep_ET.html">Engineering Technology</a>
           <a href="department1.php">Information & Communication  Technology</a>
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
   <a href="contact.html">Contact Us</a>
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

    <div class="wrapper">
        <section class="left">
            <div class="map">
                <p><b>Location of the Faculty :</b></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.497035611264!2d80.53975221471585!3d6.
                063499495608977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae141585ad5987d%3A0x717cf948bd5444ff!2s
                Faculty%20of%20Technology%2C%20University%20of%20Ruhuna!5e0!3m2!1sen!2slk!4v1603788719714!5m2!1sen!2slk" width="550" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>


            <div>
                <br><br><br>
                <p class="address"><b>Address of the faculty : </b>Faculty of Technology
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University
                    of Ruhuna
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karagoda
                    Uyangoda
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamburupitiya
                    , Matara
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sri
                    Lanka , 81100</p>
            </div>

            <div>
                <p><strong>Contact Number : </strong>041 - 3006136</p>
            </div>

            <div>
                <p><strong>Email / Fax : </strong></p>
            </div>

            <table class="content-table">
                <thead>
                    <tr>
                        <th width="35%">Department</th>
                        <th width="30%">Name of HoD</th>
                        <th width="35%">Contact Number</th>
                    </tr>
                </thead>

                <tr>
                    <td>Engineering Technology</td>
                    <td>Dr. B. L. Sanjaya Thilakarathne</td>
                    <td>+94-41-3006138</td>
                </tr>

                <tr>
                    <td>Information & Communication Technology</td>
                    <td>Dr. P. K. Subash Jayasinghe</td>
                    <td>+94-41-3006137</td>
                </tr>

                <tr>
                    <td>Biosystems Technology</td>
                    <td>Dr. (Mrs.) KMW Rajawatta</td>
                    <td>+94-41-3006134</td>
                </tr>

                <tr>
                    <td>Multidisciplinary Studies</td>
                    <td>Dr. K.G.S.Harshadewa Gunawardana</td>
                    <td>+94-41-3006130</td>
                </tr>
            </table>

        </section>

        <section class="right">
            <br><br>
            <div class="sidecontent">
                <ul class="link">
                    <h2 class="caption">Top Links</h2>
                    <li class="itemClicked"><a href="">&nbsp;&nbsp;Degree Programs</a>
                        <ul class="sublink">
                            <li class="subitem"><a href="degree.html">&nbsp;&nbsp;Bachelor of Engineering Technology <br> &nbsp;&nbsp;&nbsp;&nbsp;Honours</a></li>
                            <li class="subitem"><a href="./assets/uni/bict_details.pdf">&nbsp;&nbsp;Bachelor of Information & <br> &nbsp;&nbsp;&nbsp;&nbsp;Communication Technology Honours</a></li>
                            <li class="subitem"><a href="./assets/uni/Bst_program.pdf">&nbsp;&nbsp;Bachelor of Biosystems Technology <br> &nbsp;&nbsp;&nbsp;&nbsp;Honours</a></li>
                        </ul>
                    </li>
                    <li class="item"><a href="http://www.tec.ruh.ac.lk/pages/handbook.pdf"> &nbsp;Student HandBook</a></li>
                    <li class="item"><a href="http://www.tec.ruh.ac.lk/downloads/academic_calender-2019.pdf"> &nbsp;Academic Calendar</a></li>
                    <li class="item"><a href="">&nbsp;&nbsp;Administartion / Dean's Office</a></li>
                    <li class="item"><a href="">&nbsp;&nbsp;Finance Division</a></li>
                    <li class="item"><a href="https://www.lib.ruh.ac.lk/web/index.php">&nbsp;&nbsp;Library</a></li>
                    <li class="item"><a href="">&nbsp;&nbsp;Maintenance Unit</a></li>
                    <li class="item"><a href="">&nbsp;&nbsp;Security Unit</a></li>
                </ul>

                &nbsp;&nbsp;

                <ul class="link">
                    <h2 class="caption">Other Faculties</h2>
                    <li class="item"><a href="http://www.agri.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Agriculture</a></li>
                    <li class="item"><a href="http://www.eng.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Engineering</a></li>
                    <li class="item"><a href="http://www.hss.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Humanities and Social.Sci.</a></li>
                    <li class="item"><a href="http://www.mgt.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Management and Finance</a></li>
                    <li class="item"><a href="http://www.medi.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Medicine</a></li>
                    <li class="item"><a href="http://www.sci.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Science</a></li>
                    <li class="item"><a href="http://www.fmst.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Fisheries and Marine Sci.</a></li>
                    <li class="item"><a href="http://www.ruh.ac.lk/_struct.php?link=_site/_academic/fgs.html">&nbsp;&nbsp;Faculty of Graduate Studies</a></li>
                    <li class="item"><a href="http://www.ahs.ruh.ac.lk/">&nbsp;&nbsp;Faculty of Allied Health Sciences</a></li>
                </ul>

                &nbsp;&nbsp;

            </div>
        </section>
    </div>



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
                Copyright © 2020 Faculty of Technology. All rights Reserved.
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