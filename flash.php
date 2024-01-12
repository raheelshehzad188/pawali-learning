<?php
if(isset($_SESSION['success']))
{
    $s = $_SESSION['success'];
    unset($_SESSION['success']);
    ?>

    <div class="alert alert-success" role="alert">
        <?= $s ?>
    </div>
    <?php
}
if(isset($_SESSION['error']))
{
    $e = $_SESSION['error'];
    unset($_SESSION['error']);
    ?>

    <div class="alert alert-danger" role="alert">
        <?= $e ?>
    </div>
    <?php
}
?>