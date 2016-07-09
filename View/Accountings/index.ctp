<div class="accountings index">
	<h2><?php echo __('Accountings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('entity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('quantity'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accountings as $accounting): ?>
	<tr>
		<td><?php echo h($accounting['Accounting']['id']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['type']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['entity_id']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['description']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['price']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['user_id']); ?>&nbsp;</td>
		<td><?php echo h($accounting['Accounting']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accounting['Accounting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accounting['Accounting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accounting['Accounting']['id']), null, __('Are you sure you want to delete # %s?', $accounting['Accounting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?></li>
	</ul>
</div>
