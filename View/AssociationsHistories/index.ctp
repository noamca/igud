<div class="associationsHistories index">
	<h2><?php echo __('AssociationsHistories'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th><?php echo $this->Paginator->sort('m1'); ?></th>
			<th><?php echo $this->Paginator->sort('m2'); ?></th>
			<th><?php echo $this->Paginator->sort('m3'); ?></th>
			<th><?php echo $this->Paginator->sort('m4'); ?></th>
			<th><?php echo $this->Paginator->sort('w1'); ?></th>
			<th><?php echo $this->Paginator->sort('w2'); ?></th>
			<th><?php echo $this->Paginator->sort('w3'); ?></th>
			<th><?php echo $this->Paginator->sort('w4'); ?></th>
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($associationsHistories as $associationsHistory): ?>
	<tr>
		<td><?php echo h($associationsHistory['AssociationsHistory']['id']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['association_id']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['m1']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['m2']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['m3']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['m4']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['w1']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['w2']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['w3']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['w4']); ?>&nbsp;</td>
		<td><?php echo h($associationsHistory['AssociationsHistory']['year']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $associationsHistory['AssociationsHistory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $associationsHistory['AssociationsHistory']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $associationsHistory['AssociationsHistory']['id']), null, __('Are you sure you want to delete # %s?', $associationsHistory['AssociationsHistory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Associations History'), array('action' => 'add')); ?></li>
	</ul>
</div>
