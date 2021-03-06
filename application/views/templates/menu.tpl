<nav class="navbar navbar-inverse">
    <div class="container-fluid"> 
        <ul class="nav navbar-nav"> 
            <li>
                <a href="/news">Новости</a>
            </li> 
            {if $user_info}
            <li>
                <a href="/news/admin">Менеджер новостей</a>
            </li>
            <li>
                <a href="/category/admin">Менеджер категорий</a>
            </li>
            {/if}
        </ul> 
        {if !$user_info}
            <form class="navbar-form navbar-right" method="post" action="/login">
                <div class="form-group">
                  <label>Пользователь</label>
                  <input name="login" type="input" class="form-control" value="test">
                </div>
                <div class="form-group">
                  <label>Пароль</label>
                  <input name="pass" type="password" value="1234" class="form-control">
                </div>
                <button type="submit" class="btn btn-default">Войти</button>
            </form>
        {else}
            <form class="navbar-form navbar-right" method="post" action="/logout">
            <button type="submit" class="btn btn-default">Выйти</button>
        </form>
        {/if}
    </div>
</nav>