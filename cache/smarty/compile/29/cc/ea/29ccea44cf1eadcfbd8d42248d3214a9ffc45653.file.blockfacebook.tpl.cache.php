<?php /* Smarty version Smarty-3.1.19, created on 2014-10-23 07:16:50
         compiled from "/home/et3t56hdrdbus5ty/public_html/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13685697485448e3a2f2f662-15579365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29ccea44cf1eadcfbd8d42248d3214a9ffc45653' => 
    array (
      0 => '/home/et3t56hdrdbus5ty/public_html/modules/blockfacebook/blockfacebook.tpl',
      1 => 1406844706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13685697485448e3a2f2f662-15579365',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5448e3a3006972_76023901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5448e3a3006972_76023901')) {function content_5448e3a3006972_76023901($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
