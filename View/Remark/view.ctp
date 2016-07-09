<div class="remarks view">
<h2><?php  echo __('Remark'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity Type'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['entity_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entity Id'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['entity_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($remark['Remark']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Remark'), array('action' => 'edit', $remark['Remark']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Remark'), array('action' => 'delete', $remark['Remark']['id']), null, __('Are you sure you want to delete # %s?', $remark['Remark']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Remarks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Remark'), array('action' => 'add')); ?> </li>
	</ul>
</div>
