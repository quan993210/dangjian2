<?php /* Smarty version Smarty-3.0.6, created on 2018-05-24 15:45:49
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/common/login.htm" */ ?>
<?php /*%%SmartyHeaderCode:19698323975b066dadf0e4d0-33060550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2003989b0e239e57967461f688d5d2bb3188019e' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/common/login.htm',
      1 => 1515681922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19698323975b066dadf0e4d0-33060550',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/jquery.js"></script>
<link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/login.css" rel="stylesheet" type="text/css" />

<script>
$(document).ready(function(){
	$("#userid, #pwd").keyup(function (event) {
		var keycode = event.which;
		if (keycode == 13) {
			login();     
		}
	 });
});
	 
function login()
{
	if ($("#userid").val() == "")
	{
		alert("请输入用户名");
		$("#userid").focus();
		return;
	}
	if ($("#pwd").val() == "")
	{
		alert("请输入密码");
		$("#pwd").focus();
		return;
	}
	/*if ($("#safecode").val() == "")
	{
		alert("请输入验证码");
		$("#safecode").focus();
		return false;
	}*/
	$("#frm").submit();		
}
</script>

</head>
<body>
<div class="wrap">
	<div><img src="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/images/logo.png" width="350" height="94" /></div>
    <div class="line"><img src="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/images/line.png" width="397" height="2" /></div>
    <div class="sysname"><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
</div>
    
    <div>
    	<form name="frm" id="frm" action="index.php?action=login" method="post">
        <div class="userid"><span><input name="userid" id="userid" type="text" placeholder="username" /></span></div>
    	<div class="password"><span><input name="pwd" id="pwd" type="password" placeholder="password" /></span></div>
        <div class="submit" onclick="login();"></div>
        </form>
    </div>
</div>

</body>
</html>