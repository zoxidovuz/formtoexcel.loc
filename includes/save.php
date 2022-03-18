<?php
session_start();
require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$spreadsheet = IOFactory::load('../files/sample.xlsx');
$sheet = $spreadsheet->getActiveSheet();



if(isset($_POST['save_date'])){
    $data = [];

    /*for($i = 1; $i <= 5; $i++){
        $data[] = [
            'loan_amount' => $_POST['loan_amount'][$i],
            'loan_terms_in_years' => $_POST['loan_terms_in_years'][$i],
            'only_period' => $_POST['only_period'][$i],
            'actual_interest_rate' => $_POST['actual_interest_rate'][$i],
            'investment' => $_POST['investment'][$i],
        ];
    }*/


    for($i = 13; $i <= 17; $i++){
        $sheet->setCellValue('B'.$i, $_POST['loan_amount'][$i-12]);
        $sheet->setCellValue('C'.$i, $_POST['loan_terms_in_years'][$i-12]);
        $sheet->setCellValue('D'.$i, $_POST['only_period'][$i-12]);
        $sheet->setCellValue('F'.$i, $_POST['actual_interest_rate'][$i-12]);
        $sheet->setCellValue('H'.$i, $_POST['investment'][$i-12]);
    }




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




    /*if($data){
        $_SESSION['status'] = "Contact updated successfuly!";
    }else{
        $_SESSION['status'] = "Somthing wrong!";
    }*/

    $_SESSION['status'] = "Form was created successfully! You can <a href='/files/{$new_excel}.xlsx'>Download file</a>";

    header("Location: /form.php");
}