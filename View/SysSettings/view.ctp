<div class="sysSettings view">
<h2><?php  echo __('Sys Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sysSetting['SysSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Working Year'); ?></dt>
		<dd>
			<?php echo h($sysSetting['SysSetting']['working_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mas Percent'); ?></dt>
		<dd>
			<?php echo h($sysSetting['SysSetting']['mas_percent']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sys Setting'), array('action' => 'edit', $sysSetting['SysSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sys Setting'), array('action' => 'delete', $sysSetting['SysSetting']['id']), null, __('Are you sure you want to delete # %s?', $sysSetting['SysSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List SysSettings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sys Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
