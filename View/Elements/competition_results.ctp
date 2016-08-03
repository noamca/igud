<div class="competitionsResults index">
	<h2>תוצאות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>אגודה</th>
			<th>ספורטאי</th>
			<th>תוצאת ביינים</th>
			<th>תוצאה סופית</th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($competitionsResults as $competitionsResult): ?>
	<tr>
		<td><?php echo h($competitionsResult['CompetitionsResult']['assosiation_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['athlet_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['middle_result']); ?>&nbsp;</td>
		<td><?php echo h($competitionsResult['CompetitionsResult']['final_result']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsResult['CompetitionsResult']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competitionsResult['CompetitionsResult']['id']), null, __('Are you sure you want to delete # %s?', $competitionsResult['CompetitionsResult']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<div class="actions">
	<h3>דפי שיפוט</h3>
	<ul>
		<li><?php echo $this->Html->link('דף שיפוט חדש', array('action' => 'add')); ?></li>
	</ul>
</div>
