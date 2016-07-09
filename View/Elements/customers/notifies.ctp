 
 
<?
$customerNotifies = json_decode($customer["Customer"]["notifies_ids"]);
                 
?>    
<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">צורות שליחת הודעות ללקוח</div>
       <div class="widget-body">
       <select multiple name="notifies_ids[]" class="chosen-select  tag-input-style rtl" id="form-field-select-4" data-placeholder="בחר צורות" style="display: none;">
           <?foreach($notifiesTypes as $nid => $notify) {
                 if(in_array($notify,$customerNotifies)){ $selected="selected";} else {$selected="";}
           ?>
              <option <?=$selected?> value="<?=$notify?>"><?=$notify?></option>
           <?}?>
        </select>   
       </div>
       
       
     </div>    
 </div> 
    

 
    

                                         

    
