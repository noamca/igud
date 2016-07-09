<div class="sysSettings form">
<?php echo $this->Form->create('SysSetting'); ?>
	<fieldset>
		<legend><?php echo __('Form Sys Setting'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('working_year');
		echo $this->Form->input('mas_percent');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('SysSetting.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SysSetting.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List SysSettings'), array('action' => 'index')); ?></li>
	</ul>
</div>
