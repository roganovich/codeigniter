<h1> {$data.title} </h1>

<div class="row">
<a class="btn btn-primary" href="/category/edit/new" title="Добавить новость">Добавить категорию</a>
</div>
<hr>
<div class="row">
{if $data.category}
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                     <td>edit</td>
                    <td>delete</td>
                </tr>
            </thead>
            <tbody>
                {foreach item=item from=$data.category}
                    <tr>
                        <td><a href="/category/view/{$item.id}">{$item.id} </a></td>
                        <td>{$item.name}</td>
                        <td><a href="/category/edit/{$item.id}">edit </a></td> 
                        <td><a href="/category/delete/{$item.id}">delete</a></td> 
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
{/if}
</div>

