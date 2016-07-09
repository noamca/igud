<div class="competitions index">
	<h2>תחרויות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','קוד'); ?></th>
			<th><?php echo $this->Paginator->sort('name','שם התחרות'); ?></th>
			<th><?php echo $this->Paginator->sort('date_start','תאריך התחלה'); ?></th>
			<th><?php echo $this->Paginator->sort('date_end','תאריך סיום'); ?></th>
			<th><?php echo $this->Paginator->sort('is_international','בינלאומית?'); ?></th>
			<th><?php echo $this->Paginator->sort('place','מקום התחרות'); ?></th>
			<th><?php echo $this->Paginator->sort('age_from','גיל'); ?></th>
			<th><?php echo $this->Paginator->sort('age_to','עד גיל'); ?></th>
			<th><?php echo $this->Paginator->sort('gender','מין'); ?></th>
			<th><?php echo $this->Paginator->sort('is_api_open','ממשק חיצוני?'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($competitions as $competition): ?>
	<tr>
		<td><?php echo h($competition['Competition']['id']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['name']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['date_start']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['date_end']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['is_international']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['place']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['age_from']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['age_to']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['gender']); ?>&nbsp;</td>
		<td><?php echo h($competition['Competition']['is_api_open']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('ערוך', array('action' => 'edit', $competition['Competition']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <? echo $this->element('paginator'); ?>
    
    </div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('תחרות חדשה', array('action' => 'add')); ?></li>
	</ul>
</div>
