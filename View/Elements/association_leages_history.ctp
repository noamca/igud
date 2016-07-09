<div class="associationsHistories index">
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('year','שנה'); ?></th>
            <th><?php echo $this->Paginator->sort('m1','גברים'); ?></th>
            <th><?php echo $this->Paginator->sort('m2','נוער'); ?></th>
            <th><?php echo $this->Paginator->sort('m3','קדטים'); ?></th>
            <th><?php echo $this->Paginator->sort('m4','ילדים'); ?></th>
            <th><?php echo $this->Paginator->sort('w1','נשים'); ?></th>
            <th><?php echo $this->Paginator->sort('w2','נערות'); ?></th>
            <th><?php echo $this->Paginator->sort('w3','קדטיות'); ?></th>
            <th><?php echo $this->Paginator->sort('w4','ילדות'); ?></th>
    </tr>
    <?php foreach ($associationsHistories as $associationsHistory): ?>
    <tr>
        <td><?php echo h($associationsHistory['year']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['m1']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['m2']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['m3']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['m4']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['w1']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['w2']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['w3']); ?>&nbsp;</td>
        <td><?php echo h($associationsHistory['w4']); ?>&nbsp;</td>
    </tr>
<?php endforeach; ?>
    </table>
</div>
