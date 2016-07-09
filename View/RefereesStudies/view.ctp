<div class="refereesStudies view">
<h2><?php  echo __('Referees Study'); ?></h2>
	<dl>
		<dt><?php echo __('Referee Id'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['referee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Place'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['place']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Study Type'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['study_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hours Number'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['hours_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Study Manager'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['study_manager']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identity Number'); ?></dt>
		<dd>
			<?php echo h($refereesStudy['RefereesStudy']['identity_number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referees Study'), array('action' => 'edit', $refereesStudy['RefereesStudy']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referees Study'), array('action' => 'delete', $refereesStudy['RefereesStudy']['id']), null, __('Are you sure you want to delete # %s?', $refereesStudy['RefereesStudy']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List RefereesStudies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referees Study'), array('action' => 'add')); ?> </li>
	</ul>
</div>
