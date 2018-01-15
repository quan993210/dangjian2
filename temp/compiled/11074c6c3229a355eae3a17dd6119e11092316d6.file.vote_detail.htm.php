<?php /* Smarty version Smarty-3.0.6, created on 2018-01-15 21:00:51
         compiled from "E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\vote/vote_detail.htm" */ ?>
<?php /*%%SmartyHeaderCode:186425a5ca603c886e0-60015281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11074c6c3229a355eae3a17dd6119e11092316d6' => 
    array (
      0 => 'E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\\vote/vote_detail.htm',
      1 => 1515596191,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186425a5ca603c886e0-60015281',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $_smarty_tpl->getVariable('page_title')->value;?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/general.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/main.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/jquery.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/DatePicker/WdatePicker.js" type="text/javascript"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/editor/kindeditor.js" charset="utf-8"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/editor/lang/zh_CN.js" charset="utf-8"></script>
</head>
<body>
<h1>
    <span class="action-span"><a href="javascript:history.back();">返回</a></span>
    <span class="action-span1"><a href=""><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
 管理中心</a>  - <?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 </span>
    <div style="clear:both"></div>
</h1>
<div id="tabbody-div">
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
        <tr>
            <td class="label">题目标题：</td>
            <td><?php echo $_smarty_tpl->getVariable('vote')->value['title'];?>
</td>
        </tr>
        <tr>
            <td class="label">结束时间：</td>
            <td><?php echo $_smarty_tpl->getVariable('vote')->value['endtime'];?>
</td>
        </tr>
        <tr>
            <td class="label">题目类型：</td>
            <td><?php if ($_smarty_tpl->getVariable('vote')->value['type']==1){?>选择题<?php }else{ ?>多选题<?php }?></td>
        </tr>
        <tr>
            <td class="label">选项投票</td>
            <td></td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('vote_option')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['option']->key;
?>
        <tr>
            <td class="label"><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['option']->value['options'];?>
：</td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['option']->value['num'];?>
票
            </td>
        </tr>
        <?php }} ?>

    </table>

</div>

</body>
</html>
