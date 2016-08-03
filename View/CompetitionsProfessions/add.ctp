<div class="competitionsProfessions form">
<?php echo $this->Form->create('CompetitionsProfession'); ?>
	<fieldset>
		<legend><?php echo __('Form Competitions Profession'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('competition_id');
		echo $this->Form->input('profession_id');
		echo $this->Form->input('max_athletes_per_association');
		echo $this->Form->input('ages_from');
		echo $this->Form->input('ages_to');
		echo $this->Form->input('genders_ids');
		echo $this->Form->input('start_hour');
		echo $this->Form->input('end_hour');
		echo $this->Form->input('level_id');
		echo $this->Form->input('wind_measure_yn');
		echo $this->Form->input('weight');
		echo $this->Form->input('show_lane_or_order');
		echo $this->Form->input('max_lanes');
		echo $this->Form->input('cm_addition');
		echo $this->Form->input('results_per_person_or_association');
		echo $this->Form->input('two_on_lane_yn');
		echo $this->Form->input('minimum_attends');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CompetitionsProfession.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CompetitionsProfession.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List CompetitionsProfessions'), array('action' => 'index')); ?></li>
	</ul>
</div>
