<div class="refereesPayments index">
	<h2><?php echo __('RefereesPayments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('referee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('level'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_deduction_percent'); ?></th>
			<th><?php echo $this->Paginator->sort('traffic_pay'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($refereesPayments as $refereesPayment): ?>
	<tr>
		<td><?php echo h($refereesPayment['RefereesPayment']['referee_id']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['RefereesPayment']['level']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['RefereesPayment']['tax_deduction_percent']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['RefereesPayment']['traffic_pay']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['RefereesPayment']['date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $refereesPayment['RefereesPayment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $refereesPayment['RefereesPayment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $refereesPayment['RefereesPayment']['id']), null, __('Are you sure you want to delete # %s?', $refereesPayment['RefereesPayment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referees Payment'), array('action' => 'add')); ?></li>
	</ul>
</div>
