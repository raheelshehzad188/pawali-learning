<div class="row">
    <form action="<?= BASE_URL ?>/cs-admin/addcat.php" method="post">
        <?php
        include '../flash.php';
        ?>
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
</div>