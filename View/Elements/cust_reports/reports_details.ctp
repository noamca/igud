<?php
  
?>
<div id="customer_reports_details">
<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">פירוט תשלומים</div>
       <div class="widget-body">

       <table style="width: 90%;">
          <tr>
              <th>רשות</th>
              <th>סכום</th>
              <th>שולם באמצעות</th>
              <th>פעולות</th>
         </tr>       
       <?foreach ($reports_details as $id => $report ) { ?>
       <tr>
            <td><?=$authorities[$report['authority_id']]?></td>
            <td><?=$report['amount']?></td>
            <td><?=$report['payed_by']?></td>
          
            <td><input type="button" name="delContact" value="מחק" onclick="delete_report(<?=$id?>)"></td>
       </tr>
 
       <?} ?>
         <tr>
              <td>
                <select id="authority_id">
                <? foreach($authorities as $id=>$authority) { ?>
                 <option value="<?=$id?>"><?=$authority?></option>       
                <?} ?>
                </select>
              </td>
              <td><input id="amount" type="text"> </td>
              <td><input id="payed_by" type="text"> </td>
              <td><input type="button" name="addContact" value="הוסף" onclick="add_report()"></td>
         </tr>         
      </table>       
       
       
       


       </div>
    </div>
</div>
</div>


