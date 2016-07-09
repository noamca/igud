<div class="remarks form">
<?php echo $this->Form->create('Remark'); ?>
	<fieldset>
		<legend><?php echo __('Form Remark'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entity_type');
		echo $this->Form->input('entity_id');
		echo $this->Form->input('date');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Remark.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Remark.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Remarks'), array('action' => 'index')); ?></li>
	</ul>
</div>
