<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/Style.css">



</head>

<body>
<?php if($_SESSION['user_name']){ ?>
<div>You are now logged in as <?php echo $_SESSION['user_name'] ?></div>
<?php }?>
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

        <a href="index.html" class="active">Home</a>
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
                <a href="degree.html"> Bachelor of Engineering Technology Honours</a>
                <a href="./assets/uni/bict_details.pdf">Bachelor of Information & Communication Technology Honours</a>
                <a href="./assets/uni/Bst_program.pdf">Bachelor of Biosystems Technology Honours</a>
            </div>
        </div>
        <a href="Vacancies.html">Vacancies</a>
        <a href="contact.html">Contact Us</a>
        <a href="http://www.ruh.ac.lk/" target="_blank">University Home</a>

        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myNavFunction()">&#9776;</a>
    </div>

    <!-- ------------x---------------  Navigation --------------------------x------------------- -->


    <!-- ---------------------------  Image Slider --------------------------------------------- -->
    <br><br><br>

    <div class="container">
        <div class="slider">
            <div class="slide slide1">
                <div class="caption">
                    <h2>Faculty of Technology</h2>
                    <p>
                        The Faculty of Technology was officially established under the gazette notification issued on 26.04.2016 with four Departments, namely, Engineering Technology, Information and Communication Technology, Biosystems Technology and Multidisciplinary Studies.
                    </p>
                </div>
            </div>
            <div class="slide slide2">
                <div class="caption">
                    <h2>Interfaculty Drama Competition - 2020</h2>
                    <p>
                        The Faculty of Technology, University of Ruhuna emerged the second runner-up of the Interfaculty Drama Competition organised by the Cultural Centre, University of Ruhuna to commemorate the 150th Birth Anniversary of the Late Mahatma Gandhi.
                    </p>
                </div>
            </div>
            <div class="slide slide3">
                <div class="caption">
                    <h2>Tree Planting Campaign - 2018</h2>
                    <p>
                        The Tree Planting Campaign - 2018 has been successfully held on 5th December 2018 at Faculty of Technology, University of Ruhuna. This event was organized by the Department of Biosystems Technology of the Faculty of Technology, University of Ruhuna to
                        commemorate the 40th anniversary of University of Ruhuna.
                    </p>
                </div>
            </div>
            <div class="slide slide4">
                <div class="caption">
                    <h2>Industrial Collaborations - Department of ICT</h2>
                    <p>
                        In producing an internationally accredited Technologist in the field of Information and Communication Technology, the Department of ICT has recently formed an Industrial Consultative Committee (ICC) in order to provide students with the necessary technical
                        and professional skills to face the challenges and adapt better for the rapidly changing phases of the highly competitive job market in today's world.
                    </p>
                </div>
            </div>
            <div class="slide slide1">
                <div class="caption">
                    <h2>Faculty of Technology</h2>
                    <p>
                        The Faculty of Technology was officially established under the gazette notification issued on 26.04.2016 with four Departments, namely, Engineering Technology, Information and Communication Technology, Biosystems Technology and Multidisciplinary Studies.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ------------x---------------  Image Slider --------------------------x------------------- -->


    <!-- ---------------------------  Page Content --------------------------------------------- -->

    <div class="wrapper">
        <section class="left">
            <a href="newsAndEvents.html" class="newsHeader">Latest News and Events</a>
            <br><br>
            <article class="news">
                <img src="./assets/uni/felicit-ceremony.jpg" class="img" alt="blog1"><br>
                <a href="#" class="head">Felicitation Ceremony for the Founder Dean,Senior Professor W.G.D.Dharmarathne</a>
                <p>
                    Senior Prof. W.G.D Dharmarathne, the former Dean of the Faculty of Technology, University of Ruhuna retired from his position recently as the founder Dean of the Faculty of Technology and during his tenure he contributed to the fullest in many ways to
                    bring the faculty to its greater heights and university at large. Apart from his service to the faculty and the university, he is also recognized as a herculean figure who immensely contributed to national development in many ways.
                    <span class="toggle-text" id="toggle-text-1">
                        In appreciation of his contributions made towards the upheaval of the faculty and the university, all the academic and non-academic staff members of the Faculty of Technology organized a felicitation ceremony on the 30th of September, 2020 at Solis Reception
                        Hall in Matara, with the participation of Prof. E.P.S. Chandana, Deputy Vice Chancellor, University of Ruhuna, Dr.K.G.S.H.Gunawardana, Dean, Faculty of Technology, Mr. Aruna Lorensuhewa, the former Head of the Department of ICT,
                        Heads of the other three departments along with the academic and non-academic staff members of the Faculty of Technology.<br> During the ceremony there were several speeches which highlighted the value of
                        the commendable service rendered by Senior. Prof. W.G.D Dharmarathne, not only to the Faculty of Technology, but also to the advancement of science, technology and research in Sri Lanka. These speeches were also followed by a video
                        highlighting the momentous events of the illustrious tenure of Senior Prof. W. G. D Dharmarathne at the faculty. At the conclusion of the ceremony a token of appreciation was given to him by Dr. K.G. S.H Gunawardana, Dean- Faculty
                        of Technology in honor of his service and the ceremony concluded with a dinner party.
                        </span>
                </p>
                <button class="toggle-text-button" toggle-text="1" style="color:white;">&nbsp;&nbsp;Read More&nbsp;&nbsp;</button>
            </article>
            <br><br>
            <article class="news">
                <img src="./assets/uni/group.jpg" class="img" alt="blog1"><br>
                <a href="#" class="head">Industrial Collaborations - Department of ICT</a>
                <p>Collaboration between universities and industries is critical important for skills development through education and training and adoption of knowledge through innovation and technology transferring. In producing an internationally accredited
                    Technologist in the field of Information and Communication Technology, the Department of ICT has recently formed an Industrial Consultative Committee (ICC) in order to provide students with the necessary technical and professional
                    skills to face the challenges and adapt better for the rapidly changing phases of the highly competitive job market in today's world. In the accomplishment of this mission,<span class="toggle-text" id="toggle-text-2">
                the role of ICC is of immense importance as it plays a vital role in ensuring that our degree program, curriculum and academic
                activities stay aligned with the desired capacity and industrial requirements leading to the production
                of a high-quality professional graduates. Academics and students of the Department wish to maintain a 
                wide range of industrial collaboration portfolios like consultancy appointments, student participation
                in industrial collaboration projects, internships and visiting lectures etc. Department Industrial Consultative
                Committee (ICC) consisting of all the members of the academic staff, visiting lecturers, the department
                coordinator of the industrial training and invited members representing the industry meet normally twice
                a year. The ICC plays a vital role to make sure that our degree programme, curriculum and academic activities
                stay aligned with the desired capacity and industrial requirements leading to the production of a high quality
                professional graduate in field of ICT. .
            </span></p>
                <button class="toggle-text-button" toggle-text="2" style="color:white;">&nbsp;&nbsp;Read More&nbsp;&nbsp;</button><br>
            </article>
            <br><br>
            <article class="news">
                <img src="./assets/uni/crisis-innovation.png" class="img" alt="blog1"><br>
                <a href="#" class="head">Crisis Inspiring Innovation by Students of the University of Ruhuna</a>
                <p>The COVID 19 pandemic has created a real predicament, where the entire human population facing one of the deadliest challenges the world has ever encountered. Individuals and organizations are running after solutions for the problems it
                    has created, paving the way for many innovations and inventions around the world. In times like these, Sri Lankan universities too have stepped up to the plate in various capacities to ensure the fight against this virus isn't fought
                    alone. Whilst the government of Sri Lanka has delayed and re-scheduled the initially planned election to protect voters, a group of students from the Department of Engineering Technology, Faculty of Technology,<span class="toggle-text"
                        id="toggle-text-3">
                University of Ruhuna have developed an 'Automated Small Finger Marker' to aid officials to mark voters in an election. This machine has the capability to mark
                the small finger of a voter automatically and display the total number of voters on an LCD screen. Also, it is automatically
                sanitized after one use and the next voter and use it safely without the fear of contamination. The traditional way of using
                a marker pen to mark voters can be dangerous and risky in a time of a deadly virus. Thus, innovations like this would be
                ideal to protect the voters and ensure the safety of officials.<br>
                Under the guidance and supervision of Vice-Chancellor of the University of Ruhuna, Senior Professor Sujeewa Amarasena,
                students could demonstrate their innovation at the election commission. The final product will be able to store voters' 
                details including name, National identity card number, fingerprint, and a photograph, allowing the government to maintain 
                a database of voters in a short period.
            </span></p>
                <button class="toggle-text-button" toggle-text="3" style="color:white;">&nbsp;&nbsp;Read More&nbsp;&nbsp;</button>
            </article>
        </section>

        <section class="right">

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

                <ul class="link">
                    <h2 class="caption">Campus Life</h2>
                    <li class="item"><a href="http://www.ruh.ac.lk/Uni/sports/">&nbsp;&nbsp;Sports</a></li>
                    <li class="item"><a href="http://www.ruh.ac.lk/Uni/cgu/">&nbsp;&nbsp;Career Guidance</a></li>
                    <li class="item"><a href="http://www.ruh.ac.lk/_struct.php?link=_site/_campus_life/counseling.html">&nbsp;&nbsp;Counseling</a></li>
                    <li class="item"><a href="http://www.ruh.ac.lk/_struct.php?link=_site/_campus_life/medical_center.html">&nbsp;&nbsp;Medical Facilities</a></li>
                </ul>

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