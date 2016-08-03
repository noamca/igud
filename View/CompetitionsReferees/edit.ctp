<div class="competitionsReferees form">
<?php echo $this->Form->create('CompetitionsReferee'); ?>
	<fieldset>
		<legend><?php echo __('Form Competitions Referee'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('competition_id');
		echo $this->Form->input('referee_id');
		echo $this->Form->input('professsions_text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetitionsReferee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetitionsReferee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List CompetitionsReferees'), array('action' => 'index')); ?></li>
	</ul>
</div>
