<?php
session_start();
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = IOFactory::load('../files/sample.xlsx');
$sheet = $spreadsheet->getActiveSheet();


if (isset($_POST['save_date'])) {

    // Applicant Name set to Excel cell
    $sheet->setCellValue('B4', $_POST['applicant_name']);

    // Applicant status set to B6-h6

    $sheet->setCellValue('B6', $_POST['applicant_status'][1]);
    $sheet->setCellValue('D6', $_POST['applicant_status'][2]);
    $sheet->setCellValue('F6', $_POST['applicant_status'][3]);
    $sheet->setCellValue('H6', $_POST['applicant_status'][4]);

    // Couple with other Applicants set to B7-H7

    /*$sheet->setCellValue('B7', $_POST['couple_with_other_applicants'][1]);
    $sheet->setCellValue('D7', $_POST['couple_with_other_applicants'][2]);
    $sheet->setCellValue('F7', $_POST['couple_with_other_applicants'][3]);
    $sheet->setCellValue('H7', $_POST['couple_with_other_applicants'][4]);*/

    // Number of Dependents set to B8-H8

    $sheet->setCellValue('B8', $_POST['number_of_dependents'][1]);
    $sheet->setCellValue('D8', $_POST['number_of_dependents'][2]);
    $sheet->setCellValue('F8', $_POST['number_of_dependents'][3]);
    $sheet->setCellValue('H8', $_POST['number_of_dependents'][4]);

    // Residential Status set to B9-H9

    $sheet->setCellValue('B9', $_POST['residential_status'][1]);
    $sheet->setCellValue('D9', $_POST['residential_status'][2]);
    $sheet->setCellValue('F9', $_POST['residential_status'][3]);
    $sheet->setCellValue('H9', $_POST['residential_status'][4]);


    // Loan section
    for ($i = 13; $i <= 17; $i++) {
        $sheet->setCellValue('B' . $i, $_POST['loan_amount'][$i - 12]);
        $sheet->setCellValue('C' . $i, $_POST['loan_terms_in_years'][$i - 12]);
        $sheet->setCellValue('D' . $i, $_POST['only_period'][$i - 12]);
        $sheet->setCellValue('F' . $i, $_POST['actual_interest_rate'][$i - 12] / 100);
        $sheet->setCellValue('H' . $i, $_POST['investment'][$i - 12]);
    }


    // Set security section

    for($i = 1; $i <= 5; $i++){
        $sheet->setCellValue('B' . ($i + 21), $_POST['security'][$i]);
    }

    // Is your Credit Score>699? (Y/N):

    $sheet->setCellValue('B30', $_POST['credit_score'][1]);
    $sheet->setCellValue('C30', $_POST['credit_score'][2]);
    $sheet->setCellValue('E30', $_POST['credit_score'][3]);
    $sheet->setCellValue('G30', $_POST['credit_score'][4]);


    // Base Income (PAYG):

    $sheet->setCellValue('B31', $_POST['base_income'][1]);
    $sheet->setCellValue('C31', $_POST['base_income'][2]);
    $sheet->setCellValue('E31', $_POST['base_income'][3]);
    $sheet->setCellValue('G31', $_POST['base_income'][4]);

    // Overtime:

    $sheet->setCellValue('B32', $_POST['overtime'][1]);
    $sheet->setCellValue('C32', $_POST['overtime'][2]);
    $sheet->setCellValue('E32', $_POST['overtime'][3]);
    $sheet->setCellValue('G32', $_POST['overtime'][4]);

    // Bonus

    $sheet->setCellValue('B33', $_POST['bonus'][1]);
    $sheet->setCellValue('C33', $_POST['bonus'][2]);
    $sheet->setCellValue('E33', $_POST['bonus'][3]);
    $sheet->setCellValue('G33', $_POST['bonus'][4]);

    // Commission

    $sheet->setCellValue('B34', $_POST['commission'][1]);
    $sheet->setCellValue('C34', $_POST['commission'][2]);
    $sheet->setCellValue('E34', $_POST['commission'][3]);
    $sheet->setCellValue('G34', $_POST['commission'][4]);

    // Share Dividend income

    $sheet->setCellValue('B35', $_POST['dividend_income'][1]);
    $sheet->setCellValue('C35', $_POST['dividend_income'][2]);
    $sheet->setCellValue('E35', $_POST['dividend_income'][3]);
    $sheet->setCellValue('G35', $_POST['dividend_income'][4]);

    // Non-taxable Income

    $sheet->setCellValue('B36', $_POST['taxable_income'][1]);
    $sheet->setCellValue('C36', $_POST['taxable_income'][2]);
    $sheet->setCellValue('E36', $_POST['taxable_income'][3]);
    $sheet->setCellValue('G36', $_POST['taxable_income'][4]);


    // Total Annual Rental

    $sheet->setCellValue('B41', $_POST['annual_rental'][1]);
    $sheet->setCellValue('C41', $_POST['annual_rental'][2]);
    $sheet->setCellValue('E41', $_POST['annual_rental'][3]);
    $sheet->setCellValue('G41', $_POST['annual_rental'][4]);

    // Total Annual Rental

    $sheet->setCellValue('B41', $_POST['annual_rental'][1]);
    $sheet->setCellValue('C41', $_POST['annual_rental'][2]);
    $sheet->setCellValue('E41', $_POST['annual_rental'][3]);
    $sheet->setCellValue('G41', $_POST['annual_rental'][4]);

    // Ownership % for all new loans per individual applicant

    for($i = 1; $i <= 5; $i++){
        $sheet->setCellValue('B' . ($i + 44), $_POST['ownership_loan_app1'][$i]);
        $sheet->setCellValue('C' . ($i + 44), $_POST['ownership_loan_app2'][$i]);
        $sheet->setCellValue('E' . ($i + 44), $_POST['ownership_loan_app3'][$i]);
        $sheet->setCellValue('G' . ($i + 44), $_POST['ownership_loan_app4'][$i]);
    }

    // Annual Commitments (Existing and not be refinanced)

    for($i = 1; $i <= 4; $i++){
        $sheet->setCellValue('B' . ($i + 54), $_POST['existing_home_loan_limit'][$i]);
        $sheet->setCellValue('C' . ($i + 54), $_POST['existing_home_loan_loan_terms'][$i]);
        $sheet->setCellValue('D' . ($i + 54), $_POST['existing_home_loan_io_period'][$i]);
        $sheet->setCellValue('E' . ($i + 54), $_POST['existing_home_loan_int_only_'][$i]);
        $sheet->setCellValue('F' . ($i + 54), $_POST['existing_home_loan_monthly_payments'][$i]);
        $sheet->setCellValue('G' . ($i + 54), $_POST['existing_home_loan_investment'][$i]);
    }

    // All inputs

    $sheet->setCellValue('B59', $_POST['monthly_personal_loan']);
    $sheet->setCellValue('B60', $_POST['monthly_hire_purchase']);
    $sheet->setCellValue('B61', $_POST['monthly_leaser_car_loan']);
    $sheet->setCellValue('B62', $_POST['monthly_other_debts']);
    $sheet->setCellValue('B63', $_POST['monthly_margin_terms']);
    $sheet->setCellValue('B64', $_POST['card_limits']);
    $sheet->setCellValue('B66', $_POST['other_monthly_repayments']);


    // Annual Rental Income Received ( apportion rental income to each applicant as per % of property ownership) (Not to be refinanced)

    $sheet->setCellValue('B71', $_POST['total_annual_rental'][1]);
    $sheet->setCellValue('C71', $_POST['total_annual_rental'][2]);
    $sheet->setCellValue('E71', $_POST['total_annual_rental'][3]);
    $sheet->setCellValue('G71', $_POST['total_annual_rental'][4]);

    // Ownership % for all new loans per individual applicant

    for($i = 1; $i <= 4; $i++){
        $sheet->setCellValue('B' . ($i + 74), $_POST['ownership_home_loan_app_1'][$i]);
        $sheet->setCellValue('C' . ($i + 74), $_POST['ownership_home_loan_app_2'][$i]);
        $sheet->setCellValue('E' . ($i + 74), $_POST['ownership_home_loan_app_3'][$i]);
        $sheet->setCellValue('G' . ($i + 74), $_POST['ownership_home_loan_app_4'][$i]);
    }

    // Monthly Living Expenses (Combined)

    $sheet->setCellValue('B82', $_POST['monthly_living_expensive'][1]);
    $sheet->setCellValue('C82', $_POST['monthly_living_expensive'][2]);
    $sheet->setCellValue('E82', $_POST['monthly_living_expensive'][3]);
    $sheet->setCellValue('G82', $_POST['monthly_living_expensive'][4]);

    // Discretionary Living Expenses (p/m)

    $sheet->setCellValue('B83', $_POST['discretionary_living_expenses'][1]);
    $sheet->setCellValue('C83', $_POST['discretionary_living_expenses'][2]);
    $sheet->setCellValue('E83', $_POST['discretionary_living_expenses'][3]);
    $sheet->setCellValue('G83', $_POST['discretionary_living_expenses'][4]);

    // Total Monthly property expenses (New and existing)

    $sheet->setCellValue('I87', $_POST['monthly_property_expensive']);





//    $writer = new Xlsx($spreadsheet);
    $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
    $new_excel = time();
    try {
        $writer->setIncludeCharts(true);
        $writer->setPreCalculateFormulas(false);
        $writer->save('../files/' . $new_excel . '.xlsx');
    } catch (\PhpOffice\PhpSpreadsheet\Writer\Exception $e) {
        echo "<pre>";
        print_r($e);
        die;
    }


    // Rewrite calculate data
    /*$spreadsheet = IOFactory::load("../files/{$new_excel}.xlsx");
    $result = $spreadsheet->getActiveSheet()->getCell('G18')->getCalculatedValue();
    $spreadsheet->getActiveSheet()->setCellValue('G18', $result);
    $writer = IOFactory::createWriter($spreadsheet, "Xlsx");
    $writer->setIncludeCharts(true);
    $writer->setPreCalculateFormulas(false);
    $writer->save('../files/' . $new_excel . '.xlsx');*/


    /*if($data){
        $_SESSION['status'] = "Contact updated successfuly!";
    }else{
        $_SESSION['status'] = "Somthing wrong!";
    }*/

    $_SESSION['status'] = "Form was created successfully! You can <a href='/files/{$new_excel}.xlsx'>Download file</a>";

    header("Location: /form.php");
}