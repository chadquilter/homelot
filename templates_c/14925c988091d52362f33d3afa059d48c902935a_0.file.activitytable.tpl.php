<?php
/* Smarty version 3.1.32, created on 2018-05-24 10:50:59
  from 'H:\xampp\htdocs\dashboard\homelot\templates\activitytable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b067cf3abee17_23385793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14925c988091d52362f33d3afa059d48c902935a' => 
    array (
      0 => 'H:\\xampp\\htdocs\\dashboard\\homelot\\templates\\activitytable.tpl',
      1 => 1527151692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b067cf3abee17_23385793 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" width="100%">
  <tr>
    <thead>
    <th bgcolor="#d1d1d1">
      Name
    </th>
    <th bgcolor="#d1d1d1">
      Type
    </th>
    <th bgcolor="#d1d1d1">
      State
    </th>
    <th bgcolor="#d1d1d1">
      Alarm
    </th>
    <thead>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sensors']->value, 'sensor', false, 'myID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['myID']->value => $_smarty_tpl->tpl_vars['sensor']->value) {
?>
    <tr bgcolor=<?php if ($_smarty_tpl->tpl_vars['sensor']->value['alarm'] != 'Alert') {?>"#00ff00"<?php } else { ?>"FF0000"<?php }?>>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sensor']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td align="right">
        <?php echo $_smarty_tpl->tpl_vars['sensor']->value['type'];?>

      </td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sensor']->value['stateString'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sensor']->value['alarm'], ENT_QUOTES, 'UTF-8', true);?>
</td>
    </tr>
    <?php
}
} else {
?>
      <tr>
        <td colspan="2">No records</td>
      </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
