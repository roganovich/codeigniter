<?php
/* Smarty version 3.1.30, created on 2016-09-10 14:33:30
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\news\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d419ba5b7128_84788864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '443d390bef94db9c4d64d90bb08b5f25d470475e' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\news\\index.tpl',
      1 => 1473518008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d419ba5b7128_84788864 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1> <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
 </h1>

<?php if ($_smarty_tpl->tpl_vars['data']->value['news']) {?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['news'], 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <div class="col-xs-4 col-md-3 ">
                <div class="thumbnail">
                    <a href="#">
                      <img src="/assets/img/noFile.png" alt="thumb">
                        <h2><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h2>
                    </a>
                    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div>
                    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['update_date'];?>
</div>
                </div>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php } else { ?>
    Hi, <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
!
<?php }
}
}
