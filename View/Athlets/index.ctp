<div class="Athlets index">
	<h2>רשימת ספורטאים</h2>
	<table cellpadding="0" cellspacing="0">
    <? echo $this->Form->create('Athlet',array('action'=>'search'));?>
    <tr>
            <th colspan=20>
                <? echo $this->Form->input('Search.personal_identity_number',array("label"=>false,"class"=>"search","placeholder"=>"חפש לפי תז"));?>
                <? echo $this->Form->input('Search.names',array("label"=>false,"class"=>"search","placeholder"=>" חפש לפי שם פרטי או משפחה"));?>
                <? echo $this->Form->input('Search.chest_number',array("label"=>false,"class"=>"search","placeholder"=>"חפש לפי מספר חזה שנתי"));?>
                <div class="input text" style="float: left;"><button name="search" class="btn  btn-success btn_success_regular fa fa-search">&nbsp;חפש</button></div>
            </th>
    </tr>
    <?php echo $this->form->end();?>    
	<tr>
			<th><?php echo $this->Paginator->sort('personal_identity_number','תעודת זהות'); ?></th>
            <th><?php echo $this->Paginator->sort('yearly_chest_number','מס חזה שנתי'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name','שם פרטי'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name','שם משפחה'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name_eng','שם פרטי באנגלית'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name_eng','שם משפחה באנגלית'); ?></th>
	        <th><?php echo $this->Paginator->sort('association_id','אגודה'); ?></th>
			<th><?php echo $this->Paginator->sort('born_date','תאריך לידה'); ?></th>
			<th><?php echo $this->Paginator->sort('is_active','פעיל'); ?></th>
			<th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
            <th><?php echo $this->Paginator->sort('gender','מין'); ?></th>
			<th><?php echo $this->Paginator->sort('image','תמונה'); ?></th>
			
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($Athlets as $Athlet): 
    
           $birth_date = new DateTime($Athlet['Athlet']['born_date']); 
           $birth_date_formatted = $birth_date->format('d/m/Y');
    
    ?>
	<tr>
		<td><?php echo h($Athlet['Athlet']['personal_identity_number']); ?>&nbsp;</td>
        <td><?php echo h($Athlet['Athlet']['yearly_chest_number']); ?>&nbsp;</td>
        
		<td><?php echo h($Athlet['Athlet']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($Athlet['Athlet']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($Athlet['Athlet']['first_name_eng']); ?>&nbsp;</td>
		<td><?php echo h($Athlet['Athlet']['last_name_eng']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($Athlet['Association']['name'], array('controller' => 'associations', 'action' => 'edit', $Athlet['Association']['id'])); ?>
        </td>

                            
        
		<td><?=$birth_date_formatted?>&nbsp;</td>
		<td><?php  if($Athlet['Athlet']['is_active']=='1') echo "כן"; ?>&nbsp;</td>
		<td><?php echo h($Athlet['Athlet']['email']); ?>&nbsp;</td>
        <td><?php if($Athlet['Athlet']['gender']=='0' || $Athlet['Athlet']['gender']=='זכר' ) echo "זכר"; else echo "נקבה"; ?>&nbsp;</td>
        <? $a = WWW_ROOT . DS . "uploads". DS ."athlets". DS ."images". DS . $Athlet['Athlet']['id'].".png";  ?>
		<td><? if(file_exists($a)) {?><img src='/igud/uploads/athlets/images/<?=$Athlet['Athlet']['id']?>.png' width="50px"><? } ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link("ערוך", array('action' => 'edit', $Athlet['Athlet']['personal_identity_number']),array('style'=>'color:green')); ?>
			<?php echo $this->Form->postLink("מחק", array('action' => 'delete', $Athlet['Athlet']['personal_identity_number']),array('style'=>'color:red'), __('Are you sure you want to delete # %s?', $Athlet['Athlet']['personal_identity_number'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<?echo $this->element("paginator");?>
</div>

<div class="actions">
	
	<ul>
		<li><?php echo $this->Html->link("ספורטאי חדש", array('action' => 'edit')); ?></li>
	</ul>
</div>



<?php $this->paginator->options(array('url' => $this->passedArgs)); ?>
