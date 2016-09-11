<?php
/* Smarty version 3.1.30, created on 2016-09-11 14:07:43
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\news\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d5652f3b4fa7_39407277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '403f0e79dec81d8d9477d0b179a3ef415a7015db' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\news\\admin.tpl',
      1 => 1473602861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d5652f3b4fa7_39407277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 </h1>

<div class="row">
<a class="btn btn-primary" href="/news/edit/new" title="Добавить новость">Добавить новость</a>
</div>
<hr>
<div class="row">
<?php if ($_smarty_tpl->tpl_vars['data']->value['news']) {?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['news'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                        <td><a href="/news/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
 </a></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
 </td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['create_date'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value['update_date'];?>
</td>
                        <td><a href="/news/edit/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">edit </a></td> 
                        <td><a href="/news/delete/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
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


<nav aria-label="Page navigation">
  <ul class="pagination">
        <?php if (!$_smarty_tpl->tpl_vars['data']->value['pagination']['page']) {?>
            <li class="active">
        <?php } else { ?>
            <li>
        <?php }?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['pagination']['base_url'];?>
" aria-label="Previous">
            <span aria-hidden="true">1</span>
          </a>
      </li>
    <?php
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['page']->step = 1;$_smarty_tpl->tpl_vars['page']->total = (int) ceil(($_smarty_tpl->tpl_vars['page']->step > 0 ? $_smarty_tpl->tpl_vars['data']->value['pagination']['pages']+1 - (2) : 2-($_smarty_tpl->tpl_vars['data']->value['pagination']['pages'])+1)/abs($_smarty_tpl->tpl_vars['page']->step));
if ($_smarty_tpl->tpl_vars['page']->total > 0) {
for ($_smarty_tpl->tpl_vars['page']->value = 2, $_smarty_tpl->tpl_vars['page']->iteration = 1;$_smarty_tpl->tpl_vars['page']->iteration <= $_smarty_tpl->tpl_vars['page']->total;$_smarty_tpl->tpl_vars['page']->value += $_smarty_tpl->tpl_vars['page']->step, $_smarty_tpl->tpl_vars['page']->iteration++) {
$_smarty_tpl->tpl_vars['page']->first = $_smarty_tpl->tpl_vars['page']->iteration == 1;$_smarty_tpl->tpl_vars['page']->last = $_smarty_tpl->tpl_vars['page']->iteration == $_smarty_tpl->tpl_vars['page']->total;?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['data']->value['pagination']['page']) {?>
        <li class="active">
        <?php } else { ?>
            <li>
        <?php }?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['pagination']['base_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" aria-label="Previous">
        <span aria-hidden="true"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
      </a>
    <?php }
}
?>

  </ul>
</nav><?php }
}
