<div class="campaigns form">
<?php echo $this->Form->create('Campaign'); ?>
	<fieldset>
		<legend>עריכת אירוע</legend>
	<?php
        echo $this->Form->hidden('id');
		echo $this->Form->input('description',array('label'=>'תיאור האירוע'));
		echo $this->Form->checkbox('is_active',array('label'=>'פעיל?'));
		echo $this->Form->input('date_start',array('label'=>'תאריך התחלה'));
		echo $this->Form->input('date_end',array('label'=>'תאריך סיום'));
	?>
	</fieldset>
<?php echo $this->Form->end('שמור'); ?>
</div>
<div class="actions">
	<h3>פעולות</h3>
	<ul>

		<li><?php echo $this->Form->postLink('מחק אירוע', array('action' => 'delete', $this->Form->value('Campaign.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Campaign.id'))); ?></li>
		<li><?php echo $this->Html->link('חזרה לרשימת אירועים', array('action' => 'index')); ?></li>
	</ul>
</div>
