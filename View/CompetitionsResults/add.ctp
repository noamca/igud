<div class="competitionsResults form">
<?php echo $this->Form->create('CompetitionsResult'); ?>
	<fieldset>
		<legend><?php echo __('Form Competitions Result'); ?></legend>
	<?php
		echo $this->Form->input('competition_id');
		echo $this->Form->input('heat_id');
		echo $this->Form->input('assosiation_id');
		echo $this->Form->input('athlet_id');
		echo $this->Form->input('middle_result');
		echo $this->Form->input('final_result');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetitionsResult.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetitionsResult.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List CompetitionsResults'), array('action' => 'index')); ?></li>
	</ul>
</div>
