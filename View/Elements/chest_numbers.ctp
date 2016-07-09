<div class="chestNumbers index">
	<h2>מספרי חזה</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('year','שנה'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_number','מספר חזה'); ?></th>
	</tr>
	<?php foreach ($chestNumbers as $chestNumber): ?>
	<tr>
		<td><?php echo h($chestNumber['ChestNumber']['year']); ?>&nbsp;</td>
		<td><?php echo h($chestNumber['ChestNumber']['chest_number']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
	
</div>


