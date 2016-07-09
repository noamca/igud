<div class="AthletsMedicalTests index">
	<h2>בדיקות רפואיות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('place_desc','מכון'); ?></th>
			<th><?php echo $this->Paginator->sort('year','שנה'); ?></th>
			<th><?php echo $this->Paginator->sort('test_type_desc','סוג בדיקה'); ?></th>
			<th><?php echo $this->Paginator->sort('results','מצב הבדיקה'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($AthletsMedicalTests as $AthletsMedicalTest): ?>
	<tr>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['place_desc']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['year']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['test_type_desc']); ?>&nbsp;</td>
		<td><?php echo h($AthletsMedicalTest['AthletsMedicalTest']['results']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('צפה', array('action' => 'edit', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?>
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $AthletsMedicalTest['AthletsMedicalTest']['id']), null, __('Are you sure you want to delete # %s?', $AthletsMedicalTest['AthletsMedicalTest']['id'])); ?>
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
		<li><?php echo $this->Html->link('בדיקה חדשה', array('controller'=>'medicalTest', 'action' => 'add')); ?></li>
	</ul>
</div>
