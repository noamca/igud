<div class="pointsTables form">
<?php echo $this->Form->create('PointsTable'); ?>
	<fieldset>
		<legend><?php echo __('Form Points Table'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
		echo $this->Form->input('profession_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PointsTable.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PointsTable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List PointsTables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
