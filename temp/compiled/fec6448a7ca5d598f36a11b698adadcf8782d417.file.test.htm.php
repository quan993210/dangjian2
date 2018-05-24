<?php /* Smarty version Smarty-3.0.6, created on 2018-04-27 15:23:13
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/test/test.htm" */ ?>
<?php /*%%SmartyHeaderCode:20485717455ae2cfe1039484-43555734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fec6448a7ca5d598f36a11b698adadcf8782d417' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/test/test.htm',
      1 => 1523192030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20485717455ae2cfe1039484-43555734',
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
    
    <script language="javascript">
        $(document).ready(function(){
            $('#type').change(function(){
                var vs = $('#type option:selected').val();
                if(vs == 1){
                    $("#judge").css('display',"none");
                    $("#choice").css('display',"");
                }else{
                    $("#judge").css('display',"");
                    $("#choice").css('display',"none");
                }
            })
            $("#flg").change(function () {
                if ($("#flg").is(':checked')) {
                    $('.bq').css('display','block');
                }else {
                    $('.bq').css('display','none');
                }
            })
        })
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
    <form name="frm" action="test.php" method="post" enctype="multipart/form-data">
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <td class="label">测试标题：</td>
                <td>
                    <textarea rows="3" cols="3" name="title" placeholder="测试标题" style="width: 400px"><?php echo $_smarty_tpl->getVariable('test')->value['title'];?>
</textarea>
                </td>
            </tr>
            <tr>
                <td class="label">考试时间：</td>
                <td>
                    <input type="text" name="limit_time" value="<?php echo $_smarty_tpl->getVariable('test')->value['limit_time'];?>
" />(单位分钟)
                </td>
            </tr>
            <tr>
                <td class="label">题目数量：</td>
                <td>
                    <input type="text" name="limit_count" value="<?php echo $_smarty_tpl->getVariable('test')->value['limit_count'];?>
" />
                </td>
            </tr>
            <tr>
                <td class="label">选择题库：</td>
                <td>
                    <?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('test_category')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <label>
                        <input <?php if (strstr($_smarty_tpl->getVariable('test')->value['timu_catids'],$_smarty_tpl->getVariable('test_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'])){?>checked<?php }?> name="catid[]" type="checkbox" value="<?php echo $_smarty_tpl->getVariable('test_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id'];?>
" /><?php echo $_smarty_tpl->getVariable('test_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>

                    </label>
                    <?php endfor; endif; ?>
                </td>
            </tr>
            <tr>
                <td class="label">添加试卷标签：</td>
                <td><label><input name="info[flg]" id="flg" type="checkbox" value="1" <?php if ($_smarty_tpl->getVariable('test')->value['flg']==1){?>checked <?php }?>/>（勾选后出现用户标签选择，不勾则全部参加） </label> </td>
            </tr>
        </table>
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" class="bq" <?php if ($_smarty_tpl->getVariable('test')->value['flg']==0){?>style="display: none" <?php }?> >
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
" <?php if ($_smarty_tpl->getVariable('test')->value['identity']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['identity']->value;?>
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
" <?php if ($_smarty_tpl->getVariable('test')->value['position']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['position']->value;?>
</option>
                    <?php }} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="label">职称：</td>
            <td>
                <select name="info[grade]">
                    <?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value['grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['grade']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('member')->value['grade']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['grade']->value;?>
</option>
                    <?php }} ?>
                </select>
                <select name="info[rank_title]">
                    <?php  $_smarty_tpl->tpl_vars['rank_title'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('info')->value['rank_title']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['rank_title']->key => $_smarty_tpl->tpl_vars['rank_title']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['rank_title']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->getVariable('member')->value['rank_title']==$_smarty_tpl->tpl_vars['key']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['rank_title']->value;?>
</option>
                    <?php }} ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="label">是否为专职党务干事：</td>
            <td>
                <input name="info[is_party_affairs]" type="radio" value="2" <?php if ($_smarty_tpl->getVariable('test')->value['is_party_affairs']=='2'){?>checked <?php }?> />否
                <input name="info[is_party_affairs]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('test')->value['is_party_affairs']=='1'){?>checked <?php }?> />是
            </td>
        </tr>
        <tr>
            <td class="label">是否违纪：</td>
            <td>
                <input name="info[is_discipline]" type="radio" value="2" <?php if ($_smarty_tpl->getVariable('test')->value['is_discipline']=='2'){?>checked <?php }?> />否
                <input name="info[is_discipline]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('test')->value['is_discipline']=='1'){?>checked <?php }?> />是
            </td>
        </tr>
        <tr>
            <td class="label">是否是发展预备：</td>
            <td>
                <input name="info[is_prepare]" type="radio" value="2" <?php if ($_smarty_tpl->getVariable('test')->value['is_prepare']=='2'){?>checked <?php }?> />否
                <input name="info[is_prepare]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('test')->value['is_prepare']=='1'){?>checked <?php }?> />是
            </td>
        </tr>
        <tr>
            <td class="label">是否退休：</td>
            <td>
                <input name="info[is_retire]" type="radio" value="2" <?php if ($_smarty_tpl->getVariable('test')->value['is_retire']=='2'){?>checked <?php }?> />否
                <input name="info[is_retire]" type="radio" value="1" <?php if ($_smarty_tpl->getVariable('test')->value['is_retire']=='1'){?>checked <?php }?> />是
            </td>
        </tr>
        </table>
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" name="action" />
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" name="now_page" />
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('test')->value['testid'];?>
" name="testid" />
                    <input type="submit" value="确定">
                </td>
            </tr>
        </table>

    </form>
</div>

</body>
</html>
