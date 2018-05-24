<?php /* Smarty version Smarty-3.0.6, created on 2018-04-28 14:58:26
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/metting/image.htm" */ ?>
<?php /*%%SmartyHeaderCode:12937382975ae41b92c882b1-34387481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72afbde19d9fe8ff6b20b0743b59498656a8dd17' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/metting/image.htm',
      1 => 1515681922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12937382975ae41b92c882b1-34387481',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>会议二维码</title>
    <style>
        .tip img {
            display: block;
            margin: 0 auto;
            margin-top: -10px;
        }

        .tip .intro .thumb {
            width: 350px;
            height: auto;
        }

        .tip .intro .product-name {
            font-size: 36px;
            font-weight: bold;
            color: #333333;
            text-align: center;
        }

        .tip .intro .coin {
            font-size: 24px;
            text-align: center;
            color: #ff0058;
            margin-top: -10px;
        }
        .tip .intro .coin_iso {
            font-size: 24px;
            text-align: center;
            margin-top: -10px;
        }

    </style>
</head>

<body>
<div class="exchange tip">
    <div class="intro" style="text-align:center">
        <p class="product-name"><?php echo $_smarty_tpl->getVariable('metting')->value['title'];?>
</p>
        <img src="/upload/metting/metting-<?php echo $_smarty_tpl->getVariable('metting')->value['id'];?>
.jpg" alt="" class="thumb">
    </div>
</div>
</body>
</html>
