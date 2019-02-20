<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body change-task-image">
         <img src="" alt="" style = "width:220px;height:160px">
     <form action="/change-image" method = "POST" enctype="multipart/form-data">       
        <br>
        <input type="file" name = "img_change" class = "form-control">
        <input type="hidden" name = "name_id">
        <button type="submit" class="btn btn-primary" name = "upload">Save Image</button>
     </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>


