<div class="Athlets index">
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('personal_identity_number','תעודת זהות'); ?></th>
            <th><?php echo $this->Paginator->sort('yearly_chest_number','מס חזה שנתי'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name','שם פרטי'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name','שם משפחה'); ?></th>
            <th><?php echo $this->Paginator->sort('first_name_eng','שם פרטי באנגלית'); ?></th>
            <th><?php echo $this->Paginator->sort('last_name_eng','שם משפחה באנגלית'); ?></th>
            <th><?php echo $this->Paginator->sort('born_date','תאריך לידה'); ?></th>
            <th><?php echo $this->Paginator->sort('is_active','פעיל'); ?></th>
            <th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
            <th><?php echo $this->Paginator->sort('gender','מין'); ?></th>
            <th><?php echo $this->Paginator->sort('image','תמונה'); ?></th>
            <th class="actions">פעולות</th>
    </tr>
    <?php foreach ($Athlets as $Athlet): 
    
           $birth_date = new DateTime($Athlet['born_date']); 
           $birth_date_formatted = $birth_date->format('d/m/Y');
    
    ?>
    <tr>
        <td><?php echo h($Athlet['personal_identity_number']); ?>&nbsp;</td>
        <td><?php echo h($Athlet['yearly_chest_number']); ?>&nbsp;</td>
        
        <td><?php echo h($Athlet['first_name']); ?>&nbsp;</td>
        <td><?php echo h($Athlet['last_name']); ?>&nbsp;</td>
        <td><?php echo h($Athlet['first_name_eng']); ?>&nbsp;</td>
        <td><?php echo h($Athlet['last_name_eng']); ?>&nbsp;</td>
      <td><?=$birth_date_formatted?>&nbsp;</td>
        <td><?php  if($Athlet['Athlet']['is_active']=='1') echo "כן"; ?>&nbsp;</td>
        <td><?php echo h($Athlet['Athlet']['email']); ?>&nbsp;</td>
        <td><?php if($Athlet['Athlet']['gender']=='0' || $Athlet['Athlet']['gender']=='זכר' ) echo "זכר"; else echo "נקבה"; ?>&nbsp;</td>
        <? $a = WWW_ROOT . DS . "uploads". DS ."athlets". DS ."images". DS . $Athlet['Athlet']['id'].".png";  ?>
        <td><? if(file_exists($a)) {?><img src='/igud/uploads/athlets/images/<?=$Athlet['Athlet']['id']?>.png' width="50px"><? } ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link("כרטיס", array('action' => 'edit', $Athlet['Athlet']['personal_identity_number']),array('style'=>'color:green')); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>

</div>

