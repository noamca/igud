<div class="specialVacations index">
	<h2>חופשות ומיוחדות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('start_date','תאריך התחלה'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date','תאריך סיום'); ?></th>
			<th><?php echo $this->Paginator->sort('description','תיאור'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($specialVacations as $specialVacation): ?>
	<tr>
		<td><?php echo h($specialVacation['SpecialVacations']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($specialVacation['SpecialVacations']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($specialVacation['SpecialVacations']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $specialVacation['SpecialVacation']['id']), null, __('Are you sure you want to delete # %s?', $specialVacation['SpecialVacation']['id'])); ?>
            <a href="javascript:void(0)" onclick="callAjax('SpecialVacations','ajaxEdit',<?=$specialVacation['SpecialVacations']['id'];?>) ">הצג</a>
            
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<? echo $this->element('paginator'); ?>
	</div>
</div>
<div class="actions">
	<h3>פעולות</h3>
	<ul>
		<li><?php echo $this->Html->link('חופשה חדשה', array('action' => 'add')); ?></li>
	</ul>
</div>
