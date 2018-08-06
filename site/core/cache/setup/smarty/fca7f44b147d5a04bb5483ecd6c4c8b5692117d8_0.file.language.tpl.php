<?php
/* Smarty version 3.1.31, created on 2018-08-05 16:23:00
  from "/usr/share/nginx/html/setup/templates/language.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5b672464c3ae44_44459780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fca7f44b147d5a04bb5483ecd6c4c8b5692117d8' => 
    array (
      0 => '/usr/share/nginx/html/setup/templates/language.tpl',
      1 => 1533486042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b672464c3ae44_44459780 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="install" action="?" method="post">

<?php if ($_smarty_tpl->tpl_vars['restarted']->value) {?>
    <br class="clear" />
    <br class="clear" />
    <p class="note"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['restarted_msg'];?>
</p>
<?php }?>

<div class="setup_navbar" style="border-top: 0;">
    <p class="title"><?php echo $_smarty_tpl->tpl_vars['_lang']->value['choose_language'];?>
:
        <select name="language" autofocus="autofocus">
            <?php echo $_smarty_tpl->tpl_vars['languages']->value;?>

    	</select>
    </p>

    <input type="submit" name="proceed" value="<?php echo $_smarty_tpl->tpl_vars['_lang']->value['select'];?>
" />
</div>
</form><?php }
}
