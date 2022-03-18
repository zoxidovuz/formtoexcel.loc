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
                        <h4>Add contact
                            <a href="add-contact.php" class="btn btn-primary float-end">Create</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Firs name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if (empty($contacts)) {
                                echo "<tr>Contacts has not!</tr>";
                            } else {
                                $i = 1;
                                foreach ($contacts as $key => $value) {
                                    ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td><?= $value['first_name'] ?></td>
                                        <td><?= $value['email'] ?></td>
                                        <td><?= $value['phone'] ?></td>
                                        <td>
                                            <a href="edit-contact.php?token=<?= $key ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="code.php" method="POST">
                                                <input type="hidden" name="token" value="<?= $key?>">
                                                <button type="submit" class="btn btn-danger btn-sm" name="delete_contact">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include __DIR__ . "/includes/layouts/footer.php";

?>