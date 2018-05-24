<?php /* Smarty version Smarty-3.0.6, created on 2018-04-18 10:41:01
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/vote/vote.htm" */ ?>
<?php /*%%SmartyHeaderCode:3587771915ad6b03de35c06-44555376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f001af635ea3a7d7d0f11b8ad6f0022352531ea' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/vote/vote.htm',
      1 => 1515681922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3587771915ad6b03de35c06-44555376',
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
    <form name="frm" action="vote.php" method="post" enctype="multipart/form-data">
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <td class="label">题目标题：</td>
                <td>
                    <textarea rows="3" cols="3" name="vote[title]" placeholder="投票标题" required="required"style="width: 400px"></textarea>
                </td>
            </tr>
            <tr>
                <td class="label">结束时间：</td>
                <td><input type="text" name="vote[end_time]" onclick="return select_time()" placeholder="投票结束时间" required="required" value="" size="32" /></td>
            </tr>
            <tr>
                <td class="label">题目类型：</td>
                <td>
                    <select name="vote[type]" id="type">
                        <option value="1">单选题</option>
                        <option value="2">多选题</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">选项：</td>
                <td>
                    <input type="text" name="option[]" value="" size="55" />
                </td>
            </tr>
            <tr>
                <td class="label">选项：</td>
                <td>
                    <input type="text" name="option[]" value="" size="55" />
                </td>
            </tr>
            <tr>
                <td class="label">选项：</td>
                <td>
                    <input type="text" name="option[]" value="" size="55" />
                </td>
            </tr>
            <tr>
                <td class="label">选项：</td>
                <td>
                    <input type="text" name="option[]" value="" size="55" />
                </td>
            </tr>

        </table>
        <div style="height:30px; line-height:30px;text-align:center;">
                <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" name="action" />
                <input type="submit" value="确定">
                <input class="clone" type="button" value="添加选项">
        </div>
    </form>
</div>

<script language="javascript">
    $(document).ready(function(){
        $(".clone").click(function(){
            var html ="<tr><td class='label'>选项：</td><td><input type='text' name='option[]' value='' size='55' /><input type='button' onclick='_delMlj(this)' value='删除'></td></tr>";
            $("table").append(html);
        });

    });
    function _delMlj(thisobj){
        $(thisobj).parent().parent().remove();
    }
    function select_time() {
        WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})
    }
</script>

</body>
</html>
