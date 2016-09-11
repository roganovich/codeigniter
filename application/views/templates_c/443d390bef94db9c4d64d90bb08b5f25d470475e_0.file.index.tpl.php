<?php
/* Smarty version 3.1.30, created on 2016-09-11 21:35:06
  from "C:\Program Files (x86)\Ampps\www\codeigniter\application\views\templates\news\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_57d5a3da3331f4_27935299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '443d390bef94db9c4d64d90bb08b5f25d470475e' => 
    array (
      0 => 'C:\\Program Files (x86)\\Ampps\\www\\codeigniter\\application\\views\\templates\\news\\index.tpl',
      1 => 1473618905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57d5a3da3331f4_27935299 (Smarty_Internal_Template $_smarty_tpl) {
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
                <div class="thumbnail news-item">
                    <div class="news-title">
                         <h4><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</h4>
                        <a href="news/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['slug'];?>
">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['thumb']) {?>
                                <img src="/assets/img/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="thumb">
                            <?php } else { ?>
                                <img src="/assets/img/noFile.png" alt="thumb">
                            <?php }?>
                            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
                        </a>
                    </div>
                    <div class="news-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</div>
                    <div class="news-date"><?php echo $_smarty_tpl->tpl_vars['item']->value['update_date'];?>
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
<?php }?>




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
/index/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
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
