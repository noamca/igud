<div class="addresses index">
	<h2><?php echo __('Addresses'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('identity_number'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('block_no'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('entry'); ?></th>
			<th><?php echo $this->Paginator->sort('appartment'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('mobile'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('neigberhood'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($addresses as $address): ?>
	<tr>
		<td><?php echo h($address['Address']['identity_number']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['street']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['block_no']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['city']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['entry']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['appartment']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['zip']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['email']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['status']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['phone']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['fax']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['position']); ?>&nbsp;</td>
		<td><?php echo h($address['Address']['neigberhood']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $address['Address']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $address['Address']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $address['Address']['id']), null, __('Are you sure you want to delete # %s?', $address['Address']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Address'), array('action' => 'add')); ?></li>
	</ul>
</div>
