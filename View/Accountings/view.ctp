<div class="accountings view">
<h2><?php  echo __('Accounting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['entity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accounting['Accounting']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounting'), array('action' => 'edit', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounting'), array('action' => 'delete', $accounting['Accounting']['id']), null, __('Are you sure you want to delete # %s?', $accounting['Accounting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accountings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
