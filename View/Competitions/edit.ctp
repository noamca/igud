<div class="competitions form">
<?php echo $this->Form->create('Competition'); ?>
	<fieldset>
		<legend><?php echo __('Form Competition'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('name_eng');
		echo $this->Form->input('date_start');
		echo $this->Form->input('date_end');
		echo $this->Form->input('is_international');
		echo $this->Form->input('place');
		echo $this->Form->input('age_from');
		echo $this->Form->input('age_to');
		echo $this->Form->input('gender');
		echo $this->Form->input('is_api_open');
		echo $this->Form->input('Profession');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competition.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Competition.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Competitions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
