<div class="refereesPayments index">
	<h2>תשלומים</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('level','דרגה'); ?></th>
			<th><?php echo $this->Paginator->sort('tax_deduction_percent','ניכוי מס'); ?></th>
			<th><?php echo $this->Paginator->sort('traffic_pay','נסיעות'); ?></th>
			<th><?php echo $this->Paginator->sort('date','תאריך'); ?></th>
	</tr>
	<?php foreach ($refereesPayments as $refereesPayment): ?>
	<tr>
		<td><?php echo h($refereesPayment['level']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['tax_deduction_percent']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['traffic_pay']); ?>&nbsp;</td>
		<td><?php echo h($refereesPayment['date']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>
	</table>
</div>
