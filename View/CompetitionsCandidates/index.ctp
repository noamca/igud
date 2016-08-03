<div class="competitionsCandidates index">
	<h2><?php echo __('CompetitionsCandidates'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('competition_id'); ?></th>
			<th><?php echo $this->Paginator->sort('identity_number'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($competitionsCandidates as $competitionsCandidate): ?>
	<tr>
		<td><?php echo h($competitionsCandidate['CompetitionsCandidate']['id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsCandidate['CompetitionsCandidate']['competition_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsCandidate['CompetitionsCandidate']['identity_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsCandidate['CompetitionsCandidate']['profession_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $competitionsCandidate['CompetitionsCandidate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsCandidate['CompetitionsCandidate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsCandidate['CompetitionsCandidate']['id']), null, __('Are you sure you want to delete # %s?', $competitionsCandidate['CompetitionsCandidate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Competitions Candidate'), array('action' => 'add')); ?></li>
	</ul>
</div>
