<div class="referees index">
	<h2>רשימת שופטים</h2>
	<table cellpadding="0" cellspacing="0">
    <? echo $this->Form->create('Referee',array('action'=>'search'));?>
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
			<th><?php echo $this->Paginator->sort('is_active','פעיל'); ?></th>
			<th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($referees as $referee): ?>
	<tr>
		<td><?php echo h($referee['Referee']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['first_name_eng']); ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['last_name_eng']); ?>&nbsp;</td>
		<td><?php if($referee['Referee']['is_active']=='1') echo "כן"; ?>&nbsp;</td>
		<td><?php echo h($referee['Referee']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('הצג', array('action' => 'edit', $referee['Referee']['personal_identity_number'],array('style'=>'color:green'))); ?>
			<?php echo $this->Form->postLink('מחק', array('action' => 'delete', $referee['Referee']['personal_identity_number']), array('style'=>'color:red'), __('Are you sure you want to delete # %s?', $referee['Referee']['personal_identity_number'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
<?
              echo $this->element("paginator");?>
          </div>
</div>
<div class="actions">
	<h3>פעולות</h3>
	<ul>
		<li><?php echo $this->Html->link('שופט חדש', array('action' => 'edit','id'=>9999)); ?></li>
	</ul>
</div>
