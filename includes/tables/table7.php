<?php
/**
 * @var $names
 * @var $sheet
 */

$rows = [
    'DC',
    'DD',
    'DE',
    'DF',
    'DG',
    'DH',
    'DI',
    'DJ',
    'DK',
    'DL',
    'DM',
    'DN',
    'DO',
    'DP',
    'DQ',
];

?>

<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th class="cell-200"></th>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
            <td class="cell-100">Flex (< 700)</td>
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
        <?php $i = 6;
        foreach ($names as $name): ?>
            <tr>
                <td><?= $name ?></td>
                <?php
                foreach ($rows as $row): ?>
                    <td><?= $sheet->getCell($row . $i)->getOldCalculatedValue() ?></td>
                <?php endforeach; ?>
            </tr>
            <?php $i++; endforeach; ?>
        </tbody>
    </table>
</div>

<?php unset($rows) ?>