<div class="modelsFieldsMetaData view">
<h2><?php  echo __('Models Fields Meta Datum'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Name'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ord'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['ord']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['label']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('View Auth Key'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['view_auth_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edit Auth Key'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['edit_auth_key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Visiable Yn'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['visiable_yn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Class Name'); ?></dt>
		<dd>
			<?php echo h($modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['class_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Models Fields Meta Datum'), array('action' => 'edit', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Models Fields Meta Datum'), array('action' => 'delete', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id']), null, __('Are you sure you want to delete # %s?', $modelsFieldsMetaDatum['ModelsFieldsMetaDatum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List ModelsFieldsMetaData'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Models Fields Meta Datum'), array('action' => 'add')); ?> </li>
	</ul>
</div>
