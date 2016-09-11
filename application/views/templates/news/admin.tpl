<h1> {$data.title} </h1>

<div class="row">
<a class="btn btn-primary" href="/news/edit/new" title="Добавить новость">Добавить новость</a>
</div>
<hr>
<div class="row">
{if $data.news}
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>category</td>
                    <td>slug</td>
                    <td>title</td>
                    <td>text</td>
                    <td>create</td>
                    <td>update</td>
                    <td>edit</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody>
                {foreach item=item from=$data.news}
                    <tr>
                        <td>{$item.name}</td>
                        <td><a href="/news/view/{$item.slug}">{$item.slug} </a></td>
                        <td>{$item.title}</td>
                        <td>{$item.text} </td>
                        <td>{$item.create_date}</td>
                        <td>{$item.update_date}</td>
                        <td><a href="/news/edit/{$item.slug}">edit </a></td> 
                        <td><a href="/news/delete/{$item.slug}">delete</a></td> 
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/if}
</div>


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
      <a href="{$data.pagination.base_url}/{$page}" aria-label="Previous">
        <span aria-hidden="true">{$page}</span>
      </a>
    {/for}
  </ul>
</nav>