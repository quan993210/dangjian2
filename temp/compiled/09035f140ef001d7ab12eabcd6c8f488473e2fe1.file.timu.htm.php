<?php /* Smarty version Smarty-3.0.6, created on 2018-01-09 22:05:48
         compiled from "E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\timu/timu.htm" */ ?>
<?php /*%%SmartyHeaderCode:13025a54cc3c5887c4-47878382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09035f140ef001d7ab12eabcd6c8f488473e2fe1' => 
    array (
      0 => 'E:/xiangmu/phpstudy/WWW/dangjian2/temp/admin\\timu/timu.htm',
      1 => 1505486953,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13025a54cc3c5887c4-47878382',
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
    <form name="frm" action="timu.php" method="post" enctype="multipart/form-data">
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <td class="label">题目分类：</td>
                <td>
                    <select name="catid" id="catid">
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
" <?php if ($_smarty_tpl->getVariable('timu')->value['catid']==$_smarty_tpl->getVariable('timu_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['id']){?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('timu_category')->value[$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']]['name'];?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="label">题目标题：</td>
                <td>
                    <textarea rows="3" cols="3" name="title" placeholder="题目标题" style="width: 400px"><?php echo $_smarty_tpl->getVariable('timu')->value['title'];?>
</textarea>
                </td>
            </tr>
            <tr>
                <td class="label">题目类型：</td>
                <td>
                    <select name="type" id="type">
                        <option value="1" <?php if ($_smarty_tpl->getVariable('timu')->value['type']==1){?>selected<?php }?>>选择题</option>
                        <option value="2" <?php if ($_smarty_tpl->getVariable('timu')->value['type']==2){?>selected<?php }?>>判断题</option>
                    </select>
                </td>
            </tr>
        </table>
        <div id="choice" <?php if ($_smarty_tpl->getVariable('timu')->value['type']==2){?>style="display: none"<?php }?>>>
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="choice[A]" value="<?php echo $_smarty_tpl->getVariable('choice')->value['A']['name'];?>
" size="55" />
                        <input name="choice[correct]" type="radio" value="A" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='A'){?>checked <?php }?> />
                    </td>
                </tr>
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="choice[B]" value="<?php echo $_smarty_tpl->getVariable('choice')->value['B']['name'];?>
" size="55" />
                        <input name="choice[correct]" type="radio" value="B" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='B'){?>checked <?php }?> />
                    </td>
                </tr>
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="choice[C]" value="<?php echo $_smarty_tpl->getVariable('choice')->value['C']['name'];?>
" size="55" />
                        <input name="choice[correct]" type="radio" value="C" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='C'){?>checked <?php }?> />
                    </td>
                </tr>
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="choice[D]" value="<?php echo $_smarty_tpl->getVariable('choice')->value['D']['name'];?>
" size="55" />
                        <input name="choice[correct]" type="radio" value="D" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='D'){?>checked <?php }?> />
                    </td>
                </tr>
            </table>
        </div>


        <div id="judge" <?php if ($_smarty_tpl->getVariable('timu')->value['type']==2){?>style="display: "<?php }else{ ?>style="display: none"<?php }?>>>
            <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="judge[A]" value="<?php echo $_smarty_tpl->getVariable('judge')->value['A']['name'];?>
" size="55" />
                        <input name="judge[correct]" type="radio" value="A" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='A'){?>checked <?php }?> />
                    </td>
                </tr>
                <tr>
                    <td class="label">选项：</td>
                    <td>
                        <input type="text" name="judge[B]" value="<?php echo $_smarty_tpl->getVariable('judge')->value['B']['name'];?>
" size="55" />
                        <input name="judge[correct]" type="radio" value="B" <?php if ($_smarty_tpl->getVariable('timu')->value['correct']=='B'){?>checked <?php }?> />
                    </td>
                </tr>
            </table>
        </div>
        <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" name="action" />
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" name="now_page" />
                    <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('timu')->value['timuid'];?>
" name="timuid" />
                    <input type="submit" value="确定">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>
