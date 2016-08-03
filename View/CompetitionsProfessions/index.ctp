<div class="competitionsProfessions index">
	<h2><?php echo __('CompetitionsProfessions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('competition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id'); ?></th>
			<th><?php echo $this->Paginator->sort('max_athletes_per_association'); ?></th>
			<th><?php echo $this->Paginator->sort('ages_from'); ?></th>
			<th><?php echo $this->Paginator->sort('ages_to'); ?></th>
			<th><?php echo $this->Paginator->sort('genders_ids'); ?></th>
			<th><?php echo $this->Paginator->sort('start_hour'); ?></th>
			<th><?php echo $this->Paginator->sort('end_hour'); ?></th>
			<th><?php echo $this->Paginator->sort('level_id'); ?></th>
			<th><?php echo $this->Paginator->sort('wind_measure_yn'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('show_lane_or_order'); ?></th>
			<th><?php echo $this->Paginator->sort('max_lanes'); ?></th>
			<th><?php echo $this->Paginator->sort('cm_addition'); ?></th>
			<th><?php echo $this->Paginator->sort('results_per_person_or_association'); ?></th>
			<th><?php echo $this->Paginator->sort('two_on_lane_yn'); ?></th>
			<th><?php echo $this->Paginator->sort('minimum_attends'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competitionsProfessions as $competitionsProfession): ?>
	<tr>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['competition_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['profession_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['max_athletes_per_association']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['ages_from']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['ages_to']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['genders_ids']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['start_hour']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['end_hour']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['level_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['wind_measure_yn']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['weight']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['show_lane_or_order']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['max_lanes']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['cm_addition']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['results_per_person_or_association']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['two_on_lane_yn']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['CompetitionsProfession']['minimum_attends']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitionsProfession['CompetitionsProfession']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsProfession['CompetitionsProfession']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsProfession['CompetitionsProfession']['id']), null, __('Are you sure you want to delete # %s?', $competitionsProfession['CompetitionsProfession']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Competitions Profession'), array('action' => 'add')); ?></li>
	</ul>
</div>
