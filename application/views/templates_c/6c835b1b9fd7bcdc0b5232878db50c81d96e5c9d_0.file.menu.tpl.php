<?php
/* Smarty version 3.1.30, created on 2016-09-11 21:29:54
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d5a2a2a88028_89772414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c835b1b9fd7bcdc0b5232878db50c81d96e5c9d' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\menu.tpl',
      1 => 1473618593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d5a2a2a88028_89772414 (Smarty_Internal_Template $_smarty_tpl) {
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid"> 
        <ul class="nav navbar-nav"> 
            <li>
                <a href="/news">Новости</a>
            </li> 
            <?php if ($_smarty_tpl->tpl_vars['user_info']->value) {?>
            <li>
                <a href="/news/admin">Менеджер новостей</a>
            </li>
            <li>
                <a href="/category/admin">Менеджер категорий</a>
            </li>
            <?php }?>
        </ul> 
        <?php if (!$_smarty_tpl->tpl_vars['user_info']->value) {?>
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
        <?php } else { ?>
            <form class="navbar-form navbar-right" method="post" action="/logout">
            <button type="submit" class="btn btn-default">Выйти</button>
        </form>
        <?php }?>
    </div>
</nav><?php }
}
