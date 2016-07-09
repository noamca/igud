<div class="remarks form">
<?php echo $this->Form->create('Remark'); ?>
	<fieldset>
		<legend>הערה</legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->hidden('entity_type',array("value"=>"Athlet"));
		echo $this->Form->hidden('entity_id');
		echo $this->Form->input('date');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end('שלח'); ?>
</div>
<div class="actions">
	<h3><?php echo 'פעולות'; ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink('מחק', array('action' => 'delete', $this->Form->value('Remark.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Remark.id'))); ?></li>
	</ul>
</div>
