<div class="competitions form">
<?php echo $this->Form->create('Competition'); ?>
	<fieldset>
		<legend>תחרות <?=$competition['Competition']['name']?></legend>



	<?php

		echo $this->element("widget_header",array('header'=>'פרטי התחרות',"size"=>"6"));
		echo $this->Form->hidden('id');
		echo $this->Form->input('name',array('label'=>"שם התחרות",'type'=>'text'));
		echo $this->Form->input('name_eng',array('label'=>"שם באנגלית",'type'=>'text'));
		echo $this->Form->input('date_start',array('label'=>"תאריך התחלת התחרות",'type'=>'text'));
		echo $this->Form->input('date_end',array('label'=>"תאריך סיום התחרות",'type'=>'text'));
		echo $this->Form->input('is_international',array("type"=>"checkbox",'label'=>'האם פעיל?','class'=>"ace ace-switch",'style'=>'margin-right: 250px;'));
		echo $this->Form->input('place',array('label'=>"מקום התחרות",'type'=>'text'));
		echo $this->Form->input('age_from',array('label'=>"מגיל",'type'=>'text'));
		echo $this->Form->input('age_to',array('label'=>"עד גיל",'type'=>'text'));
		echo $this->Form->input('gender',array('label'=>"מין",'type'=>'text'));
		echo $this->Form->input('is_api_open',array('label'=>"האם לפתוח תחרות לאינטרנט",'type'=>'checkbox'));
		echo $this->Form->input('Profession',array('label'=>"מקצועות"));

		echo $this->element("widget_footer");
        
        echo $this->element("widget_header",array('header'=>'משקלים ומידות',"size"=>"6"));
        
        
        echo $this->Form->input('baracade_height_men',array('label'=>"גובה משוכה גברים",'type'=>'text'));
        echo $this->Form->input('baracade_height_women',array('label'=>"גובה משוכה נשים",'type'=>'text'));
        
        echo $this->Form->input('highjump_height_men',array('label'=>"גובה התחלתי קפיצה לגובה גברים",'type'=>'text'));
        echo $this->Form->input('highjump_step_men',array('label'=>"גובה להוספה למקצה",'type'=>'text'));
        
        echo $this->Form->input('highjump_height_women',array('label'=>"גובה התחלתי קפיצה לגובה נשים",'type'=>'text'));
        echo $this->Form->input('highjump_step_women',array('label'=>"גובה להוספה למקצה",'type'=>'text'));
         
        echo $this->Form->input('hummer_height_men',array('label'=>"משקל פטיש גברים",'type'=>'text'));
        echo $this->Form->input('hummer_height_women',array('label'=>"משקל פטיש נשים",'type'=>'text'));
        
        echo $this->Form->input('discuss_height_men',array('label'=>"משקל דיסקוס גברים",'type'=>'text'));
        echo $this->Form->input('discuss_height_women',array('label'=>"משקל דיסקוס נשים",'type'=>'text'));

        echo $this->Form->input('ironball_height_men',array('label'=>"משקל הדיפת כדור ברזל גבים",'type'=>'text'));
        echo $this->Form->input('ironball_height_women',array('label'=>"משקל הדיפת כדור ברזל נשים",'type'=>'text'));
        
        echo $this->element("widget_footer");
        
        
        echo $this->element("widget_header",array('header'=>'משקלים ומידות',"size"=>"12"));
        
        echo $this->Form->input('wind_measure_yn',array('label'=>"מדידת רוח",'type'=>'CHECKBOX'));
        echo $this->Form->input('max_lanes',array('label'=>"מקסימום שבילים",'type'=>'text'));
        echo $this->Form->input('results_per_person_or_association',array('label'=>"תוצאה לאגודה",'type'=>'text'));
        echo $this->Form->input('two_on_lane_yn',array('label'=>"האם שביל ל-2 רצים",'type'=>'CHECKBOX'));
        echo $this->Form->input('minimum_attends',array('label'=>"מינימום נרשמים לאגודה",'type'=>'text'));
        
        echo $this->element("widget_footer");
        
        
        
        
        
        
        
	?>
	</fieldset>
<?php echo $this->Form->end('עדכן'); ?>
</div>


<div class="col-md-12"> 

    <div class="tabbable">

     <ul id="myTab" class="nav nav-tabs">
       <li class="active">
          <a href="#professions" data-toggle="tab">מקצועות</a>
       </li>
       <li>
          <a href="#candidates" data-toggle="tab">מתחרים</a>
       </li>

       <li>
          <a href="#referees" data-toggle="tab">שופטים</a>
       </li>
       <li>
          <a href="#heats" data-toggle="tab">מקצים ושבילים</a>
       </li>
      <li>
          <a href="#results" data-toggle="tab">תוצאות</a>
       </li>  
     </ul>
    </div> 

     <div class="tab-content">
     
   		
	 	<div class="tab-pane in active" id="professions">
	        	<?echo $this->element("competitions_professions");?>
	    </div>
     
	 	<div class="tab-pane" id="candidates">
	        	<?echo $this->element("competition_candidates");?>
	    </div>

       	<div class="tab-pane" id="referees">
        	<?echo $this->element("competition_referees");?>
       	</div>
     
       	<div class="tab-pane" id="heats">
         	<?echo $this->element("competitions_heats");?>
       	</div>
       
       
      <div class="tab-pane" id="results">
         <?echo $this->element("competition_results");?>
       </div> 


       
     </div>
     
     
     
     <script>

$("#btnAjaxAddProfession").click(function(event){
     // event.preventDefault();
      ajaxAction('newProfession','competitionAddProfession','professions');
});
$("#btnAjaxAddCandidate").click(function(event){
     // event.preventDefault();
      ajaxAction('newCandidate','competitionAddCandidate','candidates');
});

$("#btnAjaxAddReferee").click(function(event){
     // event.preventDefault();
      ajaxAction('newReferee','competitionAddReferee','referees');
});

</script>
    


