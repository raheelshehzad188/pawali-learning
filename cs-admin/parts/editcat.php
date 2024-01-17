<?php
$cat_id = (isset($_REQUEST['cat_id'])?$_REQUEST['cat_id']:0);
$cat = select_row('categories',array('id'=>$cat_id));
if(!$cat)
{
    die('redirect back');
}
?>
<div class="row">
    <form action="<?= BASE_URL ?>/cs-admin/editcat.php" method="post">
        <input type="hidden" name="cat_id" value="<?= $cat_id ?>">
        <?php
        include '../flash.php';
        ?>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" value="<?= $cat['name'] ?>" name="name">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>