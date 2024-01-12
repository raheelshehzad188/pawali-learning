<?php

include  '../function.php';
if(isset($_POST['name']) && $_POST['name']) {
    $sufyan = array(
        'name' => $_POST['name']
    );
    if (add('categories', $sufyan)) {
        $_SESSION['success'] = 'Category add successfully';
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