<div class="scoringFormats view">
<h2><?php  echo __('Scoring Format'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($scoringFormat['ScoringFormat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($scoringFormat['ScoringFormat']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Format'); ?></dt>
		<dd>
			<?php echo h($scoringFormat['ScoringFormat']['format']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scoring Format'), array('action' => 'edit', $scoringFormat['ScoringFormat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Scoring Format'), array('action' => 'delete', $scoringFormat['ScoringFormat']['id']), null, __('Are you sure you want to delete # %s?', $scoringFormat['ScoringFormat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List ScoringFormats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scoring Format'), array('action' => 'add')); ?> </li>
	</ul>
</div>
