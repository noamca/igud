<?
    
    $reporting_data = json_decode($customer["Customer"]['reportings_data'],true);
   //print_r($reporting_data); die();
?>

<script>



</script>


<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">סוגי דיווח ללקוח זה</div>
       <div class="widget-body">
        <table>
       <?
       //print_r($customerChecksLeft); die();
       $i=-1;
       foreach ($authorities  as $aid => $authority)  {
            
          // echo "aid=$aid";
           $a = in_array((int)$aid,$reporting_data[0]['autorities']); 
         // echo "a=$a,$aid";
           if($a) {$checked=" checked "; $i++; $disabled="";} else { $checked="";$disabled="disabled";}
          //echo "<br>";
       ?>
       
          
          <tr>
            <td><input type="checkbox" name="authority[]" <?=$checked?> value="<?=$aid?>"  style="float: right;"></td>
            <td><?=$authority?></td>
            <td>
                <select <?=$disabled?> name="season_for_<?=$aid?>" class="input" style="float: right;">
                <?foreach ($seasons as $sid => $season) {
                    if($sid == $reporting_data[0]['seasons'][$i] ) {$selected = " selected" ;} else {$selected="";}
                    ?>
                   <option <?=$selected?> value="<?=$sid?>"><?=$season?></option>
                <?}?>
                </select>
            
             </td>
             <td style="width: 360px;">
                <select multiple name="contacts_notifies_ids[]" class="chosen-select  tag-input-style rtl" id="contacts_notifies_ids" data-placeholder="בחר אנשי קשר" style="display: none; width:180px; direction: rtl;">
               <?foreach ($contacts as $id =>$contact) {
                   echo "<option value='".$contact['contact_name']."'>".$contact['contact_name']."</option>";
               }
               ?>
                </select>                
             
             </td>
          </tr>
   <?   
       }
       ?>
       </table>
       </div>
     </div>    
 </div> 