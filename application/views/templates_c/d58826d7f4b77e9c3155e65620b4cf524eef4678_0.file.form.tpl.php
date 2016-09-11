<?php
/* Smarty version 3.1.30, created on 2016-09-11 17:56:35
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\news\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d59ad33dcb49_96935004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd58826d7f4b77e9c3155e65620b4cf524eef4678' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\news\\form.tpl',
      1 => 1473616570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d59ad33dcb49_96935004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="/news/admin" enctype="multipart/form-data" method="post">
    <div class="form-group">
        <label>Category
            <select class="form-control" name="cat_id">
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['category'], 'categ');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categ']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['categ']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['categ']->value['name'];?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select> 
        </label>
    </div>
  <div class="form-group">
    <label>Title</label>
    <input id="news-title" name="title" type="input" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['news']['title'];?>
">
  </div>
<div class="form-group">
    <label>Slug</label>
    <input id="news-slug" name="slug" type="input" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['news']['slug'];?>
">
  </div>
  <div class="form-group">
    <label>Text</label>
    <textarea name="text" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['news']['title'];?>
</textarea>
  </div>
  <div class="form-group">
    <label>Thumb</label>
    <input name="thumb" type="file" id="exampleInputFile">
    <p class="help-block">Put thumb.</p>
    <?php if ($_smarty_tpl->tpl_vars['data']->value['news']['thumb']) {?>
        <img class="col-md-2" src="/assets/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['news']['thumb'];?>
" alt="thumb">
    <?php } else { ?>
        <img class="col-md-2" src="/assets/img/noFile.png" alt="thumb">
    <?php }?>
  </div>
 <input name="id" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['news']['id'];?>
">
  <button type="submit" class="btn btn-default">Submit</button>
</form><?php }
}
