<div class="competitionsProfessions index">
 <form id="newProfession">
     <? echo $this->Form->hidden('competition_id',array('value'=>$id));?>
     <? echo $this->Form->hidden('action',array('value'=>"competitionAddProfession"));?>
  
	<h2>מקצועות התחרות</h2>
    
    
	<table cellpadding="0" cellspacing="0">
	<tr>
            <th class="actions"></th>
			<th><?php echo $this->Paginator->sort('profession_id','מקצוע'); ?></th>
			<th><?php echo $this->Paginator->sort('max_athletes_per_association','מקס ספורטאים לאגודה'); ?></th>
			<th><?php echo $this->Paginator->sort('ages_from','מגיל'); ?></th>
			<th><?php echo $this->Paginator->sort('ages_to','יד גיל'); ?></th>
			<th><?php echo $this->Paginator->sort('genders_ids'); ?></th>
			<th><?php echo $this->Paginator->sort('start_hour','שעת התחלה גברים'); ?></th>
			<th><?php echo $this->Paginator->sort('end_hour','שעת התחלה נשים'); ?></th>
			<th><?php echo $this->Paginator->sort('minimum_attends','מינימום משתתפים'); ?></th>
			
	</tr>
	<?php foreach ($competition['CompetitionsProfessions'] as $competitionsProfession): ?>
	<tr>
        <td class="actions">
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competitionsProfession['id'])); ?>
        </td>

		<td><?php echo h($competitionsProfession['profession_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['max_athletes_per_association']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['ages_from']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['ages_to']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['genders_ids']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['start_hour']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['end_hour']); ?>&nbsp;</td>
		<td><?php echo h($competitionsProfession['minimum_attends']); ?>&nbsp;</td>
	</tr>
<?php endforeach; ?>

   
  <tr>
        <td ><a href="javascript:void(0)" name="ajaxAddProfession" id="btnAjaxAddProfession" >הוסף</a></td>   
        <td><? echo $this->Form->input('profession_id',array("label"=>false));?></td>
        <td><? echo $this->Form->input('max_athletes_per_association',array("label"=>false,"style"=>"width:30px"));?></td>
        <td><? echo $this->Form->input('ages_from',array("label"=>false,"style"=>"width:30px"));?></td>
        <td><? echo $this->Form->input('ages_to',array("label"=>false,"style"=>"width:30px"));?></td>
        <td><? echo $this->Form->input('genders_ids',array("label"=>false,"style"=>"width:60px"));?></td>
        <td><? echo $this->Form->input('start_hour',array("label"=>false,"style"=>"width:60px"));?></td>
        <td><? echo $this->Form->input('end_hour',array("label"=>false,"style"=>"width:60px"));?></td>
         <td><? echo $this->Form->input('minimum_attends',array("label"=>false,"style"=>"width:60px"));?></td>
        
     
  
    </tr>
    


	</table>
    
    </form>
</div>


