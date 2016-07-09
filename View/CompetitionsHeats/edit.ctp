<div class="competitionsHeats form">
<?php echo $this->Form->create('CompetitionsHeat'); ?>
	<fieldset>
		<legend><?php echo __('Form Competitions Heat'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('heat_id');
		echo $this->Form->input('athlet_id');
		echo $this->Form->input('lane_number');
		echo $this->Form->input('order_number');
		echo $this->Form->input('points_counting_yn');
		echo $this->Form->input('chest_number');
		echo $this->Form->input('profession_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetitionsHeat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetitionsHeat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List CompetitionsHeats'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
