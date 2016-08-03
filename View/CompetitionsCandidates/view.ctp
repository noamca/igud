<div class="competitionsCandidates view">
<h2><?php  echo __('Competitions Candidate'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitionsCandidate['CompetitionsCandidate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competition Id'); ?></dt>
		<dd>
			<?php echo h($competitionsCandidate['CompetitionsCandidate']['competition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identity Number'); ?></dt>
		<dd>
			<?php echo h($competitionsCandidate['CompetitionsCandidate']['identity_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession Id'); ?></dt>
		<dd>
			<?php echo h($competitionsCandidate['CompetitionsCandidate']['profession_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitions Candidate'), array('action' => 'edit', $competitionsCandidate['CompetitionsCandidate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitions Candidate'), array('action' => 'delete', $competitionsCandidate['CompetitionsCandidate']['id']), null, __('Are you sure you want to delete # %s?', $competitionsCandidate['CompetitionsCandidate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List CompetitionsCandidates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitions Candidate'), array('action' => 'add')); ?> </li>
	</ul>
</div>
