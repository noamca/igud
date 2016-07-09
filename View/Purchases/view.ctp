<div class="purchaces view">
<h2><?php  echo __('Purchace'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prd Desc'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['prd_desc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Amount'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['total_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmation Number'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['confirmation_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identity'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['identity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campaign Id'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['campaign_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Supplier'); ?></dt>
		<dd>
			<?php echo h($purchace['Purchace']['supplier']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Purchace'), array('action' => 'edit', $purchace['Purchace']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Purchace'), array('action' => 'delete', $purchace['Purchace']['id']), null, __('Are you sure you want to delete # %s?', $purchace['Purchace']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Purchaces'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Purchace'), array('action' => 'add')); ?> </li>
	</ul>
</div>
