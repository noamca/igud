<?php
  
?>
<div id="customer_reports_details">
<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">פירוט תשלומים</div>
       <div class="widget-body">

       <table style="width: 100%;">
            
             
       <?
       foreach ($reports_details as $id => $report ) { 
           $reports_amounts = json_decode($report["report_amounts"],true);
           $confirmed_date = date_create($report["confirmed_date"]);
           $sent_date = date_create($report["sent_date"]);
                
           
           ?>  
           <tr>
            <th>תקופה</th>
            <th><?=$report["year"]?>/<?=$report["month"]?></th>
          </tr>
          <tr>    
            <th>חומר לדיווח</th>
            <th><?=date_format($sent_date, 'd/m/Y');?></th>
          </tr>
          <tr>    
            <th>אושר בתאריך</th>
            <th><?=date_format($confirmed_date, 'd/m/Y');?></th>
          </tr>
          <tr>    
            <th>פעולות</th>
            <th><input type="button" value="אשר תשלום" onclick="confirm_report(<?=$id?>)"></th>
           </tr>
               
           <?foreach ($reports_amounts as $id => $report_amount ) { ?>
           <tr>
                <td><?=$authorities[$report_amount['authority_id']]?></td>
                <td><?=$report_amount['amount']?> שח</td>
                <td><?=$report_amount['payed_by']?></td>
          </tr>
            <?} ?>
       <?} ?>
       
      </table>       
       
       
       


       </div>
    </div>
</div>
</div>


