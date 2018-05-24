<?php /* Smarty version Smarty-3.0.6, created on 2018-04-18 17:30:11
         compiled from "/home/wwwroot/default/dangjian2/temp/dangwei/admin/admin.htm" */ ?>
<?php /*%%SmartyHeaderCode:18472099975ad71023ac01e7-44808682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6226e6eb09dd356a6ff07580368851e15f3f6f97' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/dangwei/admin/admin.htm',
      1 => 1516975370,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18472099975ad71023ac01e7-44808682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加管理员</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/main.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/jquery-1.4.2.min.js"></script>

<script language="javascript">
	function sel_p(type)
	{
		if (type == 0)
		{
			$("#p1").css("display", "");
			$("#p2").css("display", "none");
		}
		else
		{
			$("#p1").css("display", "none");
			$("#p2").css("display", "");
		}
	}
</script>

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
<form name="frm" action="admin_dangwei.php" method="post" autoComplete="Off">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td class="label">用户名：</td>
	  <td><input type="text" name="info[userid]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('admin')->value['userid'];?>
"></td>
    </tr>
    <tr>
      <td class="label">密码：</td>
	  <td><input type="password" name="info[password]" value=""> (留空表示不修改)</td>
    </tr>
	<tr>
		<td class="label">公司名称：</td>
		<td><input type="text" name="info[company]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('admin')->value['company'];?>
"></td>
	</tr>
	<tr>
		<td class="label">联系电话：</td>
		<td><input type="text" name="info[mobile]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('admin')->value['mobile'];?>
"></td>
	</tr>
	<tr>
		<td class="label">公司地址：</td>
		<td><input type="text" name="info[address]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('admin')->value['address'];?>
"></td>
	</tr>
    <tr>
      <td colspan="2" align="center">
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" name="action" />
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" name="now_page" />
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('admin')->value['id'];?>
" name="id" />
        <input type="submit" value="确定">
      </td>
    </tr>
</table>
</form>
</div>
</body>
</html>
