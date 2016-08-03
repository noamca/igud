<div class="competitionsReferees index">
	<h2>שופטים לתחרות</h2>
   <form id="newReferee">
   <? echo $this->Form->hidden('competition_id',array('value'=>$id));?>
   <? echo $this->Form->hidden('action',array('value'=>"competitionAddReferee"));?>

	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('referee_id','שופט'); ?></th>
			<th><?php echo $this->Paginator->sort('professsions_text','מקצועות'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
    
	<?php foreach ($competition['CompetitionsReferees'] as $competitionsReferee): ?>
	<tr>
		<td><?php echo h($competitionsReferee['referee_id']); ?>&nbsp;</td>
		<td><?php echo h($competitionsReferee['professsions_text']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $competitionsReferee['CompetitionsReferee']['id']), null, __('Are you sure you want to delete # %s?', $competitionsReferee['CompetitionsReferee']['id'])); ?>
		</td>
	</tr>
    <?php endforeach; ?>
  
    <tr>
        <td><a href="javascript:void(0)" id="btnAjaxAddReferee" >הוסף</a></td> 
        <td><? echo $this->Form->input('referee_id');?></td>
        <td><? echo $this->Form->input('professsions_text');?></td>
    </tr>
	</table>
    </form>
</div>



