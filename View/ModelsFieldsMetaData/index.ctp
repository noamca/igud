<div class="modelsFieldsMetaData index">
	<h2><?php echo __('ModelsFieldsMetaData'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('model_name'); ?></th>
			<th><?php echo $this->Paginator->sort('ord'); ?></th>
			<th><?php echo $this->Paginator->sort('label'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('size'); ?></th>
			<th><?php echo $this->Paginator->sort('view_auth_key'); ?></th>
			<th><?php echo $this->Paginator->sort('edit_auth_key'); ?></th>
			<th><?php echo $this->Paginator->sort('visiable_yn'); ?></th>
			<th><?php echo $this->Paginator->sort('class_name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($modelsFieldsMetaData as $modelsFieldsMetaDatum): ?>
	<tr>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['model_name']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['ord']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['label']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['type']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['size']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['view_auth_key']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['edit_auth_key']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['visiable_yn']); ?>&nbsp;</td>
		<td><?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['class_name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id']), null, __('Are you sure you want to delete # %s?', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Models Fields Meta Datum'), array('action' => 'add')); ?></li>
	</ul>
</div>
