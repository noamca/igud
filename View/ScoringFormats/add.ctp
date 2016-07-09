<div class="scoringFormats form">
<?php echo $this->Form->create('ScoringFormat'); ?>
	<fieldset>
		<legend><?php echo __('Form Scoring Format'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('format');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ScoringFormat.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ScoringFormat.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List ScoringFormats'), array('action' => 'index')); ?></li>
	</ul>
</div>
