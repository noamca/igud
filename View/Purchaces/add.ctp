<div class="purchaces form">
<?php echo $this->Form->create('Purchace'); ?>
	<fieldset>
		<legend><?php echo __('Form Purchace'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('purchase_date');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('prd_desc');
		echo $this->Form->input('total_amount');
		echo $this->Form->input('confirmation_number');
		echo $this->Form->input('identity');
		echo $this->Form->input('phone');
		echo $this->Form->input('campaign_id');
		echo $this->Form->input('supplier');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Purchace.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Purchace.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Purchaces'), array('action' => 'index')); ?></li>
	</ul>
</div>
