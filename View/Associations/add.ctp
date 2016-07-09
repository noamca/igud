<div class="associations form">
<?php echo $this->Form->create('Association'); ?>
	<fieldset>
		<legend><?php echo __('Form Association'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('name_eng');
		echo $this->Form->input('internal_number');
		echo $this->Form->input('leagues');
		echo $this->Form->input('red_board');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Association.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Association.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('controller' => 'Athlets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Coachers'), array('controller' => 'coachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Coacher'), array('controller' => 'coachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Referees'), array('controller' => 'referees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referee'), array('controller' => 'referees', 'action' => 'add')); ?> </li>
	</ul>
</div>
