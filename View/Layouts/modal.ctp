  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" style="width: 150%; height: 470px;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:blue;"><?=$modalHeader?></h4>
        </div>
        <div class="modal-body" id="app_modal_body">

         <? echo $this->fetch("content");?>
        </div>
    
      </div>
    </div>
  

  
  