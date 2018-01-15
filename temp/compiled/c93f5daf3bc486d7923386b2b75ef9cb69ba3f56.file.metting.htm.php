<?php /* Smarty version Smarty-3.0.6, created on 2018-01-15 20:21:09
         compiled from "E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\metting/metting.htm" */ ?>
<?php /*%%SmartyHeaderCode:119635a5c9cb50b7335-51475082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93f5daf3bc486d7923386b2b75ef9cb69ba3f56' => 
    array (
      0 => 'E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\\metting/metting.htm',
      1 => 1516018856,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119635a5c9cb50b7335-51475082',
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
/js/editor/kindeditor.js" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/editor/lang/zh_CN.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/plupload/plupload.full.min.js"></script>
    <script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/DatePicker/WdatePicker.js" type="text/javascript"></script>

<style>
.pic-list div{float:left;margin-right:10px;text-align:center;}
.pic-list img{width:150px;height:100px;border: 1px solid #ccc;padding: 3px;border-radius: 5px;}
</style>

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
<form name="form" action="" method="post" enctype="multipart/form-data">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td class="label">签到会场标题：</td>
	  <td><input type="text" name="info[title]" value="<?php echo $_smarty_tpl->getVariable('metting')->value['title'];?>
"  required="required" size="32" /></td>
    </tr>
    <tr>
        <td class="label">应参加人数：</td>
        <td><input type="text" name="info[sum]" value="<?php echo $_smarty_tpl->getVariable('metting')->value['sum'];?>
"  required="required" size="32" /></td>
    </tr>
	<tr>
		<td class="label">开始时间：</td>
		<td><input type="text" name="info[start_time]" onclick="return select_time()"  required="required" value="<?php echo $_smarty_tpl->getVariable('metting')->value['start_time'];?>
" size="32" /></td>
	</tr>
    <tr>
        <td class="label">签到会会场添加标签：</td>
        <td><label><input name="info[flg]" id="flg" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('metting')->value['flg']==1){?>checked <?php }?>/>（勾选后出现用户标签选择，不勾则全部参加） </label> </td>
    </tr>
</table>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" class="bq" <?php if ($_smarty_tpl->getVariable('metting')->value['flg']==0){?>style="display: none" <?php }?> >
    <tr>
        <td class="label">身份：</td>
        <td>
            <select name="info[identity]">
                <?php  $_smarty_tpl->tpl_vars['identity'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value['identity']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['identity']->key => $_smarty_tpl->tpl_vars['identity']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['identity']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('metting')->value['identity']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['identity']->value;?>
</option>
                <?php }} ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="label">职位：</td>
        <td>
            <select name="info[position]">
                <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value['position']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['position']->key;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('metting')->value['position']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</option>
                <?php }} ?>
            </select>
        </td>
    </tr>
    <tr>
        <td class="label">是否为专职党务干事：</td>
        <td>
            <input name="info[is_party_affairs]" type="radio" value="0" checked />否
            <input name="info[is_party_affairs]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('metting')->value['is_party_affairs']=='1'){?>checked <?php }?> />是
        </td>
    </tr>
    <tr>
        <td class="label">是否违纪：</td>
        <td>
            <input name="info[is_discipline]" type="radio" value="0" checked />否
            <input name="info[is_discipline]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('metting')->value['is_discipline']=='1'){?>checked <?php }?> />是
        </td>
    </tr>
    <tr>
        <td class="label">是否是发展预备：</td>
        <td>
            <input name="info[is_prepare]" type="radio" value="0" checked />否
            <input name="info[is_prepare]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('metting')->value['is_prepare']=='1'){?>checked <?php }?> />是
        </td>
    </tr>
    <tr>
        <td class="label">是否退休：</td>
        <td>
            <input name="info[is_retire]" type="radio" value="0" checked />否
            <input name="info[is_retire]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('metting')->value['is_retire']=='1'){?>checked <?php }?> />是
        </td>
    </tr>
    </table>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td colspan="2" align="center">
      <input type="hidden" name="action" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" />
      <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getVariable('metting')->value['id'];?>
" id="id" />
      <input type="hidden" name="now_page" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" />
      <input type="submit" value="确定">      
      </td>
    </tr>
</table>
</form>
</div>


<script>
    function select_time()
    {
        WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})
    }

    $("#flg").change(function () {
        if ($("#flg").is(':checked')) {
            $('.bq').css('display','block');
        }else {
            $('.bq').css('display','none');
        }
    })

</script>

</body>
</html>
