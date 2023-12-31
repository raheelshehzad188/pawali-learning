<?php
include "function.php";
if(isset($_REQUEST['uname']) && isset($_REQUEST['upass']))
{
    $wh = array('email'=>$_REQUEST['uname'],'pass'=>$_REQUEST['upass']);
    $all = select('admins',$wh);
    if($all)
    {
        $user = $all[0];
        $_SESSION['admin_login'] = $user;
        header("Location: ".BASE_URL.'/cs-admin/index.php');
        ;
    }
    else{
        $_SESSION['login_error'] = 'Invalid details';
        header("Location: ".BASE_URL.'/cs-admin/login.php');
    }
}

?>