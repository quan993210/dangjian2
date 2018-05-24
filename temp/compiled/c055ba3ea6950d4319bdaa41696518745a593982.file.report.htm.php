<?php /* Smarty version Smarty-3.0.6, created on 2018-04-12 16:15:42
         compiled from "/home/wwwroot/default/dangjian2/temp/admin/report/report.htm" */ ?>
<?php /*%%SmartyHeaderCode:2046700345acf15ae7123e7-99415053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c055ba3ea6950d4319bdaa41696518745a593982' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/admin/report/report.htm',
      1 => 1517236648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046700345acf15ae7123e7-99415053',
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
<script type="text/javascript" src="/js/plupload/plupload.full.min.js"></script>

	<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/ueditor/ueditor.all.min.js"> </script>
	<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
	<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
	<script type="text/javascript" charset="utf-8" src="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
/js/ueditor/lang/zh-cn/zh-cn.js"></script>

<script language="javascript">

function select_time()
{
	WdatePicker({dateFmt:'yyyy-MM'})
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
<form name="frm" action="report.php" method="post" enctype="multipart/form-data">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td class="label">标题<em style="color: red">*</em>：</td>
	  <td colspan="6"><input type="text" name="info[title]"  required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['title'];?>
" size="48" /></td>
    </tr>
	<tr>
		<td class="label">报表时间<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[time]" required="required" onclick="return select_time()"  value="<?php echo $_smarty_tpl->getVariable('report')->value['time'];?>
" /></td>
	</tr>

	<tr>
		<td class="label">党费缴纳金额<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[money]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['money'];?>
" size="32" />元</td>
	</tr>
	<tr>
		<td class="label">缴纳党费人数<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[num]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['num'];?>
" size="32" />位</td>
	</tr>
	<tr>
		<td class="label">使用党建经费<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[use_funds]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['use_funds'];?>
" size="32" />元</td>
	</tr>
	<tr>
      <td class="label">使用党费<em style="color: red">*</em>：</td>
	  <td colspan="6"><input type="text" name="info[use_money]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['use_money'];?>
" size="32" />元</td>
    </tr>
	<tr>
		<td class="label">上缴党费百分比<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[paid_dues]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['paid_dues'];?>
" size="32" />%</td>
	</tr>
	<tr>
		<td class="label">余留党费百分比<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[remaining_dues]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['remaining_dues'];?>
" size="32" />%</td>
	</tr>
	<tr>
		<td class="label">获得荣誉（国家级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[honor_country]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_country'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">获得荣誉（省部级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[honor_province]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_province'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">获得荣誉（市厅级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[honor_city]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_city'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">稿件发布（国家级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[file_country]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_country'];?>
" size="32" />篇</td>
	</tr>
	<tr>
		<td class="label">稿件发布（省部级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[file_province]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_province'];?>
" size="32" />篇</td>
	</tr>
	<tr>
		<td class="label">稿件发布（市厅级）<em style="color: red">*</em>：</td>
		<td colspan="6"><input type="text" name="info[file_city]" required="required" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_city'];?>
" size="32" />篇</td>
	</tr>
	<tr>
		<td class="label">附件上传：</td>
		<td><?php if ($_smarty_tpl->getVariable('report')->value['attachment']){?><a href="<?php echo $_smarty_tpl->getVariable('url_path')->value;?>
<?php echo $_smarty_tpl->getVariable('report')->value['attachment'];?>
">附件下载</a><?php }?><input type="file" name="attachment"  value="<?php echo $_smarty_tpl->getVariable('report')->value['attachment'];?>
" size="32" /></td>
	</tr>


    <tr>
      <td colspan="2" align="center">
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('action')->value;?>
" name="action" />
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('now_page')->value;?>
" name="now_page" />
      	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('report')->value['id'];?>
" name="id" />
		  <?php if ($_smarty_tpl->getVariable('action')->value=="do_add_report"||$_smarty_tpl->getVariable('report')->value['status']==0){?>
      	<input type="submit" value="提交">
		  <?php }?>
      </td>
    </tr>
</table>
</form>


<script type="text/javascript">
// Custom example logic
$(document).ready(function(){
	$('#catid').change(function(){
		var catid = $('#catid option:selected').val();
		$.getJSON("report.php?action=checkChild",{ catid: catid}, function(data){
			if(data == 1){
				alert("请选择子分类！");
				$("#catid").val("0");
				return;
			}
		});
	})

	$('#type').change(function(){
		var type = $('#type option:selected').val();
		if(type == 0){
			$('#img').css('display','nono');
		}else if(type == 1){
			$('#img').css('display','');
			$('#img1').css('display','');
			$('#img2').css('display','none');
			$('#img3').css('display','none');
		}else if(type == 2){
			$('#img').css('display','');
			$('#img1').css('display','');
			$('#img2').css('display','none');
			$('#img3').css('display','none');
		}else if(type == 3){
			$('#img').css('display','');
			$('#img1').css('display','');
			$('#img2').css('display','');
			$('#img3').css('display','');
		}

	})
})

var uploader = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'pic_image1', // you can pass in id...
	url : 'report.php?action=upload_batch_photo&dir_type=image&upload_name=pic',
	flash_swf_url : '/js/plupload/Moxie.swf',
	silverlight_xap_url : '/js/plupload/Moxie.xap',
	file_data_name : 'pic',
	multi_selection : false,

	filters : {
		max_file_size : '10mb',
		mime_types: [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		]
	},

	init: {
		FilesAdded: function(up, files) {

			plupload.each(files, function(file) {
				var html = '<tr id="' + file.id + '">';
				html += '<td width="200" align="left">' + file.name + '</td>';
				html += '<td width="100" align="center">' + plupload.formatSize(file.size) + '</td>';
				html += '<td width="100" align="center" id="' + file.id + '_progress"></td>';
				html += '</tr>';

			});

			uploader.start();
		},

		UploadProgress: function(up, file) {
			$("#" + file.id + "_progress").html(file.percent + "%");
		},

		FileUploaded: function(up, file, data) {
			var dataObj = eval("(" + data.response + ")");
			$("#image1").val(dataObj.pic_path);
			$("#upload_image1").attr("src", dataObj.pic_path);
		},

		Error: function(up, err) {
			document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
		}
	}
});
var uploader1 = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'pic_image2', // you can pass in id...
	url : 'report.php?action=upload_batch_photo&dir_type=image&upload_name=pic',
	flash_swf_url : '/js/plupload/Moxie.swf',
	silverlight_xap_url : '/js/plupload/Moxie.xap',
	file_data_name : 'pic',
	multi_selection : false,

	filters : {
		max_file_size : '10mb',
		mime_types: [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		]
	},

	init: {
		FilesAdded: function(up, files) {

			plupload.each(files, function(file) {
			});

			uploader1.start();
		},

		UploadProgress: function(up, file) {
		},

		FileUploaded: function(up, file, data) {
			var dataObj = eval("(" + data.response + ")");
			$("#image2").val(dataObj.pic_path);
			$("#upload_image2").attr("src", dataObj.pic_path);
		},

		Error: function(up, err) {
			document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
		}
	}
});
var uploader2 = new plupload.Uploader({
	runtimes : 'html5,flash,silverlight,html4',
	browse_button : 'pic_image3', // you can pass in id...
	url : 'report.php?action=upload_batch_photo&dir_type=image&upload_name=pic',
	flash_swf_url : '/js/plupload/Moxie.swf',
	silverlight_xap_url : '/js/plupload/Moxie.xap',
	file_data_name : 'pic',
	multi_selection : false,

	filters : {
		max_file_size : '10mb',
		mime_types: [
			{title : "Image files", extensions : "jpg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		]
	},

	init: {
		FilesAdded: function(up, files) {

			plupload.each(files, function(file) {
			});

			uploader2.start();
		},

		UploadProgress: function(up, file) {
		},

		FileUploaded: function(up, file, data) {
			var dataObj = eval("(" + data.response + ")");
			$("#image3").val(dataObj.pic_path);
			$("#upload_image3").attr("src", dataObj.pic_path);
		},

		Error: function(up, err) {
			document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
		}
	}
});




uploader.init();
uploader1.init();
uploader2.init();



function print_array(arr){
	for(var key in arr){
		if(typeof(arr[key])=='array'||typeof(arr[key])=='object'){//递归调用
			print_array(arr[key]);
		}else{
			document.write(key + ' = ' + arr[key] + '<br>');
		}
	}
}
</script>

</div>
</body>
</html>
