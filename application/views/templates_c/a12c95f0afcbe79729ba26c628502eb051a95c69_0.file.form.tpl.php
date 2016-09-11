<?php
/* Smarty version 3.1.30, created on 2016-09-11 14:22:31
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\category\form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d568a71eb160_41095773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a12c95f0afcbe79729ba26c628502eb051a95c69' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\category\\form.tpl',
      1 => 1473603749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d568a71eb160_41095773 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="/category/admin" enctype="multipart/form-data" method="post">

  <div class="form-group">
    <label>Name</label>
    <input  name="name" type="input" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category']['name'];?>
">
  </div>
 <input name="id" type="hidden" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category']['id'];?>
">
  <button type="submit" class="btn btn-default">Submit</button>
</form><?php }
}
