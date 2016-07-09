<div class="Athlets form">
<?php echo $this->Form->create('Athlete'); ?>
	<fieldset>
		<legend><?php echo __('Form Athlete'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name_eng');
		echo $this->Form->input('last_name_eng');
		echo $this->Form->input('father_name');
		echo $this->Form->input('born_date');
		echo $this->Form->input('immigration_date');
		echo $this->Form->input('team_id');
		echo $this->Form->input('degrees');
		echo $this->Form->input('static_chest_number');
		echo $this->Form->input('health_organization_id');
		echo $this->Form->input('passport_number');
		echo $this->Form->input('passport_expired');
		echo $this->Form->input('family_status_id');
		echo $this->Form->input('registarion_date');
		echo $this->Form->input('is_active');
		echo $this->Form->input('email');
		echo $this->Form->input('addresses');
		echo $this->Form->input('sizes');
		echo $this->Form->input('medical_tests');
		echo $this->Form->input('image');
		echo $this->Form->input('gender');
		echo $this->Form->input('height');
		echo $this->Form->input('height_date');
		echo $this->Form->input('weight');
		echo $this->Form->input('weight_date');
		echo $this->Form->input('army_details');
		echo $this->Form->input('trainer');
		echo $this->Form->input('age_group_id');
		echo $this->Form->input('association_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Athlete.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Athlete.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Associations'), array('controller' => 'associations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Association'), array('controller' => 'associations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List ChestNumbers'), array('controller' => 'chestNumbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chest Number'), array('controller' => 'chestNumbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
