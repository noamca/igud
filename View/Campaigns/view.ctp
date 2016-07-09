<div class="campaigns view">
<h2><?php  echo __('Campaign'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Start'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['date_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End'); ?></dt>
		<dd>
			<?php echo h($campaign['Campaign']['date_end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Campaign'), array('action' => 'edit', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Campaign'), array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign'), array('action' => 'add')); ?> </li>
	</ul>
</div>
