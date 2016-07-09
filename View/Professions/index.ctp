<div class="professions index">
	<h2>מקצועות האתלטיקה</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','קוד'); ?></th>
			<th><?php echo $this->Paginator->sort('name','שם המקצוע'); ?></th>
			<th><?php echo $this->Paginator->sort('sort','מיון'); ?></th>
			<th><?php echo $this->Paginator->sort('length','אורך מסלול'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($professions as $profession): ?>
	<tr>
		<td><?php echo h($profession['Profession']['id']); ?>&nbsp;</td>
		<td><?php echo h($profession['Profession']['name']); ?>&nbsp;</td>
		<td><?php echo h($profession['Profession']['sort']); ?>&nbsp;</td>
		<td><?php echo h($profession['Profession']['length']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('ערוך', array('action' => 'edit', $profession['Profession']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <? echo $this->element('paginator'); ?>
    
    </div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link('מקצוע חדש', array('action' => 'add')); ?></li>
    </ul>
</div>