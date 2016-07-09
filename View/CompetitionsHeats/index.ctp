<div class="competitionsHeats index">
	<h2><?php echo __('CompetitionsHeats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('heat_id'); ?></th>
			<th><?php echo $this->Paginator->sort('athlet_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lane_number'); ?></th>
			<th><?php echo $this->Paginator->sort('order_number'); ?></th>
			<th><?php echo $this->Paginator->sort('points_counting_yn'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_number'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competitionsHeats as $competitionsHeat): ?>
	<tr>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['heat_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['athlet_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['lane_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['order_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['points_counting_yn']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['chest_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($competitionsHeat['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $competitionsHeat['Profession']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitionsHeat['CompetitionsHeat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsHeat['CompetitionsHeat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsHeat['CompetitionsHeat']['id']), null, __('Are you sure you want to delete # %s?', $competitionsHeat['CompetitionsHeat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competitions Heat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
