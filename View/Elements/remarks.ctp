<div class="remarks index">
	<h2>הערות</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('date','תאריך'); ?></th>
			<th><?php echo $this->Paginator->sort('description','הערה'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
    
    <? //print_r($this); die(); ?>
    
    <? //echo $this->saysome(); ?>
    
	<?php foreach ($remarks as $remark): 
          $a_date = new DateTime($remark['date']);
          $a_date_formatted = $a_date->format('d/m/Y');
            
    ?>
    <tr>
        <td><?php echo h($a_date_formatted); ?>&nbsp;</td>
        <td><?php echo h($remark['description']); ?>&nbsp;</td>
        <td class="actions">
            <a href="javascript:void(0)" onclick="callAjax('remark','ajaxEdit',<?=$remark['id'];?>) ">הצג</a>
            <?php echo $this->Form->postLink('מחק', array('action' => 'delete', 'controller'=>'Remark', $remark['id']), null, __('Are you sure you want to delete # %s?', $remark['Remark']['id'])); ?>
        </td>
    </tr>    
  
<?php endforeach; ?>

  

     <tr>
        <td> <? echo $this->Form->input('new_date',array('label'=>false,'rel'=>'date','value'=>date('d/m/Y'),'id'=>'new_date'));?>&nbsp;</td>
        <td><? echo $this->Form->input('new_description',array('label'=>false,'id'=>'new_description'));?>&nbsp;</td>
        <td class="actions">
            <a href="javascript:void(0)" onclick="callAjax('remark','ajaxAdd',0,[{ name: 'new_date', value: $('#new_date').val()},{ name: 'new_description', value: $('#new_description').val()},{name: 'entity_type',value:'<?=$entity_type?>'} ,{name:'entity_id',value: '<?=$entity_id?>'} ]) ">הוסף</a>
        </td>
    </tr>
    
	</table>
	</div>

