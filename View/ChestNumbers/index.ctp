<div class="chestNumbers index">
	<h2>מספרי חזה</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_number'); ?></th>
			<th><?php echo $this->Paginator->sort('athlete_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($chestNumbers as $chestNumber): ?>
	<tr>
		<td><?php echo h($chestNumber['ChestNumber']['year']); ?>&nbsp;</td>
		<td><?php echo h($chestNumber['ChestNumber']['chest_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($chestNumber['Athlete']['id'], array('controller' => 'Athlets', 'action' => 'view', $chestNumber['Athlete']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $chestNumber['ChestNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $chestNumber['ChestNumber']['id']), null, __('Are you sure you want to delete # %s?', $chestNumber['ChestNumber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Chest Number'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('controller' => 'Athlets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
	</ul>
</div>
