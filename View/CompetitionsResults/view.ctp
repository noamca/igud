<div class="competitionsResults view">
<h2><?php  echo __('Competitions Result'); ?></h2>
	<dl>
		<dt><?php echo __('Competition Id'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['competition_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat Id'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['heat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Assosiation Id'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['assosiation_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Athlet Id'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['athlet_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Result'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['middle_result']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Final Result'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['final_result']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitionsResult['CompetitionsResult']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitions Result'), array('action' => 'edit', $competitionsResult['CompetitionsResult']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitions Result'), array('action' => 'delete', $competitionsResult['CompetitionsResult']['id']), null, __('Are you sure you want to delete # %s?', $competitionsResult['CompetitionsResult']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List CompetitionsResults'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitions Result'), array('action' => 'add')); ?> </li>
	</ul>
</div>
