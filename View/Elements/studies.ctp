<div class="refereesStudies index">
	<h2>השתלמויות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date','תאריך'); ?></th>
			<th><?php echo $this->Paginator->sort('place','מקום'); ?></th>
			<th><?php echo $this->Paginator->sort('study_type','סוג השתלמות'); ?></th>
			<th><?php echo $this->Paginator->sort('hours_number','מספר שעות'); ?></th>
			<th><?php echo $this->Paginator->sort('study_manager','אחראי השתלמות'); ?></th>
	</tr>
	<?php foreach ($refereesStudies as $refereesStudy): ?>
	<tr>
		<td><?php echo h($refereesStudy['date']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['place']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['study_type']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['hours_number']); ?>&nbsp;</td>
		<td><?php echo h($refereesStudy['study_manager']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
