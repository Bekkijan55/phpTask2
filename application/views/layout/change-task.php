<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Task</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body change-form">
      <form action="/change-task" method="POST" enctype = "multipart/form-data" >
        <label for="name">Name</label>
        <input type="text" name = "change_task_name" class="form-control">
        <label for="email">Email</label>
        <input type="text" name = "change_task_email" class="form-control">
        <label for="task">Task</label>
        <textarea class="form-control" placeholder="Enter Your Task" name = "change_task_text"></textarea>
        <!-- <img src="" alt="" style = "width:220px;height:160px;">
        <label for="image">Upload Your Image</label>
        <input type="file" name = "file_img" class="form-control"> -->
        <input type="hidden" class = "form-control" name = "change_id">

        <br>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary change-task-data" type="submit" name="upload">Change Task</button>
      </div>
    </form>
      </div>
      
    </div>
  </div>
</div>