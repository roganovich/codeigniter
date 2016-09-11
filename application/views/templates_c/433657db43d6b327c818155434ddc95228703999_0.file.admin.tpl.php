<?php
/* Smarty version 3.1.30, created on 2016-09-11 14:21:37
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\category\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d568714e85c4_66711460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '433657db43d6b327c818155434ddc95228703999' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\category\\admin.tpl',
      1 => 1473603695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d568714e85c4_66711460 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 </h1>

<div class="row">
<a class="btn btn-primary" href="/category/edit/new" title="Добавить новость">Добавить категорию</a>
</div>
<hr>
<div class="row">
<?php if ($_smarty_tpl->tpl_vars['data']->value['category']) {?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['category'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td><a href="/category/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
 </a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                        <td><a href="/category/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">edit </a></td> 
                        <td><a href="/category/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">delete</a></td> 
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </tbody>
        </table>
    </div>
<?php }?>
</div>

<?php }
}
