<?php /* Smarty version Smarty-3.0.6, created on 2018-04-18 17:20:22
         compiled from "/home/wwwroot/default/dangjian2/temp/dangwei/common/top.htm" */ ?>
<?php /*%%SmartyHeaderCode:1163560275ad70dd66908f5-39972268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bb7ca3f67e3207aeb8be673f22a7e521b8ccb3b' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/dangwei/common/top.htm',
      1 => 1516889075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1163560275ad70dd66908f5-39972268',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<script src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/jquery.js"></script>
<link href="<?php echo $_smarty_tpl->getVariable('dangwei_temp_path')->value;?>
/css/top.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrap">
	<div class="sysname"><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
</div>	
    <div class="logout"><span>欢迎您，<?php echo $_smarty_tpl->getVariable('admin')->value;?>
</span> <a href="index.php?action=logout">[退出]</a></div>
    <ul>
        <li><a href="index.php?action=clear_cache" target="main-frame">清空缓存</a></li>
        <li><a href="index.php?action=mod_pwd" target="main-frame">修改密码</a></li>
    </ul>
</div>
</body>
</html>
