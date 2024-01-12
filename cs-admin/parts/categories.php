<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <a href="<?= BASE_URL ?>/cs-admin?page=addcat" class="btn btn-info">Add category</a>
            <div class="card-body">
                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                .
            </div>
        </div>
        <?php
        include '../flash.php';
        ?>
        <?php
        $cats = select('categories');
        ?>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php
                    foreach ($cats as $k=> $v)
                    {
                    ?>
                    <tr>
                        <td><?= $k+1 ?></td>
                        <td><?= (isset($v['name'])?$v['name']:'') ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>