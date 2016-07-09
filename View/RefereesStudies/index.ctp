<div class="refereesStudies index">
	<h2><?php echo __('RefereesStudies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('referee_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('place'); ?></th>
			<th><?php echo $this->Paginator->sort('study_type'); ?></th>
			<th><?php echo $this->Paginator->sort('hours_number'); ?></th>
			<th><?php echo $this->Paginator->sort('study_manager'); ?></th>
			<th><?php echo $this->Paginator->sort('identity_number'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($refereesStudies as $refereesStudy): ?>
	<tr>
		<td><?php echo h($refereesStudy['RefereesStudy']['referee_id']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['date']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['place']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['study_type']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['hours_number']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['study_manager']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['RefereesStudy']['identity_number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $refereesStudy['RefereesStudy']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $refereesStudy['RefereesStudy']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $refereesStudy['RefereesStudy']['id']), null, __('Are you sure you want to delete # %s?', $refereesStudy['RefereesStudy']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Referees Study'), array('action' => 'add')); ?></li>
	</ul>
</div>
