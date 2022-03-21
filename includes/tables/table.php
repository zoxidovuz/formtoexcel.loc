<?php
/**
 * @var $sheet
 * @var $sheet_names
 */


?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Loan Applicants Details</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th style="width: 20%">Applicant Names:</th>
            <th colspan="8"><?= $sheet->getCell('B4')->getValue() ?></th>

        </tr>
        <tr>
            <td></td>
            <td colspan="2">Applicant 1</td>
            <td colspan="2">Applicant 1</td>
            <td colspan="2">Applicant 1</td>
            <td colspan="2">Applicant 1</td>
        </tr>
        <tr>
            <td>Applicant Status:</td>
            <td colspan="2"><?= $sheet->getCell('B6')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('D6')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('F6')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('H6')->getValue() ?></td>
        </tr>
        <tr>
            <td>Couple with other Applicants:</td>
            <td colspan="2"><?= $sheet->getCell('B7')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('D7')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('F7')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('H7')->getValue() ?></td>
        </tr>
        <tr>
            <td>Number of Dependents:</td>
            <td colspan="2"><?= $sheet->getCell('B8')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('D8')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('F8')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('H8')->getValue() ?></td>
        </tr>
        <tr>
            <td>Residential Status:</td>
            <td colspan="2"><?= $sheet->getCell('B9')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('D9')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('F9')->getValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('H9')->getValue() ?></td>
        </tr>

        <tr>
            <th style="width: 20%">New Loan</th>
            <th>Loan Amount</th>
            <th colspan="2">Loan Terms in Years</th>
            <th colspan="2">Int. Only Period</th>
            <th colspan="2">Actual Interest Rate</th>
            <th>Investment (Y/N)</th>
        </tr>

        <?php for ($i = 1; $i <= 5; $i++): ?>
            <tr>
                <td>Loan <?= $i ?></td>
                <td><?= $sheet->getCell('B' . (12 + $i))->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('C' . (12 + $i))->getValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('D' . (12 + $i))->getValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('F' . (12 + $i))->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('H' . (12 + $i))->getValue() ?></td>
            </tr>
        <?php endfor; ?>

        <tr>
            <td colspan="5">Total Loan Amounts</td>
            <td colspan="4"><?= $sheet->getCell('G18')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th>Securities Proposed (Offered to Well- Nigh)</th>
            <th colspan="8"></th>
        </tr>
        <?php for ($i = 1; $i <= 5; $i++): ?>
            <tr>
                <td>Security <?= $i ?></td>
                <td colspan="8"><?= $sheet->getCell('B' . (21 + $i))->getFormattedValue() ?></td>
            </tr>
        <?php endfor; ?>

        <tr>
            <td>Total Security Value</td>
            <td colspan="2"> <?= $sheet->getCell('C27')->getFormattedValue() ?></td>
            <td colspan="3">LVR</td>
            <td colspan="3"> <?= $sheet->getCell('G27')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th style="width: 20%">Gross Annual Income</th>
            <th>Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th>Total</th>
        </tr>
        <?php $i = 30;
        foreach ($sheet_names as $name): ?>
            <tr>
                <td><?= $name ?></td>
                <td><?= $sheet->getCell('B' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('C' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('E' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('G' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('I' . $i)->getFormattedValue() ?></td>
            </tr>
            <?php $i++; endforeach; ?>


        <tr>
            <th style="width: 20%">Rental income for all new loans offered to Well Nigh</th>
            <th colspan="8"></th>
        </tr>

        <tr>
            <th style="width: 20%">Residential Proposed Security</th>
            <th>Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th>Total</th>
        </tr>

        <tr>
            <td>Total Annual Rental:</td>
            <td><?= $sheet->getCell('B41')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('C41')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('E41')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('G41')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I41')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th style="width: 20%">Ownership % for all new loans per individual applicant</th>
            <th colspan="8"></th>
        </tr>

        <tr>
            <th style="width: 20%">Residential Proposed Security</th>
            <th>Applicant 1 % Share</th>
            <th colspan="2">Applicant 1 % Share</th>
            <th colspan="2">Applicant 1 % Share</th>
            <th colspan="2">Applicant 1 % Share</th>
            <th>Total</th>
        </tr>
        <?php for ($i = 45; $i <= 49; $i++): ?>
            <tr>
                <td>Loan <?= $i - 44 ?></td>
                <td><?= $sheet->getCell('B' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('C' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('E' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('G' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('I' . $i)->getFormattedValue() ?></td>
            </tr>
        <?php endfor; ?>
        <tr>
            <td colspan="8">Total Tax Deductibility</td>
            <td><?= $sheet->getCell('I50')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td colspan="8">This loan @ assessment rate</td>
            <td><?= $sheet->getCell('I51')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th style="width: 20%">Annual Commitments (Existing and not be refinanced)</th>
            <th colspan="8"></th>
        </tr>

        <tr>
            <th></th>
            <th>Limit</th>
            <th>Original Loan Terms (Years)</th>
            <th>Current IO period</th>
            <th>Int Only Y/N</th>
            <th>Monthly Payments</th>
            <th>Investment</th>
            <th>Interest Rate</th>
            <th>Monthly</th>
        </tr>

        <?php for ($i = 55; $i <= 58; $i++): ?>
            <tr>
                <td>Existing home loan <?= $i - 54 ?></td>
                <td><?= $sheet->getCell('B' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('C' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('D' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('E' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('F' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('G' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('H' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('I' . $i)->getFormattedValue() ?></td>
            </tr>
        <?php endfor; ?>

        <tr>
            <td>Monthly Personal Loan Repayment:</td>
            <td colspan="7"><?= $sheet->getCell('B59')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I59')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Monthly Hire Purchase:</td>
            <td colspan="7"><?= $sheet->getCell('B60')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I60')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Monthly Leaser / Car loan:</td>
            <td colspan="7"><?= $sheet->getCell('B61')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I61')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Monthly Other Debts:</td>
            <td colspan="7"><?= $sheet->getCell('B62')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I62')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Monthly Margin / Terms / Other Loans:</td>
            <td colspan="7"><?= $sheet->getCell('B63')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I63')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Credit card total limits:</td>
            <td colspan="7"><?= $sheet->getCell('B64')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I64')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Notional Rent:</td>
            <td colspan="7"><?= $sheet->getCell('B65')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I65')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <td>Other Monthly Repayments:</td>
            <td colspan="7"><?= $sheet->getCell('B66')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I66')->getFormattedValue() ?></td>
        </tr>
        <tr>
            <td colspan="8">Total Monthly Outings</td>
            <td><?= $sheet->getCell('I67')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th colspan="8">Annual Rental Income Received ( apportion rental income to each applicant as per % of
                property ownership) (Not to be refinanced)
            </th>
            <th></th>
        </tr>

        <tr>
            <th style="width: 20%">Residential Proposed Security</th>
            <th>Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th>Total</th>
        </tr>
        <tr>
            <td>Total Annual Rental:</td>
            <td><?= $sheet->getCell('B71')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('C71')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('E71')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('G71')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I71')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th colspan="8">Ownership % for all existing loans per individual applicant</th>
            <th></th>
        </tr>

        <tr>
            <th style="width: 20%">Investment Portion</th>
            <th>Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th colspan="2">Applicant 1</th>
            <th>Total</th>
        </tr>
        <?php for ($i = 75; $i <= 78; $i++): ?>
            <tr>
                <td>Existing home loan <?= $i - 74 ?></td>
                <td><?= $sheet->getCell('B' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('C' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('E' . $i)->getFormattedValue() ?></td>
                <td colspan="2"><?= $sheet->getCell('G' . $i)->getFormattedValue() ?></td>
                <td><?= $sheet->getCell('I' . $i)->getFormattedValue() ?></td>
            </tr>
        <?php endfor; ?>

        <tr>
            <th colspan="8">Total Tax Deductibility</th>
            <th><?= $sheet->getCell('I79')->getFormattedValue() ?></th>
        </tr>

        <tr>
            <th colspan="8">Monthly Living Expenses (Combined)</th>
            <th>Annual</th>
        </tr>

        <tr>
            <td>Basic living Expenses (p/m):</td>
            <td><?= $sheet->getCell('B82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('C82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('E82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('G82')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I82')->getFormattedValue() ?></td>
        </tr>
        <tr>
            <td>Discretionary Living Expenses (p/m):</td>
            <td><?= $sheet->getCell('B83')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('C83')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('E83')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('G83')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I83')->getFormattedValue() ?></td>
        </tr>
        <tr>
            <td>Total (p/m)</td>
            <td><?= $sheet->getCell('B82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('C82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('E82')->getFormattedValue() ?></td>
            <td colspan="2"><?= $sheet->getCell('G82')->getFormattedValue() ?></td>
            <td><?= $sheet->getCell('I82')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th colspan="8">Monthly property expenses ( apportion expenses to each applicant as per % of property
                ownership)
            </th>
            <th></th>
        </tr>

        <tr>
            <td colspan="8">Total Monthly property expenses (New and existing)</td>
            <td><?= $sheet->getCell('I87')->getFormattedValue() ?></td>
        </tr>
        <tr>
            <td colspan="8">Total Annual property expenses (New and existing)</td>
            <td><?= $sheet->getCell('I88')->getFormattedValue() ?></td>
        </tr>

        <tr>
            <th colspan="8">Result</th>
            <th></th>
        </tr>

        <tr>
            <th rowspan="3">Serviceability test (NDI)</th>
            <th colspan="2">Ultra Prime</th>
            <th colspan="2">Prime</th>
            <th colspan="2">Plus</th>
            <th colspan="2">Flex</th>
        </tr>
        <tr>
            <td colspan="2"><?php try {
                    echo $sheet->getCell('B92')->getCalculatedValue();
                } catch (\PhpOffice\PhpSpreadsheet\Calculation\Exception $e) {
                    echo "-";
                } ?></td>
            <td colspan="2"><?php try {
                    echo $sheet->getCell('D92')->getCalculatedValue();
                } catch (\PhpOffice\PhpSpreadsheet\Calculation\Exception $e) {
                    echo "-";
                } ?></td>
            <td colspan="2"><?php try {
                    echo $sheet->getCell('F92')->getCalculatedValue();
                } catch (\PhpOffice\PhpSpreadsheet\Calculation\Exception $e) {
                    echo "-";
                } ?></td>
            <td colspan="2"><?php try {
                    echo $sheet->getCell('H92')->getOldCalculatedValue();
                } catch (\PhpOffice\PhpSpreadsheet\Calculation\Exception $e) {
                print_r($e);
                    echo "-";
                } ?></td>
        </tr>
        </tbody>
    </table>
</div>