<div class="chestNumbers view">
<h2><?php  echo __('Chest Number'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chestNumber['ChestNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($chestNumber['ChestNumber']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chest Number'); ?></dt>
		<dd>
			<?php echo h($chestNumber['ChestNumber']['chest_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Athlete'); ?></dt>
		<dd>
			<?php echo $this->Html->link($chestNumber['Athlete']['id'], array('controller' => 'Athlets', 'action' => 'view', $chestNumber['Athlete']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chest Number'), array('action' => 'edit', $chestNumber['ChestNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chest Number'), array('action' => 'delete', $chestNumber['ChestNumber']['id']), null, __('Are you sure you want to delete # %s?', $chestNumber['ChestNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List ChestNumbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chest Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Athlets'), array('controller' => 'Athlets', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'Athlets', 'action' => 'add')); ?> </li>
	</ul>
</div>
