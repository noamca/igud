<div class="addresses index">
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('identity_number','תז'); ?></th>
            <th><?php echo $this->Paginator->sort('street','רחוב'); ?></th>
            <th><?php echo $this->Paginator->sort('block_no','מספר בית'); ?></th>
            <th><?php echo $this->Paginator->sort('city','עיר'); ?></th>
            <th><?php echo $this->Paginator->sort('entry','כניסה'); ?></th>
            <th><?php echo $this->Paginator->sort('appartment','דירה'); ?></th>
            <th><?php echo $this->Paginator->sort('zip','מיקוד'); ?></th>
            <th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
            <th><?php echo $this->Paginator->sort('status','סטטוס'); ?></th>
            <th><?php echo $this->Paginator->sort('phone','טלפון'); ?></th>
            <th><?php echo $this->Paginator->sort('mobile','סלולארי'); ?></th>
            <th><?php echo $this->Paginator->sort('fax','פקס'); ?></th>
            <th><?php echo $this->Paginator->sort('position','מיקום'); ?></th>
            <th><?php echo $this->Paginator->sort('neigberhood','שכונה'); ?></th>
    </tr>
    <?php foreach ($addresses as $address): ?>
    <tr>
        <td><?php echo h($address['identity_number']); ?>&nbsp;</td>
        <td><?php echo h($address['street']); ?>&nbsp;</td>
        <td><?php echo h($address['block_no']); ?>&nbsp;</td>
        <td><?php echo h($address['city']); ?>&nbsp;</td>
        <td><?php echo h($address['entry']); ?>&nbsp;</td>
        <td><?php echo h($address['appartment']); ?>&nbsp;</td>
        <td><?php echo h($address['zip']); ?>&nbsp;</td>
        <td><?php echo h($address['email']); ?>&nbsp;</td>
        <td><?php echo h($address['status']); ?>&nbsp;</td>
        <td><?php echo h($address['phone']); ?>&nbsp;</td>
        <td><?php echo h($address['mobile']); ?>&nbsp;</td>
        <td><?php echo h($address['fax']); ?>&nbsp;</td>
        <td><?php echo h($address['position']); ?>&nbsp;</td>
        <td><?php echo h($address['neigberhood']); ?>&nbsp;</td>
    </tr>
<?php endforeach; ?>
    </table>
</div>
