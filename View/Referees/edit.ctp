<div class="Athlets form">
                                  <?
                                      
                                      //print_r($refereesLevels); die();
                                  ?>


<?php echo $this->Form->create('Referee'); ?>
    <fieldset>
        <legend>כרטיס שופט <?=$data['first_name']." ".$data['last_name']?></legend>
    <?php
    
        echo $this->element("widget_header",array('header'=>'פרטים אישיים',"size"=>"6"));
    
   
        echo $this->Form->hidden('id');
            echo $this->Form->input('personal_identity_number',array('label'=>"תעודת זהות"));
            echo $this->Form->input('first_name',array('label'=>"שם פרטי"));
            echo $this->Form->input('last_name',array('label'=>"שם משפחה"));
            echo $this->Form->input('first_name_eng',array('label'=>"שם פרטי אנגלית"));
            echo $this->Form->input('last_name_eng',array('label'=>"שם משפחה אנגלית"));
            echo $this->Form->input('father_name',array('label'=>"שם האב"));
            echo $this->Form->input('born_date',array('label'=>"תאריך לידה",'type'=>'text'));
            echo $this->Form->input('degrees',array('label'=>"דרגה בצבא",'options'=>$army));
            echo $this->Form->input('immigration_date',array('label'=>"תאריך עלייה",'type'=>'text'));
            echo $this->Form->input('gender',array('label'=>"מין"));
        echo $this->element("widget_footer");
        
        echo $this->element("widget_header",array('header'=>'פרטים נוספים','size'=>'6'));
            echo $this->Form->input('passport_number',array('label'=>"מספר דרכון"));
            echo $this->Form->input('passport_expired',array('label'=>"תוקף דרכון",'type'=>'text'));
            echo $this->Form->input('family_status_id',array('label'=>"מצב משפחתי",'options'=>$familyStatuses));
            echo $this->Form->input('registarion_date',array('label'=>"תאריך רישום",'type'=>'text','disabled'=>true));
            echo $this->Form->input('is_active',array("type"=>"checkbox",'label'=>'האם פעיל?','class'=>"ace ace-switch",'style'=>'margin-right: 250px;'));
            echo $this->Form->input('email',array('label'=>"אימייל"));
            echo $this->Form->input('tax_deducation_percent',array('label'=>"% ניכוי מס"));
            echo $this->Form->input('level',array('label'=>'דרגה','options'=>$refereesLevels));
            echo $this->Form->input('job_title',array('label'=>'תפקיד','options'=>$RefereersJobs));
            echo $this->Form->input('traffic_payment',array('label'=>'נסיעות'));
            
            
        echo $this->element("widget_footer");
        
        
        
        
        
        
        
        
        echo $this->element("widget_header",array('header'=>'תמונה','size'=>'6'));
        ?>
        <span class="profile-picture" style="width: 150px;">
           <img id="avatar" class="editable img-responsive editable-click editable-empty"  src="/igud/uploads/athlets/images/1.png"></img>
           <input type="file" name="myfile" id="my-file-input"  style="width: 140px;" />
        </span>
 
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
          <a href="#remark" data-toggle="tab">הערות</a>
       </li> 
      <li> 
          <a href="#competitions" data-toggle="tab">תחרויות</a>
       </li>  
     <li>
          <a href="#studies" data-toggle="tab">השתלמויות</a>
       </li>   
              
     </ul>

     <div class="tab-content">
     
     
       <div class="tab-pane in active" id="accounting">
        <?echo $this->element("referee_payments");?>
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
       
      <div class="tab-pane" id="competitions">
       </div>  
       

      <div class="tab-pane" id="studies">
         <?echo $this->element("studies");?>
       </div>                         

     </div>

    </div>
</div>




<div class="actions">
    <h3>פעולות</h3>
    <ul>
        <li><?php echo $this->Form->postLink('מחק', array('action' => 'delete', $this->Form->value('Referee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Referee.id'))); ?></li>
        <li><?php echo $this->Html->link('חזרה לרשימת שופטים', array('action' => 'index')); ?></li>
    </ul>
</div>




