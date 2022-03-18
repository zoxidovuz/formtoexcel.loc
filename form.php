<?php
session_start();
include __DIR__ . "/includes/layouts/header.php";

?>
    <div class="container">
        <div class="row justify-content-center">
            <?php include __DIR__ . "/includes/layouts/alert.php"; ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Please fill all data into form!
                            <a href="index.php" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <form action="includes/save.php" method="POST">
                            <h4 class="mb-3">Loan Applicants Details</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3 row">
                                        <label for="" class="col-md-2">Applicant Names</label>
                                        <div class="col-md-10">
                                            <input type="text" name="applicant_name"  class="form-control " required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">Applicant 1</div>
                                        <div class="col-md-3">Applicant 2</div>
                                        <div class="col-md-3">Applicant 3</div>
                                        <div class="col-md-3">Applicant 4</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Applicant Status:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[1]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[2]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[3]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[4]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Couple with other Applicants:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="text" name="couple_with_other_applicants[1]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="text" name="couple_with_other_applicants[2]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="text" name="couple_with_other_applicants[3]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="text" name="couple_with_other_applicants[4]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Number of Dependents:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="number_of_dependents[1]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="number_of_dependents[2]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="number_of_dependents[3]" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="number_of_dependents[4]" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Residential Status:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[1]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property</option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[2]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property</option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[3]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property</option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[4]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property</option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- New Loan Begin -->

                            <h4 class="mb-3">New Loan</h4>

                            <div class="row mb-3">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-2">Loan amount</div>
                                        <div class="col-md-2">Loan Terms in Years</div>
                                        <div class="col-md-3">Loan Terms in Years</div>
                                        <div class="col-md-3">Int. Only Period</div>
                                        <div class="col-md-2">Actual Interest Rate</div>
                                    </div>
                                </div>
                            </div>

                            <?php for($i = 1; $i <= 5; $i++):?>
                            <div class="row">
                                <div class="col-md-2">Loan <?= $i?></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group mb-3">
                                                <input type="number" name="loan_amount[<?=$i?>]"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group mb-3">
                                                <input type="number" name="loan_terms_in_years[<?=$i?>]"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="only_period[<?=$i?>]"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="actual_interest_rate[<?=$i?>]"  class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group mb-3">
                                                <select name="investment[<?=$i?>]" id="investment[<?=$i?>]" class="form-control" required>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor;?>
                            <!-- New loan section end-->

                            <!-- Securities section begin-->
                            <h4 class="mb-4">Securities Proposed (Offered to Well- Nigh)</h4>

                            <?php for($i = 1; $i <= 5; $i++):?>
                            <div class="row">
                                <div class="col-md-2">Security <?= $i?></div>
                                <div class="col-md-10">
                                    <div class="form-group mb-3">
                                        <input type="number" class="form-control" name="security[<?= $i?>]">
                                    </div>
                                </div>
                            </div>
                            <?php endfor;?>

                            <!-- Securities section end-->


                            <div class="row mb-3">
                                <div class="col-md-2">Gross Annual Income</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">Applicant 1</div>
                                        <div class="col-md-3">Applicant 2</div>
                                        <div class="col-md-3">Applicant 3</div>
                                        <div class="col-md-3">Applicant 4</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Is your Credit Score>699? (Y/N):</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[1]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[2]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[3]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[4]" id="" class="form-control" required>
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Base Income (PAYG):</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="base_income[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="base_income[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="base_income[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="base_income[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Overtime:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="overtime[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="overtime[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="overtime[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="overtime[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Bonus:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="bonus[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="bonus[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="bonus[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="bonus[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Commission:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="commission[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="commission[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="commission[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="commission[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Share Dividend income:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="dividend_income[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="dividend_income[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="dividend_income[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="dividend_income[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Non-taxable Income:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="taxable_income[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="taxable_income[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="taxable_income[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="taxable_income[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                <div class="col-md-12 ">
                                    <div class="form-group mb-3">
                                        <button class="btn btn-success " type="submit"  name="save_date">Save</button>
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