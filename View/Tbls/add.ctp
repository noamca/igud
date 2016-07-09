<div class="tbls form">
<?php echo $this->Form->create('Tbl'); ?>
	<fieldset>
		<legend><?php echo __('Form Tbl'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tbl');
		echo $this->Form->input('code');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tbl.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Tbl.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tbls'), array('action' => 'index')); ?></li>
	</ul>
</div>
