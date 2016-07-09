<div class="modelsFieldsMetaData form">
<?php echo $this->Form->create('ModelsFieldsMetaDatum'); ?>
	<fieldset>
		<legend><?php echo __('Form Models Fields Meta Datum'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('model_name');
		echo $this->Form->input('ord');
		echo $this->Form->input('label');
		echo $this->Form->input('type');
		echo $this->Form->input('size');
		echo $this->Form->input('view_auth_key');
		echo $this->Form->input('edit_auth_key');
		echo $this->Form->input('visiable_yn');
		echo $this->Form->input('class_name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ModelsFieldsMetaDatum.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ModelsFieldsMetaDatum.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List ModelsFieldsMetaData'), array('action' => 'index')); ?></li>
	</ul>
</div>
