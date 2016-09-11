<div class="row">
    <div class="col-md-12"><h2>{$data.news.title}</h2></div>
</div>


<div class="row">
  <div class="col-md-12">
{if $data.news.thumb}
<img class=" view" src="/assets/img/{$data.news.thumb}" alt="thumb">
{else}
<img class=" view" src="/assets/img/noFile.png" alt="thumb">
{/if}
      {$data.news.text}</div>
</div>

<div class="row">
  <div class="col-md-12">Запись созданна: {$data.news.create_date}</div>
</div>

<div class="row">
  <div class="col-md-12">Запись обновленна: {$data.news.update_date}</div>
</div>
 
