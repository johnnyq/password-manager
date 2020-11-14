<?php

include("config.php");
include("check_login.php");
include("functions.php");

if(isset($_POST['add_user'])){

    $username = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['username'])));
    $password = md5($_POST['password']);

    mysqli_query($mysqli,"INSERT INTO users SET username = '$username', password = '$password'");

    $_SESSION['alert_message'] = "User <strong>$name</strong> created!";
    
    header("Location: users.php");

}

if(isset($_POST['change_password'])){

    $password = $_POST['password'];
    $plain_password = $_POST['password'];
    if($session_password == $password){
        $password = $session_password;
    }else{
        $password = md5($password);

        //Update AES key to match your new password on logins
        $sql = mysqli_query($mysqli,"SELECT login_id, AES_DECRYPT(login_password, '$session_password') AS old_login_password FROM logins 
          WHERE user_id = $session_user_id");

        while($row = mysqli_fetch_array($sql)){
            $login_id = $row['login_id'];
            $old_login_password = $row['old_login_password'];
          
            mysqli_query($mysqli,"UPDATE logins SET login_password = AES_ENCRYPT('$old_login_password','$plain_password') WHERE login_id = $login_id");
        }
    }
    
    mysqli_query($mysqli,"UPDATE users SET password = '$password' WHERE user_id = $session_user_id");

    $_SESSION['alert_message'] = "Password updated!";
    
    header("Location: logins.php");

}


if(isset($_POST['edit_user'])){

    $user_id = intval($_POST['user_id']);
    $username = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['username'])));
    
    mysqli_query($mysqli,"UPDATE users SET username = '$username' WHERE user_id = $user_id");

    $_SESSION['alert_message'] = "User <strong>$name</strong> updated";
    
    header("Location: users.php");

}

if(isset($_POST['edit_general_settings'])){

    $config_api_key = strip_tags(mysqli_real_escape_string($mysqli,$_POST['config_api_key']));
    $old_aes_key = $config_aes_key;
    $config_aes_key = strip_tags(mysqli_real_escape_string($mysqli,$_POST['config_aes_key']));

    mysqli_query($mysqli,"UPDATE settings SET config_invoice_logo = '$path', config_api_key = '$config_api_key', config_aes_key = '$config_aes_key', config_base_url = '$config_base_url' WHERE company_id = $session_company_id");

    //Update AES key on client_logins if changed
    if($old_aes_key != $config_aes_key){
        $sql = mysqli_query($mysqli,"SELECT login_id, AES_DECRYPT(login_password, '$old_aes_key') AS old_login_password FROM logins 
          WHERE company_id = $session_company_id");

        while($row = mysqli_fetch_array($sql)){
            $login_id = $row['login_id'];
            $old_login_password = $row['old_login_password'];
          
            mysqli_query($mysqli,"UPDATE logins SET login_password = AES_ENCRYPT('$old_login_password','$config_aes_key') WHERE login_id = $login_id");
        }
    }

    $_SESSION['alert_message'] = "Settings updated";

    header("Location: " . $_SERVER["HTTP_REFERER"]);

}

if(isset($_POST['add_login'])){

    $name = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['name'])));
    $url = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['url'])));
    $username = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['username'])));
    $password = strip_tags(mysqli_real_escape_string($mysqli,$_POST['password']));

    mysqli_query($mysqli,"INSERT INTO logins SET login_name = '$name', login_url = '$url', login_username = '$username', login_password = AES_ENCRYPT('$password','$session_password'), user_id = $session_user_id");

    $_SESSION['alert_message'] = "Login added";
    
    header("Location: logins.php");

}

if(isset($_POST['edit_login'])){

    $login_id = intval($_POST['login_id']);
    $name = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['name'])));
    $url = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['url'])));
    $username = trim(strip_tags(mysqli_real_escape_string($mysqli,$_POST['username'])));
    $password = strip_tags(mysqli_real_escape_string($mysqli,$_POST['password']));

    mysqli_query($mysqli,"UPDATE logins SET login_name = '$name', login_url = '$url', login_username = '$username', login_password = AES_ENCRYPT('$password','$session_password') WHERE login_id = $login_id");

    $_SESSION['alert_message'] = "Login updated";
    
    header("Location: " . $_SERVER["HTTP_REFERER"]);

}

if(isset($_GET['delete_login'])){
    $login_id = intval($_GET['delete_login']);

    mysqli_query($mysqli,"DELETE FROM logins WHERE login_id = $login_id");

    $_SESSION['alert_message'] = "Login deleted";
    
    header("Location: " . $_SERVER["HTTP_REFERER"]);
  
}

?>