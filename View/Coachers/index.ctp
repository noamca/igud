<div class="coachers index">
	<h2>רשימת מאמנים</h2>
	<table cellpadding="0" cellspacing="0">
     <? echo $this->Form->create('Coacher',array('action'=>'search'));?>
    <tr>
            <th colspan=20>
                <? echo $this->Form->input('Search.personal_identity_number',array("label"=>false,"class"=>"search","placeholder"=>"חפש לפי תז"));?>
                <? echo $this->Form->input('Search.names',array("label"=>false,"class"=>"search","placeholder"=>" חפש לפי שם פרטי או משפחה"));?>
                <div class="input text" style="float: right;"><button name="search" class="btn  btn-success btn_success_regular">חפש</button></div>
            </th>
    </tr>    
     <?php echo $this->form->end();?>    
	<tr>
			<th><?php echo $this->Paginator->sort('first_name','שם פרטי'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name','שם משפחה'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name_eng','שם פרטי אנגלית'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name_eng','שם משפחה אנגלית'); ?></th>
			<th><?php echo $this->Paginator->sort('born_date','תאריך לידה'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active','פעיל'); ?></th>
			<th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
			<th><?php echo $this->Paginator->sort('association_id'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($coachers as $coacher): ?>
	<tr>
		<td><?php echo h($coacher['Coacher']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($coacher['Coacher']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($coacher['Coacher']['first_name_eng']); ?>&nbsp;</td>
		<td><?php echo h($coacher['Coacher']['last_name_eng']); ?>&nbsp;</td>
		<td><?php echo h($coacher['Coacher']['born_date']); ?>&nbsp;</td>
		<td><?php if($coacher['Coacher']['is_active']=='1') echo "כן"; ?>&nbsp;</td>
		<td><?php echo h($coacher['Coacher']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($coacher['Association']['name'], array('controller' => 'associations', 'action' => 'view', $coacher['Association']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('ערוך', array('action' => 'edit', $coacher['Coacher']['id']),array('style'=>'color:green')); ?>
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $coacher['Coacher']['id']), array('style'=>'color:red'), __('Are you sure you want to delete # %s?', $coacher['Coacher']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<? echo $this->element("paginator"); ?>
	</div>
</div>
<div class="actions">
	<h3>פעולות</h3>
	<ul>
		<li><?php echo $this->Html->link('מאמן חדש', array('action' => 'add')); ?></li>
	</ul>
</div>
