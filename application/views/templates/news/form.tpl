<form action="/news/admin" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label>Category
            <select class="form-control" name="cat_id">
                 {foreach item=categ from=$data.category}
                    <option value="{$categ.id}">{$categ.name}</option>
                {/foreach}
            </select> 
        </label>
    </div>
  <div class="form-group">
    <label>Title</label>
    <input id="news-title" name="title" type="input" class="form-control" value="{$data.news.title}">
  </div>
<div class="form-group">
    <label>Slug</label>
    <input id="news-slug" name="slug" type="input" class="form-control" value="{$data.news.slug}">
  </div>
  <div class="form-group">
    <label>Text</label>
    <textarea name="text" class="form-control" rows="3">{$data.news.title}</textarea>
  </div>
  <div class="form-group">
    <label>Thumb</label>
    <input name="thumb" type="file" id="exampleInputFile">
    <p class="help-block">Put thumb.</p>
    {if $data.news.thumb}
        <img class="col-md-2" src="/assets/img/{$data.news.thumb}" alt="thumb">
    {else}
        <img class="col-md-2" src="/assets/img/noFile.png" alt="thumb">
    {/if}
  </div>
 <input name="id" type="hidden" class="form-control" value="{$data.news.id}">
  <button type="submit" class="btn btn-default">Submit</button>
</form>