<div class="AthletsMedicalTests view">
<h2><?php  echo __('Athlets Medical Test'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Institute Id'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['institute_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mediacl Check Type'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['mediacl_check_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration Date'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['expiration_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File1'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['file1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File2'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['file2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Athlet Id'); ?></dt>
		<dd>
			<?php echo h($AthletsMedicalTest['AthletsMedicalTest']['athlet_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Athlets Medical Test'), array('action' => 'edit', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Athlets Medical Test'), array('action' => 'delete', $AthletsMedicalTest['AthletsMedicalTest']['id']), null, __('Are you sure you want to delete # %s?', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List AthletsMedicalTests'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Athlets Medical Test'), array('action' => 'add')); ?> </li>
	</ul>
</div>
