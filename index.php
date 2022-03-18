<?php
session_start();
//include __DIR__ . "/dbconf.php";
include __DIR__ . "/includes/layouts/header.php";


?>
    <div class="container">
        <div class="row">

            <?php include __DIR__ . "/includes/layouts/alert.php"; ?>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Form to excel
                            <a href="/form.php" class="btn btn-primary float-end">Create</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        Press create button!
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include __DIR__ . "/includes/layouts/footer.php";

?>