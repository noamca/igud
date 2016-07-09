<div class="associations index">
	<h2>אגודות</h2>
	<table cellpadding="0" cellspacing="0">
    <? echo $this->Form->create('Association',array('action'=>'search'));?>
    <tr>
            <th colspan=20>
                <? echo $this->Form->input('Search.names',array("label"=>false,"class"=>"search","placeholder"=>"חפש לפי שם או חלק ממנו"));?>
                <div class="input text" style="float: left;"><button name="search" class="btn  btn-success btn_success_regular fa fa-search">&nbsp;חפש</button></div>
            </th>
    </tr>
    <?php echo $this->form->end();?>    
    
	<tr>
			<th><?php echo $this->Paginator->sort('id',"קוד"); ?></th>
			<th><?php echo $this->Paginator->sort('name',"שם האגודה"); ?></th>
			<th><?php echo $this->Paginator->sort('name_eng',"שם לועזי"); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($associations as $association): ?>
	<tr>
		<td><?php echo h($association['Association']['id']); ?>&nbsp;</td>
		<td><?php echo h($association['Association']['name']); ?>&nbsp;</td>
		<td><?php echo h($association['Association']['name_eng']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link("ערוך", array('action' => 'edit', $association['Association']['id'])); ?>
			<?php echo $this->Form->postLink("מחק", array('action' => 'delete', $association['Association']['id']), null, __('Are you sure you want to delete # %s?', $association['Association']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>

    
     <? echo $this->element("paginator");  ?>
    
	</div>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link("אגודה חדשה", array('action' => 'add')); ?></li>
	</ul>
</div>
