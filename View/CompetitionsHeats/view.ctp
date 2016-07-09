<div class="competitionsHeats view">
<h2><?php  echo __('Competitions Heat'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Heat Id'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['heat_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Athlet Id'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['athlet_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lane Number'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['lane_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Number'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['order_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Points Counting Yn'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['points_counting_yn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chest Number'); ?></dt>
		<dd>
			<?php echo h($competitionsHeat['CompetitionsHeat']['chest_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($competitionsHeat['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $competitionsHeat['Profession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competitions Heat'), array('action' => 'edit', $competitionsHeat['CompetitionsHeat']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competitions Heat'), array('action' => 'delete', $competitionsHeat['CompetitionsHeat']['id']), null, __('Are you sure you want to delete # %s?', $competitionsHeat['CompetitionsHeat']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List CompetitionsHeats'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competitions Heat'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
