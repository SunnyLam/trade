<form class="form-horizontal" role="form" action="{{ URL::route($action) }}" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title" class="col-sm-4 control-label"> 名 称 </label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="title" name="title" required >
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-4 control-label"> </label>
    <div class="col-sm-8">
      <div class="radio-inline">
        <label><input type="radio" name="optionsRadios" id="optionsRadios-share" value="share" checked> 可换物 </label>
      </div>
      <div class="radio-inline">
        <label><input type="radio" name="optionsRadios" id="optionsRadios-own" value="own"> 私藏货 </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-4 control-label"> 描 述 </label>
    <div class="col-sm-8">
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="image" class="col-sm-4 control-label"> 图 片 </label>
    <div class="col-sm-8">
      <input type="file" id="image" name="image">
    </div>
  </div>
  <div class="form-group">
    <label for="type" class="col-sm-4 control-label"> 类 别 </label>
    <div class="col-sm-8">
      <select id="type" name="type" class="form-control">
        <option> 阅读角落 </option>
        <option> 家居生活 </option>
        <option> 手作工坊 </option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-4 col-sm-7">
      <button type="submit" class="btn btn-success"> 新增 </button>
    </div>
    <div class="col-sm-1">
      <button type="submit" class="btn btn-default"> 取消 </button>
    </div>
  </div>
</form>
