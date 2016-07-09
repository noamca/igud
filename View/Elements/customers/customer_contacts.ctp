<div id="customer_contacts">
<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">אנשי קשר</div>
       <div class="widget-body">
       <table style="width: 100%;">
          <tr>
              <th>שם מלא</th>
              <th>תפקיד</th>
              <th>טלפון</th>
              <th>אימייל</th>
              <th>פעולות</th>
         </tr>       
       <?foreach ($contacts as $id => $contact ) { ?>
       <tr>
            <td><?=$contact['contact_name']?></td>
            <td><?=$contact['contact_job']?></td>
            <td><?=$contact['contact_phone']?></td>
            <td><?=$contact['contact_email']?></td>
            <td><input type="button" name="delContact" value="מחק" onclick="delete_contact(<?=$id?>)"></td>
       </tr>
 
       <?} ?>
         <tr>
              <td><input id="contact_name" type="text"> </td>
              <td><input id="contact_job" type="text"> </td>
              <td><input id="contact_phone" type="text"> </td>
              <td><input id="contact_email" type="text"> </td>
              <td><input type="button" name="addContact" value="הוסף" onclick="add_contact()"></td>
         </tr>         
      </table>
       </div>
    </div>
</div>
</div>