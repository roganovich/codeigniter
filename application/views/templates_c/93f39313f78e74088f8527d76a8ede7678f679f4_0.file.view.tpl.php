<?php
/* Smarty version 3.1.30, created on 2016-09-11 13:48:25
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\news\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d560a96d9ff5_66838713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f39313f78e74088f8527d76a8ede7678f679f4' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\news\\view.tpl',
      1 => 1473601704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d560a96d9ff5_66838713 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="col-md-12"><h2><?php echo $_smarty_tpl->tpl_vars['data']->value['news']['title'];?>
</h2></div>
</div>


<div class="row">
  <div class="col-md-12">
<?php if ($_smarty_tpl->tpl_vars['data']->value['news']['thumb']) {?>
<img class=" view" src="/assets/img/<?php echo $_smarty_tpl->tpl_vars['data']->value['news']['thumb'];?>
" alt="thumb">
<?php } else { ?>
<img class=" view" src="/assets/img/noFile.png" alt="thumb">
<?php }?>
      <?php echo $_smarty_tpl->tpl_vars['data']->value['news']['text'];?>
</div>
</div>

<div class="row">
  <div class="col-md-12">Запись созданна: <?php echo $_smarty_tpl->tpl_vars['data']->value['news']['create_date'];?>
</div>
</div>

<div class="row">
  <div class="col-md-12">Запись обновленна: <?php echo $_smarty_tpl->tpl_vars['data']->value['news']['update_date'];?>
</div>
</div>
 
<?php }
}
