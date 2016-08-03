<div class="competitionsCandidates index">
	<h2>מתחרים</h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
	<th><?php echo $this->Paginator->sort('yearly_chest_number','מספר חזה'); ?></th>
			<th><?php echo $this->Paginator->sort('profession_id','מקצוע'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($competition['CompetitionsCandidates'] as $competitionsCandidate): ?>
	<tr>
		<td><?php echo h($competitionsCandidate['identity_number']); ?>&nbsp;</td>
		<td><?php echo h($competitionsCandidate['profession_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $competitionsCandidate['CompetitionsCandidate']['id']), null, __('Are you sure you want to delete # %s?', $competitionsCandidate['CompetitionsCandidate']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	
    
    <form id="newCandidate">
    <? echo $this->Form->hidden('competition_id',array('value'=>$id));?>
    <? echo $this->Form->hidden('action',array('value'=>"competitionAddCandidate"));?>
    
    <tr>
        <td ><a href="javascript:void(0)" name="ajaxAddCandidate" id="btnAjaxAddCandidate" >הוסף</a></td>   
        <td><? echo $this->Form->input('athlet_id');?></td>
        <td><? echo $this->Form->input('profession_id');?></td>
    </tr>
    </form>
     </table>
</div>
