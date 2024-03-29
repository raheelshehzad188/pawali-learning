<?php
include 'function.php';
$page = 'home';
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E Shop - Bootstrap Ecommerce Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">

    <!-- Favicon -->
    <link href="<?= BASE_URL ?>assets/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>assets/lib/slick/slick.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>assets/lib/slick/slick-theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= BASE_URL ?>assets/css/style.css" rel="stylesheet">
</head>

<body>
<?php
include  "includes/header.php";
?>


<?php
include "parts/".$page.'.php';
?>

<!-- Back to Top -->
<?php
include  "includes/footer.php";
?>