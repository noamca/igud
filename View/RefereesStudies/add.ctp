<div class="refereesStudies form">
<?php echo $this->Form->create('RefereesStudy'); ?>
	<fieldset>
		<legend><?php echo __('Form Referees Study'); ?></legend>
	<?php
		echo $this->Form->input('referee_id');
		echo $this->Form->input('date');
		echo $this->Form->input('place');
		echo $this->Form->input('study_type');
		echo $this->Form->input('hours_number');
		echo $this->Form->input('study_manager');
		echo $this->Form->input('identity_number');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RefereesStudy.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RefereesStudy.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List RefereesStudies'), array('action' => 'index')); ?></li>
	</ul>
</div>