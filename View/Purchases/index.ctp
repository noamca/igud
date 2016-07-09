<div class="purchaces index">
	<h2>רכישות מהאתר</h2>
	<table cellpadding="0" cellspacing="0">
    <? echo $this->Form->create('Purchase');
       echo $this->Form->hidden("layout");
    ?>
    <tr>
            <th colspan=20>
                <? echo $this->Form->input('date_start',array('rel'=>'date',"label"=>false,"class"=>"search","placeholder"=>"מתאריך"));?>
                <? echo $this->Form->input('date_end',array('rel'=>'date',"label"=>false,"class"=>"search","placeholder"=>"עד תאריך"));?>
                <div class="input text" style="float: left;">
                        <a href="#" target="_blank" class="btn btn_success_regular fa fa-print" onclick="event.preventDefault();print_index();">&nbsp;הדפס</a>
                        <button name="search" class="btn  btn-success btn_success_regular fa fa-search">&nbsp;חפש</button>
                </div>
            </th>
    </tr>
  
    
  
    
    <?php echo $this->form->end();?>    
    
	<tr>
			<th><?php echo $this->Paginator->sort('purchase_date','תאריך קנייה'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name','שם פרטי'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name','שם משפחה'); ?></th>
            <th><?php echo $this->Paginator->sort('email','אימייל'); ?></th>
			<th><?php echo $this->Paginator->sort('prd_desc','תאור הקנייה'); ?></th>
			<th><?php echo $this->Paginator->sort('total_amount','סך הקנייה'); ?></th>
			<th><?php echo $this->Paginator->sort('confirmation_number','קוד אישור עסקה'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','טלפון'); ?></th>
			<th><?php echo $this->Paginator->sort('campaign_id','טופס הרשמה'); ?></th>
			<th><?php echo $this->Paginator->sort('supplier','מסוף'); ?></th>
			<th class="actions">פעולות</th>
	</tr>
	<?php foreach ($Purchases as $purchase):
    
    $sum+= $purchase['Purchase']['total_amount'];
     ?>
	<tr>
		<td><?php echo h($purchase['Purchase']['purchase_date']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['last_name']); ?>&nbsp;</td>
        <td><?php echo h($purchase['Purchase']['email']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['prd_desc']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['total_amount']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['confirmation_number']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['phone']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['campaign_id']); ?>&nbsp;</td>
		<td><?php echo h($purchase['Purchase']['supplier']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('ערוך', array('action' => 'edit', $purchase['Purchase']['id'])); ?>
		</td>
	</tr>

    
    
    
<?php endforeach; ?>

    <tr>
            <td>סה"כ</td>
            <td colspan=4>&nbsp;</td>
            <td><?=$sum?></td>
            <td colspan=4>&nbsp;</td>
    </tr>
	</table>
	<? echo $this->element('paginator') ;?>
</div>
<div class="actions">
	<h3>פעולות</h3>
	<ul>
		<li><?php echo $this->Html->link('רכישה ידנית חדשה', array('action' => 'edit')); ?></li>
	</ul>
</div>



  <script>
    
    function print_index() {
        $("#PurchaseLayout").val("print");
        newDialog = window.open('about:blank', "_form");
        $("#PurchaseIndexForm").target='_form';
        $("#PurchaseIndexForm").submit();  
        return false;     
    }
  </script>
