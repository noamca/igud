<div class="specialVacations index">
	<h2><?php echo __('SpecialVacations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('start_date','תאריך התחלה'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date','תאריך סיום'); ?></th>
			<th><?php echo $this->Paginator->sort('description','תיאור'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($specialVacations as $specialVacation): ?>
	<tr>
		<td><?php echo h($specialVacation['SpecialVacation']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($specialVacation['SpecialVacation']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($specialVacation['SpecialVacation']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $specialVacation['SpecialVacation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $specialVacation['SpecialVacation']['id']), null, __('Are you sure you want to delete # %s?', $specialVacation['SpecialVacation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<? echo $this->element('paginator'); ?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Special Vacation'), array('action' => 'add')); ?></li>
	</ul>
</div>
