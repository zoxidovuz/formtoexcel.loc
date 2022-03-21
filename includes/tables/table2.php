<?php
/**
 * @var $names
 * @var $sheet
 */

$rows = [
    'AA',
    'AB',
    'AC',
    'AD',
    'AE',
    'AF',
    'AG',
    'AH',
    'AI',
    'AJ',
    'AK',
    'AL',
    'AM',
    'AN',
    'AO',
];

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="cell-200"></th>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Ultra Prime</td>
            <td class="cell-100">Applicant 1</td>
            <td class="cell-100">Applicant 1</td>
            <td class="cell-100">Applicant 1</td>
            <td class="cell-100">Applicant 2</td>
            <td class="cell-100">Applicant 2</td>
            <td class="cell-100">Applicant 3</td>
            <td class="cell-100"></td>
        </tr>
        <tr>
            <th></th>
            <td>Applicant 1</td>
            <td>Applicant 2</td>
            <td>Applicant 3</td>
            <td>Applicant 4</td>
            <td>Applicant 1</td>
            <td>Applicant 2</td>
            <td>Applicant 3</td>
            <td>Applicant 4</td>
            <td>Applicant 2</td>
            <td>Applicant 3</td>
            <td>Applicant 4</td>
            <td>Applicant 3</td>
            <td>Applicant 4</td>
            <td>Applicant 4</td>
            <td>Final</td>
        </tr>
        </thead>
        <tbody>
        <?php $i = 6; foreach ($names as $name): ?>
            <tr>
                <td><?= $name ?></td>
                <?php foreach ($rows as $row): ?>
                    <td><?php try {
                            echo $sheet->getCell($row . $i)->getCalculatedValue();
                        } catch (\PhpOffice\PhpSpreadsheet\Calculation\Exception $e) {
                            echo "$ - ";
                        } ?></td>
                <?php endforeach; ?>
            </tr>
            <?php $i++; endforeach; ?>

        </tbody>
    </table>
</div>