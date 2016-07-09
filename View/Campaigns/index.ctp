<div class="campaigns index">
	<h2>אירועים</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id','קוד'); ?></th>
			<th><?php echo $this->Paginator->sort('description','תאור'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active','פעיל?'); ?></th>
			<th><?php echo $this->Paginator->sort('date_start','תאריך התחלה'); ?></th>
			<th><?php echo $this->Paginator->sort('date_end','תאריך סיום'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($campaigns as $campaign): ?>
	<tr>
		<td><?php echo h($campaign['Campaign']['id']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['description']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['date_start']); ?>&nbsp;</td>
		<td><?php echo h($campaign['Campaign']['date_end']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('ערוך', array('action' => 'edit', $campaign['Campaign']['id'])); ?>
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $campaign['Campaign']['id']), null, __('Are you sure you want to delete # %s?', $campaign['Campaign']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

    <?echo $this->element('paginator');?>
    </div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('אירוע חדש', array('action' => 'add')); ?></li>
	</ul>
</div>
