<div class="pointsTables view">
<h2><?php  echo __('Points Table'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pointsTable['PointsTable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($pointsTable['PointsTable']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pointsTable['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $pointsTable['Profession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Points Table'), array('action' => 'edit', $pointsTable['PointsTable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Points Table'), array('action' => 'delete', $pointsTable['PointsTable']['id']), null, __('Are you sure you want to delete # %s?', $pointsTable['PointsTable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List PointsTables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Points Table'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
