<div class="purchaces index">
	<h2><?php echo __('Purchaces'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('prd_desc'); ?></th>
			<th><?php echo $this->Paginator->sort('total_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('confirmation_number'); ?></th>
			<th><?php echo $this->Paginator->sort('identity'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('campaign_id'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($purchaces as $purchace): ?>
	<tr>
		<td><?php echo h($purchace['Purchace']['id']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['purchase_date']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['prd_desc']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['total_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['confirmation_number']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['identity']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['phone']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['campaign_id']); ?>&nbsp;</td>
		<td><?php echo h($purchace['Purchace']['supplier']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $purchace['Purchace']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $purchace['Purchace']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $purchace['Purchace']['id']), null, __('Are you sure you want to delete # %s?', $purchace['Purchace']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Purchace'), array('action' => 'add')); ?></li>
	</ul>
</div>
