<div class="competitionsCandidates form">
<?php echo $this->Form->create('CompetitionsCandidate'); ?>
	<fieldset>
		<legend><?php echo __('Form Competitions Candidate'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('competition_id');
		echo $this->Form->input('identity_number');
		echo $this->Form->input('profession_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetitionsCandidate.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetitionsCandidate.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List CompetitionsCandidates'), array('action' => 'index')); ?></li>
	</ul>
</div>
