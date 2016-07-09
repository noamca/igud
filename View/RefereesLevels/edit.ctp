<div class="refereesLevels form">
<?php echo $this->Form->create('RefereesLevel'); ?>
	<fieldset>
		<legend><?php echo __('Form Referees Level'); ?></legend>
	<?php
		echo $this->Form->input('level_description');
		echo $this->Form->input('price_for_hour');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('RefereesLevel.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('RefereesLevel.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List RefereesLevels'), array('action' => 'index')); ?></li>
	</ul>
</div>
