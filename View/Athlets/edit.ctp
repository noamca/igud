<div class="Athlets form">
<?php echo $this->Form->create('Athlet'); ?> 
	<fieldset>
		<legend>כרטיס ספורטאי <?=$data['first_name']." ".$data['last_name']?></legend>
	<?php
    
        echo $this->element("widget_header",array('header'=>'פרטים אישיים',"size"=>"6"));
    
   
        echo $this->Form->hidden('id');
            
            echo $this->Form->input('yearly_chest_number',array('label'=>"מספר חזה שנתי",'disabled'=>'true'));
            echo $this->Form->input('personal_identity_number',array('label'=>"תעודת זהות",'type'=>'text'));
		    echo $this->Form->input('first_name',array('label'=>"שם פרטי"));
		    echo $this->Form->input('last_name',array('label'=>"שם משפחה"));
		    echo $this->Form->input('first_name_eng',array('label'=>"שם פרטי אנגלית"));
		    echo $this->Form->input('last_name_eng',array('label'=>"שם משפחה אנגלית"));
		    echo $this->Form->input('father_name',array('label'=>"שם האב"));
		    echo $this->Form->input('born_date',array('label'=>"תאריך לידה",'type'=>'text'));
		    echo $this->Form->input('team_id',array('label'=>"קבוצה"));
		    echo $this->Form->input('degrees',array('label'=>"דרגה בצבא",'options'=>$army));
            echo $this->Form->input('immigration_date',array('label'=>"תאריך עלייה",'type'=>'text'));
            echo $this->Form->input('gender',array('label'=>"מין"));
            echo $this->Form->input('trainer',array('label'=>"שם"));
            echo $this->Form->input('age_group_id',array('label'=>"קבוצה בנבחרת"));
            
        
        echo $this->element("widget_footer");
        
        
        echo $this->element("widget_header",array('header'=>'פרטים נוספים','size'=>'6'));
            echo $this->Form->input('association_id',array('label'=>"שייך לאגודה"));
		    echo $this->Form->input('static_chest_number',array('label'=>"מס חזה קבוע"));
		    echo $this->Form->input('health_organization_id',array('label'=>"קופת חולים",'options'=>$healthAssociations));
		    echo $this->Form->input('passport_number',array('label'=>"מספר דרכון"));
		    echo $this->Form->input('passport_expired',array('label'=>"תוקף דרכון",'type'=>'text'));
		    echo $this->Form->input('family_status_id',array('label'=>"מצב משפחתי",'options'=>$familyStatuses));
		    echo $this->Form->input('registarion_date',array('label'=>"תאריך רישום",'type'=>'text','disabled'=>true));
		    echo $this->Form->input('is_active',array("type"=>"checkbox",'label'=>'האם פעיל?','class'=>"ace ace-switch",'style'=>'margin-right: 250px;'));
		    echo $this->Form->input('email',array('label'=>"אימייל"));
        echo $this->element("widget_footer");
        
        echo $this->element("widget_header",array('header'=>'תמונה','size'=>'6'));
        ?>
        <span class="profile-picture" style="width: 150px;">
           <img id="avatar" class="editable img-responsive editable-click editable-empty"  src="/igud/uploads/athlets/images/1.png"></img>
           <input type="file" name="myfile" id="my-file-input"  style="width: 140px;" />
        </span>
        <div style="float: left;">
            <span class="btn btn-app btn-sm btn-yellow no-hover">
                <span class="line-height-1 bigger-170"> 10:45 </span>

                <br>
                <span class="line-height-1 smaller-90"> הישג השנה </span>
            </span>
            <span class="btn btn-app btn-sm btn-success no-hover">
                <span class="line-height-1 bigger-170"> פעיל </span>

                <br>
                <span class="line-height-1 smaller-90">&nbsp;</span>
            </span>
        </div>
 
	<?  echo $this->element("widget_footer"); ?>
    
    
    
	</fieldset>
<?php echo $this->Form->end('עדכן'); ?>
</div>

<div class="col-md-12"> 

    <div class="tabbable">

     <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#accounting" data-toggle="tab">חשבון</a>
       </li>
       <li>
          <a href="#sizes" data-toggle="tab">מידות</a>
       </li>
     <li>
          <a href="#remark" data-toggle="tab">הערות</a>
       </li> 
       
      <li>
          <a href="#vacations" data-toggle="tab">חופשות</a>
       </li>  
     <li>
          <a href="#profile" data-toggle="tab">תחרויות</a>
       </li>  
     <li>
          <a href="#profile" data-toggle="tab">תוצאות</a>
       </li>   
    <li>
          <a href="#medical_tests" data-toggle="tab">אישורים רפואיים</a>
       </li>  
    <li>
          <a href="#chest_numbers" data-toggle="tab">מספרי חזה</a>
       </li>                                          
    <li>
          <a href="#addresses" data-toggle="tab">כתובות</a>
       </li>                                          
              
     </ul>

     <div class="tab-content">
     
     
       <div class="tab-pane in active" id="accounting">
        <?echo $this->element("accounting");?>
       </div>
       
       <div class="tab-pane" id="sizes">
       <?
        echo $this->element("widget_header",array('header'=>'מידות','size'=>'6'));
        echo $this->Form->input('sizes',array('label'=>"מידות"));
        echo $this->Form->input('height',array('label'=>"גובה"));
        echo $this->Form->input('height_date',array('label'=>"תאריך מדידת גובה אחרון",'type'=>'text'));
        echo $this->Form->input('weight',array('label'=>"משקל"));
        echo $this->Form->input('weight_date',array('label'=>"תאריך מדידת משקל אחרון",'type'=>'text'));
        echo $this->Form->input('army_details',array('label'=>"פרטים צבאיים"));
        echo $this->element("widget_footer");
        ?>
       </div>

       
       <div class="tab-pane" id="remark">
         <?echo $this->element("remarks");?>
       </div>
       
      <div class="tab-pane" id="vacations">
         <?echo $this->element("vacations");?>
       </div>  
       
      <div class="tab-pane" id="medical_tests">
         <?echo $this->element("medical_tests");?>
       </div> 

      <div class="tab-pane" id="chest_numbers">
         <?echo $this->element("chest_numbers");?>
       </div>                         

      <div class="tab-pane" id="addresses">
         <?echo $this->element("addresses");?>
       </div>                         


       
     </div>

</div>





<div class="actions">
	<h3>פעולות</h3>
	<ul>

		<li><?php echo $this->Form->postLink('מחק', array('action' => 'delete', $this->Form->value('Athlete.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Athlete.id'))); ?></li>
		<li><?php echo $this->Html->link('חזרה לרשימת ספורטאים', array('action' => 'index')); ?></li>
	</ul>
</div>




