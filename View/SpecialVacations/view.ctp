<div class="specialVacations view">
<h2><?php  echo __('Special Vacation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($specialVacation['SpecialVacation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($specialVacation['SpecialVacation']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($specialVacation['SpecialVacation']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($specialVacation['SpecialVacation']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Athlet Id'); ?></dt>
		<dd>
			<?php echo h($specialVacation['SpecialVacation']['athlet_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Special Vacation'), array('action' => 'edit', $specialVacation['SpecialVacation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Special Vacation'), array('action' => 'delete', $specialVacation['SpecialVacation']['id']), null, __('Are you sure you want to delete # %s?', $specialVacation['SpecialVacation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List SpecialVacations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Special Vacation'), array('action' => 'add')); ?> </li>
	</ul>
</div>
