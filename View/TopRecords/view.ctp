<div class="topRecords view">
<h2><?php  echo __('Top Record'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($topRecord['TopRecord']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Record'); ?></dt>
		<dd>
			<?php echo h($topRecord['TopRecord']['record']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo $this->Html->link($topRecord['Profession']['name'], array('controller' => 'professions', 'action' => 'view', $topRecord['Profession']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Top Record'), array('action' => 'edit', $topRecord['TopRecord']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Top Record'), array('action' => 'delete', $topRecord['TopRecord']['id']), null, __('Are you sure you want to delete # %s?', $topRecord['TopRecord']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List TopRecords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Top Record'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Professions'), array('controller' => 'professions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profession'), array('controller' => 'professions', 'action' => 'add')); ?> </li>
	</ul>
</div>
