<?php
session_start();
include __DIR__ . "/includes/layouts/header.php";

?>
    <div class="container">
        <div class="row justify-content-center">
            <?php include __DIR__ . "/includes/layouts/alert.php"; ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Please fill all data into form!
                            <a href="index.php" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="includes/save.php" method="POST">
                            <div class="row">
                                <?php for($i = 1; $i <= 5; $i++):?>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Loan amount-<?=$i?></label>
                                            <input type="number" name="loan_amount[<?=$i?>]"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Loan Terms in Years-<?=$i?></label>
                                            <input type="number" name="loan_terms_in_years[<?=$i?>]"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Int. Only Period-<?=$i?></label>
                                            <input type="number" name="only_period[<?=$i?>]"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Actual Interest Rate-<?=$i?></label>
                                            <input type="number" name="actual_interest_rate[<?=$i?>]"  class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="">Investment-<?=$i?></label>
                                            <input type="number" name="investment[<?=$i?>]"  class="form-control" required>
                                        </div>
                                    </div>
                                <?php endfor;?>
                                <div class="col-md-12 ">
                                    <div class="form-group mb-3">
                                        <button class="btn btn-success " type="submit"  name="save_date">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include __DIR__ . "/includes/layouts/footer.php";

?>