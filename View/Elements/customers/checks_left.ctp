<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">שיקים שנותרו לפי  מוסדות </div>
       <div class="widget-body">
        <table>
       <?
       //print_r($customerChecksLeft); die();
       foreach ($checkTypes  as $id => $checkType)  {
            
           if(in_array ((string)$id,$customerChecksLeft['indicators'])) {$checked=" checked ";} else { $checked="";}
       
       ?>
       
          
          <tr>
            <td><input type="checkbox" name="checks_left_indicator[]" <?=$checked?> value="<?=$id?>" class="input" style="float: right;"></td>
            <td><?=$checkType?></td>
            <td><input type="text" name="checks_left_value[]<?=$id?>" value="<?=$customerChecksLeft['values'][$id]?>" class="input-mini" style="float: right;"> </td>
          </tr>
   <?   
       }
       ?>
       </table>
       </div>
     </div>    
 </div> 