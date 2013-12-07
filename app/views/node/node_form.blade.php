<form class="form-horizontal" role="form" action="{{ URL::route($action) }}" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title" class="col-sm-4 control-label">Item Name</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" name="title" required >
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-4 control-label">Description</label>
    <div class="col-sm-8">
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="image" class="col-sm-4 control-label">Image</label>
    <div class="col-sm-8">
      <input type="file" id="image" name="image">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-8">
      <button type="submit" class="btn btn-default">Create</button>
    </div>
  </div>
</form>
