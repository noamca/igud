<div class="competitionsProfessions view">
<h2><?php  echo __('Competitions Profession'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competition Id'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['competition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession Id'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['profession_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Athletes Per Association'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['max_athletes_per_association']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ages From'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['ages_from']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ages To'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['ages_to']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genders Ids'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['genders_ids']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Hour'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['start_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Hour'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['end_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level Id'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['level_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wind Measure Yn'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['wind_measure_yn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Lane Or Order'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['show_lane_or_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Max Lanes'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['max_lanes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cm Addition'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['cm_addition']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Results Per Person Or Association'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['results_per_person_or_association']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Two On Lane Yn'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['two_on_lane_yn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minimum Attends'); ?></dt>
		<dd>
			<?php echo h($competitionsProfession['CompetitionsProfession']['minimum_attends']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitions Profession'), array('action' => 'edit', $competitionsProfession['CompetitionsProfession']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitions Profession'), array('action' => 'delete', $competitionsProfession['CompetitionsProfession']['id']), null, __('Are you sure you want to delete # %s?', $competitionsProfession['CompetitionsProfession']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List CompetitionsProfessions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitions Profession'), array('action' => 'add')); ?> </li>
	</ul>
</div>
