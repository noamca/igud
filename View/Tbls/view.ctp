<div class="tbls view">
<h2><?php  echo __('Tbl'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tbl['Tbl']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tbl'); ?></dt>
		<dd>
			<?php echo h($tbl['Tbl']['tbl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($tbl['Tbl']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($tbl['Tbl']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tbl'), array('action' => 'edit', $tbl['Tbl']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tbl'), array('action' => 'delete', $tbl['Tbl']['id']), null, __('Are you sure you want to delete # %s?', $tbl['Tbl']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tbls'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tbl'), array('action' => 'add')); ?> </li>
	</ul>
</div>
