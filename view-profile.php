<?php

session_start();
require_once 'config/config.php';
$allow_edit = false;

if (!preg_match('/\/([^\/]*)\/?$/', $_SERVER['REQUEST_URI'], $matches))
    echo 'Cannot find a user profile.';
  
    $profile_id = $matches[1];
    
    if($profile_id == $_SESSION['user_id']){
        
       $allow_edit = true;
    }
   
    ?>   
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
    <title>Personal Profile | Faculty of Technology</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="./css/all.css">


    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="./css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="./css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="stylesheet" href="../css/personalProfile.css">
    <link rel="stylesheet" href="../css/img-uploadstyle.css">
    
<style>
.profile-content  img{
    margin-left:2px;
}
img.add-item{
    cursor:pointer;
    margin-left:2px;
}
</style>

</head>

<body>


<!-- ----------------------------  Navigation ---------------------------------------------- -->
<div class="tab">
    <div class="text">
        <p>
            <img src="../assets/uni/logoFac.jpg">
            <span class="ban1">Faculty of Technology</span>
            <span class="ban2">University of Ruhuna</span>
        </p>

        <div class="buttons">
            <button class="btn-group"><a href="https://learn.zoom.us/"  target="_blank">Zoom Meetings(LEARN)</a></button>
            <button class="btn-group"><a href="http://teclms.ruh.ac.lk/moodle/"  target="_blank">LMS</a></button>
            <button class="btn-group"><a href="http://paravi.ruh.ac.lk/tecmis/" target="_blank">TECMIS</a></button>
            <button class="btn-group"><a href="../assets/uni/Intercom.pdf" target="_blank">INTERCOM</a></button>
        </div>
    </div>
</div>

<div class="topnav" id="myTopnav">

    <a href="../index.html" class="active">Home</a>
    <a href="../contact.html">Contact Us</a>
    <a href="../aboutus.html">About Us</a>
    <div class="dropdown">
        <button class="dropbtn">Departments
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="../dep_ET.html">Engineering Technology</a>
            <a href="../department1.html">Information & Communication  Technology</a>
            <a href="../dep_BST.html">Biosystems Technology</a>
            <a href="../dep_MDS.html">Multidisciplinary Studies</a>
        </div>
    </div>


    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myNavFunction()">&#9776;</a>
</div>

<!-- ------------x---------------  Navigation --------------------------x------------------- -->
<?php 

$userid = $_SESSION['user_id'];
 $query = "SELECT ap.*,d.name as dept_name FROM academic_profiles ap,departments d  WHERE user_id=$userid AND ap.department=d.code";

    
    if ($result = $conn->query($query)) {
        while ($row = $result -> fetch_object()) {
            $displayname =  $row->display_name;
            $email =  $row->email;
            $department =  $row->dept_name;
            $designation = $row->designation;
            $profile_picid =  $row->profile_picid;
            $contact_numbers=  $row->contact_numbers;
            $linkedin_url=  $row->linkedin_url;
            $resgate_url=  $row->resgate_url;
            $google_scholar_url=  $row->google_scholar_url;
        }
        
        
        $result -> free_result();
    }


    $userPicture = !empty($profile_picid)?  $profile_picid :'default.jpg';
    $userPictureURL = '../assets/staff/academic/'.$userPicture;
    
?>

<!-- ---------------------------  Page Content --------------------------------------------- -->
<div class="main">
    <div class="main-content">
        <div class="posts">


            <h2><?php echo $displayname;?></h2>
           
            <!-- ////////////////////////////// -->
            <div class="container">
    <div class="user-box">
        <div class="img-relative">
            <!-- Loading image -->
            <div class="overlay uploadProcess" style="display: none;">
                <div class="overlay-content"><img src="../assets/loading.gif"/></div>
            </div>
            <!-- Hidden upload form -->
            <form method="post" action="../ajaxprocess.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
                <input type="file" name="picture" id="fileInput"  style="display:none"/>
                <input type="hidden" name="task" id="task"  value="profileimageupload"/>
            </form>
            <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
            <!-- Image update link -->
            <a class="editLink" href="javascript:void(0);"><img src="../assets/edit-image.png"/></a>
            <!-- Profile image -->
            <img src="<?php echo $userPictureURL; ?>" id="imagePreview">
        </div>
        
    </div>
</div>
 <!-- ////////////////////////////// -->
<!--             <div class="profile_img"> -->
<!--                 <img src="../assets/uni/drsubash.png" alt="blog1"> -->
<!--             </div> -->
            <p class="profileDetails">
               <?php echo $department;?><br><?php echo $designation;?><br>
                <?php echo $email;?><br>
                <?php echo $contact_numbers;?><br><br>
                <a href="<?php echo $google_scholar_url?>" target="_blank"><img src="../assets/uni/GoogleScholar2.jpg" alt="" width="40" height="35" style="margin-left:0px"></a>
                <a href="<?php echo $resgate_url?>" target="_blank"><img src="../assets/uni/ResearchGate.png" alt="" width="40" height="35" style="margin-left:10px"></a>
                <a href="<?php echo $linkedin_url?>" target="_blank"><img src="../assets/uni/linkedin.png" alt="" width="40" height="35" style="margin-left:10px"></a>
            </p>
            <br><br><br><br><br>

            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                    	ACADEMIC AND PROFESSIONAL QUALIFICATIONS
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content profContent">
                        <div id="add-professional_qualifications"><img class="add-item" src="../assets/add.png"  onclick="addNewRow('professional_qualifications');">Add New </div>
                        <br>
                        <?php 
                        $query = "SELECT * FROM professional_qualifications WHERE user_id=$profile_id ORDER BY id DESC";
                        
                        if ($result = $conn->query($query)) {
                            ?>
                            <table class="content-table profile-content" id="tab-professional_qualifications">
                            <?php 
                            
                            while ($row = $result -> fetch_object()) {
                              
                                ?>
                                <tr>
                                <td id="professional_qualifications_designation_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->designation; ?></td>
                               <td id="professional_qualifications_institute_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->institute; ?></td>
                                <td id="professional_qualifications_period_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->period; ?></td>
                                <?php if($allow_edit){
                                    ?>
                                    <td id="btn_professional_qualifications_<?php echo $row->id ?>" >
                                    <img class="icon" src="../assets/edit.png" id="edit_professional_qualifications_<?php echo $row->id ?>" title="Edit" onclick="editProfile('professional_qualifications',<?php echo $row->id ?>)">
                                   <!--  <input id="edit_publications_<?php // echo $row->id ?>" type="button" value="Edit" onclick="editProfile('publications',<?php // echo $row->id ?>)"> -->
                                    <img class="icon"  src="../assets/save.png" id="save_professional_qualifications_<?php echo $row->id ?>" title="Save" onclick="updateProfileField('professional_qualifications',<?php echo $row->id ?>)" style="display:none;"/>
                                    <img class="icon"  src="../assets/cancel.png" id="cancel_professional_qualifications_<?php echo $row->id ?>"  title="Cancel" onclick="cancelProfileField('professional_qualifications',<?php echo $row->id ?>)" style="display:none;"/>
                                    
                                    </td>
                                    <td id="btn_professional_qualifications_removebtn_<?php echo $row->id ?>">
                                    <img class="icon"  src="../assets/remove.png" title="Remove" onclick="removeProfileField('professional_qualifications',<?php echo $row->id ?>)"/>
                                    </td>
                                    <?php 
                                }?>
                                </tr>
                                <?php 
                                
                            }
                            
                            
                            $result -> free_result();
                            ?>
                             </table>
                            <?php 
                        }
                        ?>
                       </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        PUBLICATIONS
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                        <div id="add-publications"><img class="add-item" src="../assets/add.png" onclick="addNewRow('publications');">Add New Publication</div>
                        <br>
                        <?php 
                        $query = "SELECT * FROM publications WHERE user_id=$profile_id ORDER BY id DESC";
                        
                        if ($result = $conn->query($query)) {
                            ?>
                            <table class="content-table profile-content" id="tab-publications">
                            <?php 
                            
                            while ($row = $result -> fetch_object()) {
                              
                                ?>
                                <tr><td id="publications_publication_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->publication; ?></td>
                                
                                <?php if($allow_edit){
                                    ?>
                                    <td id="btn_publications_<?php echo $row->id ?>" >
                                    <img class="icon" src="../assets/edit.png" id="edit_publications_<?php echo $row->id ?>" title="Edit" onclick="editProfile('publications',<?php echo $row->id ?>)">
                                   <!--  <input id="edit_publications_<?php // echo $row->id ?>" type="button" value="Edit" onclick="editProfile('publications',<?php // echo $row->id ?>)"> -->
                                    <img class="icon"  src="../assets/save.png" id="save_publications_<?php echo $row->id ?>" title="Save" onclick="updateProfileField('publications',<?php echo $row->id ?>)" style="display:none;"/>
                                    <img class="icon"  src="../assets/cancel.png" id="cancel_publications_<?php echo $row->id ?>"  title="Cancel" onclick="cancelProfileField('publications',<?php echo $row->id ?>)" style="display:none;"/>
                                    
                                    </td>
                                    <td id="btn_publications_removebtn_<?php echo $row->id ?>">
                                    <img class="icon"  src="../assets/remove.png" title="Remove" onclick="removeProfileField('publications',<?php echo $row->id ?>)"/>
                                    </td>
                                    <?php 
                                }?>
                                </tr>
                                <?php 
                                
                            }
                            
                            
                            $result -> free_result();
                            ?>
                             </table>
                            <?php 
                        }
                        ?>
                        
                        	
                       
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        AWARDS & FELLOWSHIPS
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                         <div id="add-awards"><img class="add-item" src="../assets/add.png"  onclick="addNewRow('awards');">Add New </div>
                        <br>
                        <?php 
                        $query = "SELECT * FROM awards WHERE user_id=$profile_id ORDER BY id DESC";
                        
                        if ($result = $conn->query($query)) {
                            ?>
                            <table class="content-table profile-content" id="tab-awards">
                            <?php 
                            
                            while ($row = $result -> fetch_object()) {
                              
                                ?>
                                <tr>
                                <td id="awards_award_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->award; ?></td>
                                <?php if($allow_edit){
                                    ?>
                                    <td id="btn_awards_<?php echo $row->id ?>" >
                                    <img class="icon" src="../assets/edit.png" id="edit_awards_<?php echo $row->id ?>" title="Edit" onclick="editProfile('awards',<?php echo $row->id ?>)">
                                   <!--  <input id="edit_publications_<?php // echo $row->id ?>" type="button" value="Edit" onclick="editProfile('publications',<?php // echo $row->id ?>)"> -->
                                    <img class="icon"  src="../assets/save.png" id="save_awards_<?php echo $row->id ?>" title="Save" onclick="updateProfileField('awards',<?php echo $row->id ?>)" style="display:none;"/>
                                    <img class="icon"  src="../assets/cancel.png" id="cancel_awards_<?php echo $row->id ?>"  title="Cancel" onclick="cancelProfileField('awards',<?php echo $row->id ?>)" style="display:none;"/>
                                    
                                    </td>
                                    <td id="btn_awards_removebtn_<?php echo $row->id ?>">
                                    <img class="icon"  src="../assets/remove.png" title="Remove" onclick="removeProfileField('awards',<?php echo $row->id ?>)"/>
                                    </td>
                                    <?php 
                                }?>
                                </tr>
                                <?php 
                                
                            }
                            
                            
                            $result -> free_result();
                            ?>
                             </table>
                            <?php 
                        }
                        ?>
                           
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        MEMBERSHIPS & ACTIVITIES IN PROFESSIONAL BODIES
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                             <div id="add-memberships"><img class="add-item" src="../assets/add.png"  onclick="addNewRow('memberships');">Add New </div>
                        <br>
                        <?php 
                        $query = "SELECT * FROM memberships WHERE user_id=$profile_id ORDER BY id DESC";
                        
                        if ($result = $conn->query($query)) {
                            ?>
                            <table class="content-table profile-content" id="tab-memberships">
                            <?php 
                            
                            while ($row = $result -> fetch_object()) {
                              
                                ?>
                                <tr>
                                <td id="memberships_membership_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->membership; ?></td>
                                <?php if($allow_edit){
                                    ?>
                                    <td id="btn_memberships_<?php echo $row->id ?>" >
                                    <img class="icon" src="../assets/edit.png" id="edit_memberships_<?php echo $row->id ?>" title="Edit" onclick="editProfile('memberships',<?php echo $row->id ?>)">
                                   <!--  <input id="edit_publications_<?php // echo $row->id ?>" type="button" value="Edit" onclick="editProfile('publications',<?php // echo $row->id ?>)"> -->
                                    <img class="icon"  src="../assets/save.png" id="save_memberships_<?php echo $row->id ?>" title="Save" onclick="updateProfileField('memberships',<?php echo $row->id ?>)" style="display:none;"/>
                                    <img class="icon"  src="../assets/cancel.png" id="cancel_memberships_<?php echo $row->id ?>"  title="Cancel" onclick="cancelProfileField('memberships',<?php echo $row->id ?>)" style="display:none;"/>
                                    
                                    </td>
                                    <td id="btn_memberships_removebtn_<?php echo $row->id ?>">
                                    <img class="icon"  src="../assets/remove.png" title="Remove" onclick="removeProfileField('memberships',<?php echo $row->id ?>)"/>
                                    </td>
                                    <?php 
                                }?>
                                </tr>
                                <?php 
                                
                            }
                            
                            
                            $result -> free_result();
                            ?>
                             </table>
                            <?php 
                        }
                        ?>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <div class="accordion-item-header">
                        RESEARCH INTERESTS
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                         <div id="add-research_interests"><img class="add-item" src="../assets/add.png"  onclick="addNewRow('research_interests');">Add New </div>
                        <br>
                        <?php 
                        $query = "SELECT * FROM research_interests WHERE user_id=$profile_id ORDER BY id DESC";
                        
                        if ($result = $conn->query($query)) {
                            ?>
                            <table class="content-table profile-content" id="tab-research_interests">
                            <?php 
                            
                            while ($row = $result -> fetch_object()) {
                              
                                ?>
                                <tr>
                                <td id="research_interests_researchinterest_<?php echo $row->id ?>" style="background-color:#b3ffec;color:#000"><?php echo $row->researchinterest; ?></td>
                                <?php if($allow_edit){
                                    ?>
                                    <td id="btn_research_interests_<?php echo $row->id ?>" >
                                    <img class="icon" src="../assets/edit.png" id="edit_research_interests_<?php echo $row->id ?>" title="Edit" onclick="editProfile('research_interests',<?php echo $row->id ?>)">
                                   <!--  <input id="edit_publications_<?php // echo $row->id ?>" type="button" value="Edit" onclick="editProfile('publications',<?php // echo $row->id ?>)"> -->
                                    <img class="icon"  src="../assets/save.png" id="save_research_interests_<?php echo $row->id ?>" title="Save" onclick="updateProfileField('research_interests',<?php echo $row->id ?>)" style="display:none;"/>
                                    <img class="icon"  src="../assets/cancel.png" id="cancel_research_interests_<?php echo $row->id ?>"  title="Cancel" onclick="cancelProfileField('research_interests',<?php echo $row->id ?>)" style="display:none;"/>
                                    
                                    </td>
                                    <td id="btn_research_interests_removebtn_<?php echo $row->id ?>">
                                    <img class="icon"  src="../assets/remove.png" title="Remove" onclick="removeProfileField('research_interests',<?php echo $row->id ?>)"/>
                                    </td> 
                                    <?php 
                                }?>
                                </tr>
                                <?php 
                                
                            }
                            
                            $result -> free_result();
                            ?>
                             </table>
                            <?php 
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
                    <li><a href="../department1.html">&nbsp;&nbsp;Information & Communication Technology</a></li>
                    <li><a href="../dep_ET.html">&nbsp;&nbsp;Engineering Technology</a></li>
                    <li><a href="../dep_BST.html">&nbsp;&nbsp;Biosystems Technology</a></li>
                    <li><a href="../dep_MDS.html">&nbsp;&nbsp;Multidisciplinary Studies</a></li>
                </ul>
            </div>
        </div>

        <div class="box" data-aos="fade-right" data-aos-delay="200">
            <h2 class="footerHeader">Contact Us</h2>
            <div class="content">
                <div class="place">
                    <i class="fa fa-address-book"></i>
                    <span class="text">&nbsp;&nbsp;Faculty of Technology,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University of Ruhuna,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Karagoda Uyangoda,<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matara</span>
                </div>
                <div class="phone">
                    <i class="fa fa-phone"></i>
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
            Copyright  2020 Faculty of Technology. All rights Reserved.
        </h6>
    </div>
</footer>

<!-- -------------x------------- Footer --------------------x------------------- -->

<script>
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {



    const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
    if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if(accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = (accordionItemBody.scrollHeight+90) + "px";
    }
    else {
      accordionItemBody.style.maxHeight = 0;
    }

      });
    });
    </script>



<!-- Jquery Library file -->
<script src="../js/Jquery3.4.1.min.js"></script>

<!-- --------- Owl-Carousel js ------------------->
<script src="../js/owl.carousel.min.js"></script>

<!-- ------------ AOS js Library  ------------------------- -->
<script src="../js/aos.js"></script>

<!-- Custom Javascript file -->
 <script src="./js/main.js"></script>
	<script type="text/javascript" src="../js/ajax-funct.js"></script>

</body>

</html>