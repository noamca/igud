<div class="associationsHistories view">
<h2><?php  echo __('Associations History'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Association Id'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['association_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M1'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['m1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M2'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['m2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M3'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['m3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('M4'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['m4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W1'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['w1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W2'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['w2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W3'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['w3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('W4'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['w4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($associationsHistory['AssociationsHistory']['year']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Associations History'), array('action' => 'edit', $associationsHistory['AssociationsHistory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Associations History'), array('action' => 'delete', $associationsHistory['AssociationsHistory']['id']), null, __('Are you sure you want to delete # %s?', $associationsHistory['AssociationsHistory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List AssociationsHistories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Associations History'), array('action' => 'add')); ?> </li>
	</ul>
</div>
