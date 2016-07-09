<div class="leages form">
<?php echo $this->Form->create('Leage'); ?>
	<fieldset>
		<legend><?php echo __('Form Leage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('name_eng');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Leage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Leage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Leages'), array('action' => 'index')); ?></li>
	</ul>
</div>
