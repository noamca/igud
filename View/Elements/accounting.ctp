<div class="accountings index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','קוד'); ?></th>
			<th><?php echo $this->Paginator->sort('description','תאור'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity','כמות'); ?></th>
			<th><?php echo $this->Paginator->sort('price','חיוב'); ?></th>
            <th><?php echo $this->Paginator->sort('price','זיכוי'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($accountings as $accounting): ?>
	<tr>
		<td><?php echo h($accounting['id']); ?>&nbsp;</td>
		<td><?php echo h($accounting['description']); ?>&nbsp;</td>
		<td><?php echo h($accounting['quantity']); ?>&nbsp;</td>
        <td><?php echo h($accounting['debit_amount']); ?>&nbsp;</td>
		<td><?php echo h($accounting['credit_amount']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('הצג', array('controller'=>'Accounting', 'action' => 'edit', $accounting['Accounting']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

	</div>
