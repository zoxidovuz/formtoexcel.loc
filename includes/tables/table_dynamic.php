<?php
/**
 * @var $names
 */

?>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Prime</td>
            <td>Applicant 1</td>
            <td>Applicant 1</td>
            <td>Applicant 1</td>
            <td>Applicant 2</td>
            <td>Applicant 2</td>
            <td>Applicant 3</td>
            <td></td>
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