<div class="competitionsResults index">
	<h2><?php echo __('CompetitionsResults'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('competition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('assosiation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('athlet_id'); ?></th>
			<th><?php echo $this->Paginator->sort('middle_result'); ?></th>
			<th><?php echo $this->Paginator->sort('final_result'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competitionsResults as $competitionsResult): ?>
	<tr>
		<td><?php echo h($competitionsResult['CompetitionsResult']['competition_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['heat_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['assosiation_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['athlet_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['middle_result']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['final_result']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitionsResult['CompetitionsResult']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsResult['CompetitionsResult']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsResult['CompetitionsResult']['id']), null, __('Are you sure you want to delete # %s?', $competitionsResult['CompetitionsResult']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competitions Result'), array('action' => 'add')); ?></li>
	</ul>
</div>
