<?php
include  '../config.php';
if(!isset($_SESSION['admin_login']))
{
    header("Location: ".BASE_URL.'/cs-admin/login.php');
    exit();
}
$page = 'dashboard';
if(isset($_GET['page']))
{
    $page = $_GET['page'];
}
?>
<?php include "includes/header.php"; ?>
        <div id="layoutSidenav">
            <?php include "includes/sidebar.php"; ?>
            <div id="layoutSidenav_content">
<?php include "parts/".$page.'.php';?>
                <?php include "includes/footer.php"; ?>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
