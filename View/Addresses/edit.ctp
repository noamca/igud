<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Form Address'); ?></legend>
	<?php
		echo $this->Form->input('identity_number');
		echo $this->Form->input('street');
		echo $this->Form->input('block_no');
		echo $this->Form->input('city');
		echo $this->Form->input('entry');
		echo $this->Form->input('appartment');
		echo $this->Form->input('zip');
		echo $this->Form->input('email');
		echo $this->Form->input('status');
		echo $this->Form->input('phone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('fax');
		echo $this->Form->input('position');
		echo $this->Form->input('neigberhood');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Address.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Address.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?></li>
	</ul>
</div>
