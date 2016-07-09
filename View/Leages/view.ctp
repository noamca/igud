<div class="leages view">
<h2><?php  echo __('Leage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($leage['Leage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($leage['Leage']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name Eng'); ?></dt>
		<dd>
			<?php echo h($leage['Leage']['name_eng']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Leage'), array('action' => 'edit', $leage['Leage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Leage'), array('action' => 'delete', $leage['Leage']['id']), null, __('Are you sure you want to delete # %s?', $leage['Leage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Leage'), array('action' => 'add')); ?> </li>
	</ul>
</div>
