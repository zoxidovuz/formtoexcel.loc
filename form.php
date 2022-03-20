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
                                            <input type="text" name="applicant_name" class="form-control " >
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
                                                <select name="applicant_status[1]" id="" class="form-control" data-key="1">
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[2]" id="" class="form-control" data-key="2">
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[3]" id="" class="form-control" data-key="3">
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Individual (Single)">Individual (Single)</option>
                                                    <option value="Individual (Couple)">Individual (Couple)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="applicant_status[4]" id="" class="form-control" data-key="4">
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
                                                <select name="couple_with_other_applicants[1]" id="applicant_status[1]" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Non-loan party">Non-loan party</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="couple_with_other_applicants[2]" id="applicant_status[2]" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Non-loan party">Non-loan party</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="couple_with_other_applicants[3]" id="applicant_status[3]" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Non-loan party">Non-loan party</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="couple_with_other_applicants[4]" id="applicant_status[4]" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Non-loan party">Non-loan party</option>
                                                </select>
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
                                                <select name="number_of_dependents[1]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <?php for($i = 0; $i <= 10; $i++): ?>
                                                    <option value="<?= $i?>"><?= $i?></option>
                                                    <?php endfor;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="number_of_dependents[2]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <?php for($i = 0; $i <= 10; $i++): ?>
                                                        <option value="<?= $i?>"><?= $i?></option>
                                                    <?php endfor;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="number_of_dependents[3]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <?php for($i = 0; $i <= 10; $i++): ?>
                                                        <option value="<?= $i?>"><?= $i?></option>
                                                    <?php endfor;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="number_of_dependents[4]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <?php for($i = 0; $i <= 10; $i++): ?>
                                                        <option value="<?= $i?>"><?= $i?></option>
                                                    <?php endfor;?>
                                                </select>
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
                                                <select name="residential_status[1]" id="" class="form-control"
                                                        >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property
                                                    </option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[2]" id="" class="form-control"
                                                        >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property
                                                    </option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[3]" id="" class="form-control"
                                                        >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property
                                                    </option>
                                                    <option value="Living with Parents">Living with Parents</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="residential_status[4]" id="" class="form-control"
                                                        >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Renting">Renting</option>
                                                    <option value="Living in owned Property">Living in owned Property
                                                    </option>
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
                                        <div class="col-md-3">Int. Only Period</div>
                                        <div class="col-md-2">Actual Interest Rate</div>
                                        <div class="col-md-3">Investment (Y/N)</div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <div class="row">
                                    <div class="col-md-2">Loan <?= $i ?></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="loan_amount[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="loan_terms_in_years[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="only_period[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="actual_interest_rate[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <select name="investment[<?= $i ?>]" id="investment[<?= $i ?>]"
                                                            class="form-control" >
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Y">Yes</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>
                            <!-- New loan section end-->

                            <!-- Securities section begin-->
                            <h4 class="mb-4">Securities Proposed (Offered to Well- Nigh)</h4>

                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <div class="row">
                                    <div class="col-md-2">Security <?= $i ?></div>
                                    <div class="col-md-10">
                                        <div class="form-group mb-3">
                                            <input type="number" class="form-control" name="security[<?= $i ?>]">
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

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
                                                <select name="credit_score[1]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[2]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[3]" id="" class="form-control" >
                                                    <option value="" selected disabled>Select</option>
                                                    <option value="Y">Yes</option>
                                                    <option value="N">N</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <select name="credit_score[4]" id="" class="form-control" >
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

                            <!-- Rental income for all new loans offered to Well Nigh -->
                            <div class="row mb-3">
                                <div class="col-md-2">Residential Proposed Security</div>
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
                                <div class="col-md-2">Total Annual Rental:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="annual_rental[1]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="annual_rental[2]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="annual_rental[3]">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" name="annual_rental[4]">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3">Ownership % for all new loans per individual applicant</h4>

                            <div class="row mb-3">
                                <div class="col-md-2">Investment Portion</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">Applicant 1 % Share</div>
                                        <div class="col-md-3">Applicant 2 % Share</div>
                                        <div class="col-md-3">Applicant 3 % Share</div>
                                        <div class="col-md-3">Applicant 4 % Share</div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <div class="row">
                                    <div class="col-md-2">Loan <?= $i ?></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_loan_app1[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_loan_app2[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_loan_app3[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_loan_app4[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>


                            <h4 class="mb-3">Annual Commitments (Existing and not be refinanced)</h4>

                            <div class="row mb-3">
                                <div class="col-md-2"></div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-2">Limit</div>
                                        <div class="col-md-2">Original Loan Terms (Years)</div>
                                        <div class="col-md-2">Current IO period</div>
                                        <div class="col-md-2">Int Only Y/N</div>
                                        <div class="col-md-2">Monthly Payments</div>
                                        <div class="col-md-2">Investment</div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <div class="row">
                                    <div class="col-md-2">Existing home loan <?= $i ?></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="existing_home_loan_limit[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="existing_home_loan_loan_terms[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="existing_home_loan_io_period[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <select name="existing_home_loan_int_only_[<?= $i ?>]"
                                                            class="form-control">
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Y">Yes</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <input type="number"
                                                           name="existing_home_loan_monthly_payments[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group mb-3">
                                                    <select name="existing_home_loan_investment[<?= $i ?>]"
                                                            class="form-control">
                                                        <option value="" selected disabled>Select</option>
                                                        <option value="Y">Yes</option>
                                                        <option value="N">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                            <div class="row">
                                <div class="col-md-2">Monthly Personal Loan Repayment:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_personal_loan" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Monthly Hire Purchase:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_hire_purchase" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Monthly Leaser / Car loan:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_leaser_car_loan" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Monthly Other Debts:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_other_debts" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Monthly Margin / Terms / Other Loans:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_margin_terms" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Credit card total limits:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="card_limits" class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">Other Monthly Repayments:</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group mb-3">
                                                <input type="number" name="other_monthly_repayments"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3 mt-3">Annual Rental Income Received ( apportion rental income to each
                                applicant as per % of property ownership) (Not to be refinanced)</h4>

                            <div class="row mb-3">
                                <div class="col-md-2">Residential Proposed Security</div>
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
                                <div class="col-md-2">Total Annual Rental</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="total_annual_rental[1]" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="total_annual_rental[2]" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="total_annual_rental[3]" class="form-control"
                                                       >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="total_annual_rental[4]" class="form-control"
                                                       >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3 mt-3">Ownership % for all existing loans per individual applicant</h4>

                            <div class="row mb-3">
                                <div class="col-md-2">Residential Proposed Security</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">Applicant 1</div>
                                        <div class="col-md-3">Applicant 2</div>
                                        <div class="col-md-3">Applicant 3</div>
                                        <div class="col-md-3">Applicant 4</div>
                                    </div>
                                </div>
                            </div>

                            <?php for ($i = 1; $i <= 4; $i++): ?>
                                <div class="row">
                                    <div class="col-md-2">Existing home loan <?= $i ?></div>
                                    <div class="col-md-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_home_loan_app_1[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_home_loan_app_2[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <input type="number" name="ownership_home_loan_app_3[<?= $i ?>]"
                                                           class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mb-3">
                                                    <div class="form-group mb-3">
                                                        <input type="number" name="ownership_home_loan_app_4[<?= $i ?>]"
                                                               class="form-control" >
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; ?>

                            <h4 class="mb-3 mt-3">Monthly Living Expenses (Combined)</h4>

                            <div class="row">
                                <div class="col-md-2">Basic living Expenses (p/m)</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_living_expensive[1]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_living_expensive[2]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_living_expensive[3]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="monthly_living_expensive[4]"
                                                       class="form-control" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">Discretionary Living Expenses (p/m)</div>
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="discretionary_living_expenses[1]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="discretionary_living_expenses[2]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="discretionary_living_expenses[3]"
                                                       class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group mb-3">
                                                <input type="number" name="discretionary_living_expenses[4]"
                                                       class="form-control" >
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <h4 class="mb-3 mt-3">Monthly property expenses ( apportion expenses to each applicant as
                                per % of property ownership)</h4>

                            <div class="row">
                                <div class="col-md-10">Total Monthly property expenses (New and existing)</div>
                                <div class="col-md-2">
                                    <div class="form-group mb-3">
                                        <input type="number" name="monthly_property_expensive" class="form-control"
                                               >
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 ">
                                <div class="form-group mb-3">
                                    <button class="btn btn-success " type="submit" name="save_date">Save</button>
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