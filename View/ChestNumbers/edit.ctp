<div class="chestNumbers form">
<?php echo $this->Form->create('ChestNumber'); ?>
	<fieldset>
		<legend><?php echo __('Form Chest Number'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
		echo $this->Form->input('chest_number');
		echo $this->Form->input('athlete_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ChestNumber.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ChestNumber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List ChestNumbers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('controller' => 'Athlets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
	</ul>
</div>
