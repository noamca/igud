
<div class="col-md-6">   
    <div class="widget-box rtl">
       <div class="widget-header">מסמכים שנתיים להגשה</div>
       <div class="widget-body">
       <?foreach ($yearlyReportsList as $id => $rep ) { ?>
          <div>
          <input name="yearly_reports_ids" type="checkbox" value="<?=$id?>">
          <label style="color: #333"><?=$rep?></label>
          </div>
      <?} ?>
       </div>
    </div>
</div>




