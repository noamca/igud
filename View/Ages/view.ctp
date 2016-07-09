<div class="ages view">
<h2><?php  echo __('Age'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($age['Age']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($age['Age']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description Eng'); ?></dt>
		<dd>
			<?php echo h($age['Age']['description_eng']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('From Age'); ?></dt>
		<dd>
			<?php echo h($age['Age']['from_age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('To Age'); ?></dt>
		<dd>
			<?php echo h($age['Age']['to_age']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Age'), array('action' => 'edit', $age['Age']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Age'), array('action' => 'delete', $age['Age']['id']), null, __('Are you sure you want to delete # %s?', $age['Age']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Age'), array('action' => 'add')); ?> </li>
	</ul>
</div>
