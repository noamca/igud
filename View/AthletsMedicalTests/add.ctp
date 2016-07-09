<div class="AthletsMedicalTests form">
<?php echo $this->Form->create('AthletsMedicalTest'); ?>
	<fieldset>
		<legend><?php echo __('Form Athlets Medical Test'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('institute_id');
		echo $this->Form->input('year');
		echo $this->Form->input('mediacl_check_type');
		echo $this->Form->input('status_id');
		echo $this->Form->input('expiration_date');
		echo $this->Form->input('remarks');
		echo $this->Form->input('file1');
		echo $this->Form->input('file2');
		echo $this->Form->input('athlet_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AthletsMedicalTest.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AthletsMedicalTest.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List AthletsMedicalTests'), array('action' => 'index')); ?></li>
	</ul>
</div>
