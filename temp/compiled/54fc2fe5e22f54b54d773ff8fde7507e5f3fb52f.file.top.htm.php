<?php /* Smarty version Smarty-3.0.6, created on 2018-05-24 15:24:30
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/common/top.htm" */ ?>
<?php /*%%SmartyHeaderCode:10962838505b0668ae25b290-29989280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54fc2fe5e22f54b54d773ff8fde7507e5f3fb52f' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/common/top.htm',
      1 => 1515681922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10962838505b0668ae25b290-29989280',
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
<link href="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/css/top.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrap">
	<div class="sysname"><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
</div>	
    <div class="logout"><span>欢迎您，<?php echo $_smarty_tpl->getVariable('admin')->value;?>
</span> <a href="index.php?action=logout">[退出]</a></div>
    <ul>
    	<!--<li><a href="index.php?action=main" target="main-frame">后台首页</a></li>
    	<li><a href="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
"  target="_blank">前台首页</a></li>-->
        <li><a href="index.php?action=clear_cache" target="main-frame">清空缓存</a></li>
        <li><a href="index.php?action=mod_pwd" target="main-frame">修改密码</a></li>
        
    </ul>
</div>
</body>
</html>
