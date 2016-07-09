<div class="associations form">

<? echo $this->element("widget_header",array('header'=>'פרטי האגודה','size'=>'6')); ?>

<?php echo $this->Form->create('Association'); ?>
	
		
	<?php          
		echo $this->Form->input('id',array("type"=>"hidden"));
        echo $this->Form->input('name',array("label"=>"שם האגודה"));
		echo $this->Form->input('name_eng',array("label"=>"שם לועזי"));
		echo $this->Form->input('internal_number',array("label"=>"קוד אגודה להסבה"));
		echo $this->Form->input('red_board');
        echo $this->Form->input('association_type',array("label"=>"סוג אגודה"));
        echo $this->Form->input('amuta_number',array("label"=>"מספר עמותה"));
        echo $this->Form->input('city_yn',array("label"=>"האם עיר"));
        echo $this->Form->input('username',array("label"=>"שם משתמש"));
        echo $this->Form->input('password',array("label"=>"סיסמה"));
        echo $this->Form->input('short_name',array("label"=>"שם מקוצר"));
        echo $this->Form->input('tv_display_name',array("label"=>"שם לטלויזיה"));
        echo $this->Form->input('sub_association_yn',array("label"=>"האם תת אגודה?",'type'=>'checkbox'));
        $associationsList[0] = 'בחר';
        echo $this->Form->input('parent_association_id',array("label"=>"אגודת אב",'options'=>$associationsList));
        
        
        
        
        
	?>
	

<? echo $this->element("widget_footer"); ?>
<? echo $this->element("widget_header",array('header'=>'ליגות','size'=>'6')); ?>

     
        <div class="input text" id="leage1div"><label for="AssociationLeage1">גברים</label>
            <select name="data[Association][leage1]" maxlength="30"   id="leage1">
                 <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['m1']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>
            </select>    
        </div>
        
        
        
         <div class="input text" id="leage2div"><label for="AssociationLeage2">נוער</label>
            <select name="data[Association][leage2]" maxlength="30"   id="leage2">
                 <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['m2']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>
                </select>    
        </div>
        <div class="input text" id="leage3div"><label for="AssociationLeage3">קדטים</label>
            <select name="data[Association][leage3]" maxlength="30"   id="leage3">
                <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['m3']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>
               </select>    
        </div>    
        <div class="input text" id="leage4div"><label for="AssociationLeage4">ילדים</label>
            <select name="data[Association][leage4]" maxlength="30"   id="leage4">
               <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['m4']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>            </select>    
        </div>  


       <div class="input text" id="leage5div"><label for="AssociationLeage5">נשים</label>
            <select name="data[Association][leage5]" maxlength="30"   id="leage5">
               <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['w1']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>            </select>    
        </div>            
        
       <div class="input text" id="leage6div"><label for="AssociationLeage6">נערות</label>
            <select name="data[Association][leage6]" maxlength="30"   id="leage6">
               <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['w2']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                 ?>            </select>    
        </div>            
       <div class="input text" id="leage7div"><label for="AssociationLeage7">קדטיות</label>
            <select name="data[Association][leage7]" maxlength="30"   id="leage7">
               <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['w3']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                     
                 ?>            </select>    
        </div>            
       <div class="input text" id="leage8div"><label for="AssociationLeage8">ילדות</label>
            <select name="data[Association][leage8]" maxlength="30"   id="leage8">
               <?
                 foreach($leages as $id => $leage) {
                     if($leage == $currentLeages['AssociationsHistory']['w4']) {$selected="selected";} else {$selected="";}
                     echo "<option $selected value=\"$leage\">$leage</option>";
                 }
                 ?>            </select>    
        </div>                                    

                  
       
       
 <? echo $this->element("widget_footer"); ?>
<? echo $this->element("widget_header",array('header'=>'הנהלה','size'=>'6')); ?>
       
       <?echo $this->Form->input('manager_name',array("label"=>"שם האגודה"));?>
       <?echo $this->Form->input('manager_email',array("label"=>"אימייל"));?>
       <?echo $this->Form->input('manager_city',array("label"=>"עיר"));?>
       <?echo $this->Form->input('manager_address',array("label"=>"כתובת ראשית"));?>
       <?echo $this->Form->input('manager_block_no',array("label"=>"מס בית"));?>
       <?echo $this->Form->input('manager_appartment_no',array("label"=>"מס דירה"));?>
       <?echo $this->Form->input('manager_zip',array("label"=>"מיקוד"));?>
       <?echo $this->Form->input('manager_phone',array("label"=>"טלפון קווי"));?>
       <?echo $this->Form->input('manager_mobile',array("label"=>"סלולארי"));?>
       <?echo $this->Form->input('manager_fax',array("label"=>"פקס"));?>
       
       <? echo $this->element("widget_footer"); ?>
       
       <?php echo $this->Form->end('עדכן אגודה'); ?>      

<div class="col-md-12"> 

    <div class="tabbable">

     <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#accounting" data-toggle="tab">חשבון</a>
       </li>
       <li>
          <a href="#athlets" data-toggle="tab">ספורטאים</a>
       </li>
       
      <li>
          <a href="#history" data-toggle="tab">הסטוריה</a>
       </li>

      <li>
          <a href="#remark" data-toggle="tab">הערות</a>
       </li> 
       
      <li>
          <a href="#profile" data-toggle="tab">אנשי מפתח</a>
       </li>             
              
     </ul>

     <div class="tab-content">
       <div class="tab-pane in active" id="accounting">
        <?echo $this->element("accounting");?>
       </div>
       <div class="tab-pane" id="athlets">
        <?echo $this->element("athlets");?>
       </div>

       <div class="tab-pane" id="history">
         <?echo $this->element("association_leages_history");?>
       </div>
       
       <div class="tab-pane" id="remark">
         <?echo $this->element("remarks");?>
       </div>
       
     </div>

    </div>
</div>






<div class="actions">
	<h3>פעולות</h3>
	<ul>

		<li><?php echo $this->Form->postLink("מחיקה", array('action' => 'delete', $this->Form->value('Association.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Association.id'))); ?></li>
</ul>
</div>

</div>



<?
    
 
    
?>