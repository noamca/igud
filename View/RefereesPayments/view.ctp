<div class="refereesPayments view">
<h2><?php  echo __('Referees Payment'); ?></h2>
	<dl>
		<dt><?php echo __('Referee Id'); ?></dt>
		<dd>
			<?php echo h($refereesPayment['RefereesPayment']['referee_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($refereesPayment['RefereesPayment']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax Deduction Percent'); ?></dt>
		<dd>
			<?php echo h($refereesPayment['RefereesPayment']['tax_deduction_percent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Traffic Pay'); ?></dt>
		<dd>
			<?php echo h($refereesPayment['RefereesPayment']['traffic_pay']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($refereesPayment['RefereesPayment']['date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Referees Payment'), array('action' => 'edit', $refereesPayment['RefereesPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Referees Payment'), array('action' => 'delete', $refereesPayment['RefereesPayment']['id']), null, __('Are you sure you want to delete # %s?', $refereesPayment['RefereesPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List RefereesPayments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Referees Payment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
