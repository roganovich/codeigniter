<h1> {$data.title} </h1>

{if $data.news}
    <div class="row">
        {foreach item=item from=$data.news}
            <div class="col-xs-4 col-md-3 ">
                <div class="thumbnail news-item">
                    <div class="news-title">
                         <h4>{$item.name}</h4>
                        <a href="news/view/{$item.slug}">
                            {if $item.thumb}
                                <img src="/assets/img/{$item.thumb}" alt="thumb">
                            {else}
                                <img src="/assets/img/noFile.png" alt="thumb">
                            {/if}
                            <h3>{$item.title}</h3>
                        </a>
                    </div>
                    <div class="news-text">{$item.text}</div>
                    <div class="news-date">{$item.update_date}</div>
                </div>
            </div>
        {/foreach}
    </div>
{else}
    Hi, {$data.title}!
{/if}




<nav aria-label="Page navigation">
  <ul class="pagination">
        {if !$data.pagination.page}
            <li class="active">
        {else}
            <li>
        {/if}
          <a href="{$data.pagination.base_url}" aria-label="Previous">
            <span aria-hidden="true">1</span>
          </a>
      </li>
    {for $page=2 to $data.pagination.pages}
    {if $page ==$data.pagination.page}
        <li class="active">
        {else}
            <li>
        {/if}
      <a href="{$data.pagination.base_url}/index/{$page}" aria-label="Previous">
        <span aria-hidden="true">{$page}</span>
      </a>
    {/for}
  </ul>
</nav>