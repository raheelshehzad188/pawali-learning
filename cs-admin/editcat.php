<?php

include  '../function.php';
if(isset($_POST['cat_id']) && isset($_POST['name']) && $_POST['name']) {
    $id = $_POST['cat_id'];
    $sufyan = array(
        'name' => $_POST['name']
    );
    if (update('categories', $sufyan,'id',$id)) {
        $_SESSION['success'] = 'Category update successfully';
    } else {
        $_SESSION['error'] = 'Something working wrong';
    }
}
else{
    $_SESSION['error'] = 'Please fill required firelds';
}
if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']) {
    $url = BASE_URL.'/cs-admin?page=categories';
    header('Location: ' .$url);
}
else{
    die('forbidden request');
}



?>