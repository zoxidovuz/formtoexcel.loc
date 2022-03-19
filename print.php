<?php
session_start();
$title = "Print data on display";
require './vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if(!isset($_GET['file'])){
    header('Location: index.php');
}
$file = $_GET['file'];

$spreadsheet = IOFactory::load("./files/{$file}.xlsx");
$sheet = $spreadsheet->getSheetByName('Sample Calculator');





$names = [
    "Base Income (PAYG)",
    "Overtime",
    "Bonus",
    "Commission",
    "Share / Dividend income",
    "Rental Income",
    "Sum of all above amounts",
    "New investment loan interest",
    "Existing Investment home loan interest",
    "Negative gearing amount per applicant",
    "Non Taxable income", "Taxable Income",
    "Total Income", "Tax Deducted",
    "Low income offset",
    "Low and medium income offset",
    "Medicare Levy",
    "Total Tax Deducted (Tax + Medicare Levy)",
    "Net Income", "Annual Expense as per HEM table",
    "Annual Basic living expense by Client",
    "Actual Annual Expense", "Net Available Income",
    "Total Annual Outings (Includes investment property expense)",
    "New Monthly Commitments", "Total Monthly Commitments",
    "Total Annual Commitments",
    "NDI"
];

$sheet_names = [
    'Is your Credit Score>699? (Y/N)',
    'Base Income (PAYG):',
    'Overtime',
    'Bonus',
    'Commission',
    'Share Dividend income',
    'Non-taxable Income',
    'Total Income',
];

include __DIR__ . "/includes/layouts/header.php";
?>

<div class="container">
    <div class="row justify-content-center">
        <?php include __DIR__ . "/includes/layouts/alert.php"; ?>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active" id="table-tab" data-bs-toggle="tab" data-bs-target="#table"
                                    type="button"
                                    role="tab" aria-controls="table" aria-selected="true">Table
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table2-tab" data-bs-toggle="tab" data-bs-target="#table2"
                                    type="button"
                                    role="tab" aria-controls="table2" aria-selected="false">Table-2
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table3-tab" data-bs-toggle="tab" data-bs-target="#table3"
                                    type="button"
                                    role="tab" aria-controls="table3" aria-selected="false">Table-3
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table4-tab" data-bs-toggle="tab" data-bs-target="#table4"
                                    type="button"
                                    role="tab" aria-controls="table4" aria-selected="false">Table-4
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table5-tab" data-bs-toggle="tab" data-bs-target="#table5"
                                    type="button"
                                    role="tab" aria-controls="table5" aria-selected="false">Table-5
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table6-tab" data-bs-toggle="tab" data-bs-target="#table6"
                                    type="button"
                                    role="tab" aria-controls="table6" aria-selected="false">Table-6
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="table7-tab" data-bs-toggle="tab" data-bs-target="#table7"
                                    type="button"
                                    role="tab" aria-controls="table7" aria-selected="false">Table-7
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="table-tab">
                            <?php include __DIR__ . "/includes/tables/table.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table2" role="tabpanel" aria-labelledby="table2-tab">
                            <?php include __DIR__ . "/includes/tables/table2.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table3" role="tabpanel" aria-labelledby="table3-tab">
                            <?php include __DIR__ . "/includes/tables/table3.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table4" role="tabpanel" aria-labelledby="table4-tab">
                            <?php include __DIR__ . "/includes/tables/table4.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table5" role="tabpanel" aria-labelledby="table5-tab">
                            <?php include __DIR__ . "/includes/tables/table5.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table6" role="tabpanel" aria-labelledby="table6-tab">
                            <?php include __DIR__ . "/includes/tables/table6.php" ?>
                        </div>
                        <div class="tab-pane fade" id="table7" role="tabpanel" aria-labelledby="table7-tab">
                            <?php include __DIR__ . "/includes/tables/table7.php" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include __DIR__ . "/includes/layouts/footer.php";

?>
