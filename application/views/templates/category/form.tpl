<form action="/category/admin" enctype="multipart/form-data" method="post">

  <div class="form-group">
    <label>Name</label>
    <input  name="name" type="input" class="form-control" value="{$data.category.name}">
  </div>
 <input name="id" type="hidden" class="form-control" value="{$data.category.id}">
  <button type="submit" class="btn btn-default">Submit</button>
</form>