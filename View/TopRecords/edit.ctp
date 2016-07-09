<div class="topRecords form">
<?php echo $this->Form->create('TopRecord'); ?>
	<fieldset>
		<legend><?php echo __('Form Top Record'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('record');
		echo $this->Form->input('profession_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TopRecord.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TopRecord.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List TopRecords'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
