<?php
session_start();


$task = $_REQUEST['task'];


switch($task){
    case 'updateprofilefield':
        $table = $_GET['table'];
        $key = $_GET['key'];
        
        updateprofilefield($table,$key);
        break;
    case 'savenewfield':
        $table = $_GET['table'];
        
        saveprofilefield($table);
        break;
    case 'removeprofilefield':
        $table = $_GET['table'];
        $key = $_GET['key'];
        removeprofilefield($table,$key);
        break;
    case 'profileimageupload':
        profileimageupload();
        break;
}


function updateprofilefield($table,$key){
    $userid = $_SESSION['user_id'];
    require_once 'config/config.php';
    
    
    switch($table){
        case 'publications' :
            $value = $_GET['publication'];
            $query = "UPDATE $table SET publication='$value' WHERE id=$key  ";
            break;
        case 'professional_qualifications':
            $designation = $_GET['designation'];
            $institute   = $_GET['institute'];
            $period      = $_GET['period'];
            
            $query = "UPDATE $table SET `designation`='$designation',`institute`='$institute',`period`='$period' 
                      WHERE `user_id`=$userid AND `id`=$key";
            break;
        case 'awards':
            $award = $_GET['award'];
            $query = "UPDATE $table SET award='$award' WHERE id=$key  ";
            break;
        case 'memberships':
            $membership = $_GET['membership'];
            $query = "UPDATE $table SET membership='$membership' WHERE id=$key";
            break;
        case 'research_interests':
            $research_interests = $_GET['researchinterest'];
            $query = "UPDATE $table SET researchinterest='$research_interests' WHERE id=$key";
            break;
    }
    
  
    if($result = $conn->query($query)){
        
       $return_array = array('status'=>'true');
       
       
       echo json_encode($return_array);
       
    }
    die;
}

function saveprofilefield($table){
    $userid = $_SESSION['user_id'];
    require_once 'config/config.php';
    
    switch($table){
        case 'publications' :
            $value = $_GET['value'];
            $query = "INSERT INTO $table(`publication`,`user_id`) VALUES('$value',$userid)";
            break;
        case 'professional_qualifications':
            $designation = $_GET['designation'];
            $institute        = $_GET['institute'];
            $period      = $_GET['period'];
            
            $query = "INSERT INTO $table(`user_id`,`designation`,`institute`,`period`) VALUES('$userid','$designation','$institute','$period')";
            break;
        case 'awards' :
            $value = $_GET['value'];
            $query = "INSERT INTO $table(`award`,`user_id`) VALUES('$value',$userid)";
            break;
        case 'memberships' :
            $value = $_GET['value'];
            $query = "INSERT INTO $table(`membership`,`user_id`) VALUES('$value',$userid)";
            break;
        case 'research_interests':
            $value = $_GET['value'];
            $query = "INSERT INTO $table(`researchinterest`,`user_id`) VALUES('$value',$userid)";
            break;
    } 
   
    
    if($result = $conn->query($query)){
        $new_id = $conn->insert_id;
        $return_array = array('status'=>'true','insert_id'=>$new_id);
        
        echo json_encode($return_array);
        
    }
    die;
}

function removeprofilefield($table,$key){
    $userid = $_SESSION['user_id'];
    
    require_once 'config/config.php';
    $query = "DELETE FROM  $table WHERE id=$key";
    
    if($result = $conn->query($query)){
        
        $return_array = array('status'=>'true');
        
        echo json_encode($return_array);
        
    }
    die;
}

function profileimageupload(){
    if(!empty($_FILES['picture']['name'])){
        //Include database configuration file
        include_once 'config/config.php';
        
        //File uplaod configuration
        $result = 0;
        $uploadDir = "assets/staff/academic/";
        $fileName = time().'_'.basename($_FILES['picture']['name']);
        $targetPath = $uploadDir. $fileName;
        
        //Upload file to server
        if(@move_uploaded_file($_FILES['picture']['tmp_name'], $targetPath)){
            //Get current user ID from session
            $userId = $_SESSION['user_id'];
            
            //Update picture name in the database
            $update = $conn->query("UPDATE academic_profiles SET 	profile_picid = '".$fileName."' WHERE user_id = $userId");
            
            //Update status
            if($update){
                $result = 1;
            }
        }
        $targetPath = '../'.$uploadDir. $fileName;
        //Load JavaScript function to show the upload status
        echo '<script type="text/javascript">window.top.window.completeUpload(' . $result . ',\'' . $targetPath . '\');</script>  ';
    }
    
}