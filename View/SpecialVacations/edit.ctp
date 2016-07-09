<div class="specialVacations form">
<?php echo $this->Form->create('SpecialVacation'); ?>
	<fieldset>
		<legend><?php echo __('Form Special Vacation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('description');
		echo $this->Form->input('athlet_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SpecialVacation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SpecialVacation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List SpecialVacations'), array('action' => 'index')); ?></li>
	</ul>
</div>
