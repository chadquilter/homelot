<?php
/* Smarty version 3.1.32, created on 2018-05-24 10:50:59
  from 'H:\xampp\htdocs\dashboard\homelot\templates\sensoractivity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b067cf3a1e527_31673782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a4b2d0536df1aaae5146bc25d1fc3addc66557' => 
    array (
      0 => 'H:\\xampp\\htdocs\\dashboard\\homelot\\templates\\sensoractivity.tpl',
      1 => 1527151765,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:activitytable.tpl' => 1,
  ),
),false)) {
function content_5b067cf3a1e527_31673782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'config/sensor.conf', null, 0);
?>

<html>
  <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
  <body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'bodyBgColor');?>
">
    <div class="body-container">
      <h1>Home Sensor Activty Report:</h1>
      <?php $_smarty_tpl->_subTemplateRender("file:activitytable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
  </body>
</html>
<?php }
}
