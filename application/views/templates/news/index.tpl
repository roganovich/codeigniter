<h1> {$data.title} </h1>

{if $data.news}
    <div class="row">
        {foreach item=item from=$data.news}
            <div class="col-xs-4 col-md-3 ">
                <div class="thumbnail">
                    <a href="#">
                      <img src="/assets/img/noFile.png" alt="thumb">
                        <h2>{$item.title}</h2>
                    </a>
                    <div>{$item.text}</div>
                    <div>{$item.update_date}</div>
                </div>
            </div>
        {/foreach}
    </div>
{else}
    Hi, {$data.title}!
{/if}
