<div class="purchaces form">
<?php echo $this->Form->create('Purchase'); ?>
	<fieldset>
		<legend>רכישת כרטיסים</legend>
	<?php
		echo $this->Form->input('purchase_date',array('label'=>'תאריך הרכישה','type'=>'text','rel'=>'date'));
		echo $this->Form->input('first_name',array('label'=>'שם פרטי'));
		echo $this->Form->input('last_name',array('label'=>'שם משפחה'));
		echo $this->Form->input('prd_desc',array('label'=>'תאור המוצר','style'=>'width:400px;'));
		echo $this->Form->input('total_amount',array('label'=>'סהכ קנייה'));
		echo $this->Form->input('confirmation_number',array('label'=>'קוד אישור טרנזילה'));
		echo $this->Form->input('identity',array('label'=>'תז'));
		echo $this->Form->input('phone',array('label'=>'טלפון'));
		echo $this->Form->hidden('campaign_id');
		echo $this->Form->input('supplier',array('label'=>'מסוף'));
	?>
	</fieldset>
<?php echo $this->Form->end('שמור'); ?>
</div>
<div class="actions">
	<ul>

		<li><?php echo $this->Html->link('חזרה לרשימה', array('action' => 'index')); ?></li>
	</ul>
</div>
