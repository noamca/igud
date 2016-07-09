<div class="refereesLevels view">
<h2><?php  echo __('Referees Level'); ?></h2>
	<dl>
		<dt><?php echo __('Level Description'); ?></dt>
		<dd>
			<?php echo h($refereesLevel['RefereesLevel']['level_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price For Hour'); ?></dt>
		<dd>
			<?php echo h($refereesLevel['RefereesLevel']['price_for_hour']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referees Level'), array('action' => 'edit', $refereesLevel['RefereesLevel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referees Level'), array('action' => 'delete', $refereesLevel['RefereesLevel']['id']), null, __('Are you sure you want to delete # %s?', $refereesLevel['RefereesLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List RefereesLevels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referees Level'), array('action' => 'add')); ?> </li>
	</ul>
</div>
