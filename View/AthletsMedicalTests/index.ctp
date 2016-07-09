<div class="AthletsMedicalTests index">
	<h2>בדיקות רפואיות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('institute_id','מכון'); ?></th>
			<th><?php echo $this->Paginator->sort('year','שנה'); ?></th>
			<th><?php echo $this->Paginator->sort('mediacl_check_type','סוג בדיקה'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id','מצב הבדיקה'); ?></th>
			<th><?php echo $this->Paginator->sort('expiration_date','תאריך תפוגה'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks','הערות'); ?></th>
			<th><?php echo $this->Paginator->sort('file1','סריקה'); ?></th>
			<th><?php echo $this->Paginator->sort('file2',''); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($AthletsMedicalTests as $AthletsMedicalTest): ?>
	<tr>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['institute_id']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['year']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['mediacl_check_type']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['status_id']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['expiration_date']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['file1']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['file2']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $AthletsMedicalTest['AthletsMedicalTest']['id']), null, __('Are you sure you want to delete # %s?', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Athlets Medical Test'), array('action' => 'add')); ?></li>
	</ul>
</div>
