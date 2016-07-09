
<div class="specialVacations form">
<?php echo $this->Form->create('SpecialVacation'); ?>
	<fieldset>
		<legend>עדכון חופשה</legend>
	<?php
		echo $this->Form->hidden('id',array('label'=>'קוד'));
		echo $this->Form->input('start_date',array('label'=>'תאריך התחלה'));
		echo $this->Form->input('end_date',array('label'=>'תאריך סיום'));
		echo $this->Form->input('description',array('label'=>'תאור מפורט'));
		echo $this->Form->hidden('athlet_id');
	?>
	</fieldset>
<?php echo $this->Form->end('עדכן'); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Form->postLink('מחק חופשה', array('action' => 'delete', $this->Form->value('SpecialVacation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('SpecialVacation.id'))); ?></li>
	</ul>
</div>



 
