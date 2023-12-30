<?php
include "function.php";
if(isset($_REQUEST['uname']) && isset($_REQUEST['upass']))
{
    $wh = array('email'=>$_REQUEST['uname'],'pass'=>$_REQUEST['upass']);
    $all = select('admins',$wh);
    if($all)
    {
        $user = $all[0];
        var_dump($user);
        die('Login success');
    }
    else{
        die('invalid details');
    }
}

?>