<?php session_start();
require_once 'config/config.php';
if(isset($_SESSION['user_name'])){
    header('Location: index.php'); exit;
    
}

if(isset($_POST['username'])){
    
    $query = "SELECT  user_id,username, AES_DECRYPT(password,1000) as pwd FROM users WHERE username='".$_POST['username']."'";
    if ($result = $conn->query($query)) {
        while ($row = $result -> fetch_object()) {
            $userid =  $row->user_id;
           $username =  $row->username;
           $password =  $row->pwd;
           
        }
        
        if($password == $_POST['password'] ){
            $_SESSION['user_id'] = $userid;
            $_SESSION['user_name'] = $username;
            header('Location: index.php');
        }else{
            $message = 'Invalid Username or Password.';
            $status = 0;
        }
        $result -> free_result();
    }else{
        
        $message = 'Invalid Username or Password.';
        $status = 0;
        
        echo $message;die;
    }
    
    $conn -> close();
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/login.css">
<title>Faculty of Technology - Login Page</title>
</head>
<body>
<body>
<div class="login-page">
<div class="form">
<div class="login">
<div><img src="assets/fot-logo.png" /></div>

<div class="login-header">
<h3>LOGIN</h3>
<p>Please enter your credentials to login here.</p>
</div>
</div>
<form class="login-form" action="" method="post">
<input type="text" placeholder="username" name="username" required/>
<input type="password" placeholder="password" name="password" required/>
<button>login</button>
</form>
</div>
</div>
</body>
</body>
</html>