<?php
/**
 * @var $names
 */

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="cell-200"></th>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
            <td class="cell-100">Flex (>699)</td>
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
        <?php foreach($names as $name):?>
            <tr>
                <td><?= $name?></td>
                <?php for($i = 1; $i <= 15; $i++):?>
                    <td>$ -</td>
                <?php endfor;?>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</div>