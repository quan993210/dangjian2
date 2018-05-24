<?php /* Smarty version Smarty-3.0.6, created on 2018-05-24 15:21:57
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/timu/timu_list.htm" */ ?>
<?php /*%%SmartyHeaderCode:9468077555b06681525f941-58778523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd410b2d8ea21dd79db75ff54516e9686da36b968' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/timu/timu_list.htm',
      1 => 1515681922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9468077555b06681525f941-58778523',
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
/js/utils.js"></script>
<script src="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/js/listtable.js"></script>

<script>
	function search_check()
	{
		if($("search_cat").value != 0)
		{			
			if($("keyword").value == "")
			{
				alert("请填写搜索关键字");
				$("keyword").focus();
				return false;
			}
		}
		else
		{
			alert('请选择搜索类型');
			return false;
		}
		return true;
	}
	
	function check()
	{
		if(confirm("您确认删除这些吗？"))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function check_del(url)
	{
		if(confirm("您是否确认删除该题目！"))
		{
			location.href = url;
		}
		
		
		return;
	}
</script>

</head>
<h1>
<span class="action-span"><a href="timu.php?action=add_timu&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
">添加题目</a></span>
<span class="action-span1"><a href=""><?php echo $_smarty_tpl->getVariable('sys_name')->value;?>
 管理中心</a>  - <?php echo $_smarty_tpl->getVariable('page_title')->value;?>
 </span>
<div style="clear:both"></div>
</h1>
<body>
<div class="form-div">
  <form action="" name="searchForm" onsubmit="">
    <img src="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
    <select name="cid" id="cid">
       	<option value="0">选择题目分类</option>
       	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('timu_category')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
       	<option value="<?php echo $_smarty_tpl->getVariable('timu_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" <?php if ($_smarty_tpl->getVariable('cid')->value==$_smarty_tpl->getVariable('timu_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('timu_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>
</option>
    	<?php endfor; endif; ?>
    </select> 
    
    关键字 <input type="text" name="keyword" id="keyword" value="<?php echo $_smarty_tpl->getVariable('keyword')->value;?>
"/>
    <input type="submit" value="搜索" class="button" />
  </form>
</div>
<form method="post" action="timu.php?action=del_sel_timu" name="listForm" onsubmit="return check()">
<div class="list-div" id="listDiv">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr align="center">
	  <th width="5%"><input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox" name="checkbox[]">编号</th>
      <th width="15%">题目分类</td>
		<th width="10%">题目类型</td>
      <th width="55%">题目</td>
      <th width="15%">操作</td>
    </tr>
	<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('timu_list')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
		<tr align="center">
		  <td><span><input name="checkboxes[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['timuid'];?>
" /><?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['timuid'];?>
</span></td>
          <td class="first-cell"><?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['catname'];?>
</td>
			<td class="first-cell"><?php if ($_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['type']==1){?>选择题<?php }else{ ?>判断题<?php }?></td>
          <td class="first-cell">
			  <?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['title'];?>

			  <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['name'] = 'answer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['answer']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['answer']['total']);
?>
			  <p <?php if ($_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['correct']==$_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['answer'][$_smarty_tpl->getVariable('smarty')->value['section']['answer']['index']]['number']){?> style="color: red"<?php }?>>
				  <?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['answer'][$_smarty_tpl->getVariable('smarty')->value['section']['answer']['index']]['number'];?>
．<?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['answer'][$_smarty_tpl->getVariable('smarty')->value['section']['answer']['index']]['name'];?>

			  </p>
			  <?php endfor; endif; ?>
		  </td>

		  <td>
          	<a href="timu.php?action=mod_timu&timuid=<?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['timuid'];?>
&now_page=<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
">修改</a> |
            <a href="javascript:void(0);" onclick="check_del('timu.php?action=del_timu&timuid=<?php echo $_smarty_tpl->getVariable('timu_list')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['timuid'];?>
&nowpage=<?php echo $_smarty_tpl->getVariable('nowpage')->value;?>
&type=<?php echo $_smarty_tpl->getVariable('type')->value;?>
');">删除</a>
          </td>
		</tr>  
	<?php endfor; endif; ?>
    <tr>
      <td>
      	<input type="submit" value="批量删除" id="btnSubmit" name="btnSubmit" class="button" disabled="true" />
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" name="now_page"/>
        <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
" id="admin_temp_path"/>
      </td>
      <td colspan="10" align="right">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->getVariable('pageshow')->value;?>
</td>
    </tr>
</table>
</div>
</form>
</body>
</html>
<script language="JavaScript" src="<?php echo $_smarty_tpl->getVariable('admin_temp_path')->value;?>
/js/select.js"></script>