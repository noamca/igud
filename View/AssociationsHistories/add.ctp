<div class="associationsHistories form">
<?php echo $this->Form->create('AssociationsHistory'); ?>
	<fieldset>
		<legend><?php echo __('Form Associations History'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('association_id');
		echo $this->Form->input('m1');
		echo $this->Form->input('m2');
		echo $this->Form->input('m3');
		echo $this->Form->input('m4');
		echo $this->Form->input('w1');
		echo $this->Form->input('w2');
		echo $this->Form->input('w3');
		echo $this->Form->input('w4');
		echo $this->Form->input('year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('AssociationsHistory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('AssociationsHistory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List AssociationsHistories'), array('action' => 'index')); ?></li>
	</ul>
</div>
