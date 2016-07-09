<div class="ages form">
<?php echo $this->Form->create('Age'); ?>
	<fieldset>
		<legend><?php echo __('Form Age'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('description_eng');
		echo $this->Form->input('from_age');
		echo $this->Form->input('to_age');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Age.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Age.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ages'), array('action' => 'index')); ?></li>
	</ul>
</div>
