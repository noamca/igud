<div class="competitionsHeats index">
	<h2><?php echo __('CompetitionsHeats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('lane_number'); ?></th>
			<th><?php echo $this->Paginator->sort('order_number'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_number'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competitionsHeats as $competitionsHeat): ?>
	<tr>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['lane_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['order_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsHeat['CompetitionsHeat']['chest_number']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($competitionsHeat['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $competitionsHeat['Profession']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsHeat['CompetitionsHeat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsHeat['CompetitionsHeat']['id']), null, __('Are you sure you want to delete # %s?', $competitionsHeat['CompetitionsHeat']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Competitions Heat'), array('action' => 'add')); ?></li>
	</ul>
</div>
