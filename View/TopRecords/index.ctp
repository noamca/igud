<div class="topRecords index">
	<h2><?php echo __('TopRecords'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('record'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($topRecords as $topRecord): ?>
	<tr>
		<td><?php echo h($topRecord['TopRecord']['id']); ?>&nbsp;</td>
		<td><?php echo h($topRecord['TopRecord']['record']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($topRecord['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $topRecord['Profession']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $topRecord['TopRecord']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $topRecord['TopRecord']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $topRecord['TopRecord']['id']), null, __('Are you sure you want to delete # %s?', $topRecord['TopRecord']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Top Record'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
