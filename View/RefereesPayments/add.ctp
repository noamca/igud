<div class="refereesPayments form">
<?php echo $this->Form->create('RefereesPayment'); ?>
	<fieldset>
		<legend><?php echo __('Form Referees Payment'); ?></legend>
	<?php
		echo $this->Form->input('referee_id');
		echo $this->Form->input('level');
		echo $this->Form->input('tax_deduction_percent');
		echo $this->Form->input('traffic_pay');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RefereesPayment.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RefereesPayment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List RefereesPayments'), array('action' => 'index')); ?></li>
	</ul>
</div>
