<div class="competitionsReferees view">
<h2><?php  echo __('Competitions Referee'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitionsReferee['CompetitionsReferee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Competition Id'); ?></dt>
		<dd>
			<?php echo h($competitionsReferee['CompetitionsReferee']['competition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Referee Id'); ?></dt>
		<dd>
			<?php echo h($competitionsReferee['CompetitionsReferee']['referee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Professsions Text'); ?></dt>
		<dd>
			<?php echo h($competitionsReferee['CompetitionsReferee']['professsions_text']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitions Referee'), array('action' => 'edit', $competitionsReferee['CompetitionsReferee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitions Referee'), array('action' => 'delete', $competitionsReferee['CompetitionsReferee']['id']), null, __('Are you sure you want to delete # %s?', $competitionsReferee['CompetitionsReferee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List CompetitionsReferees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitions Referee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
