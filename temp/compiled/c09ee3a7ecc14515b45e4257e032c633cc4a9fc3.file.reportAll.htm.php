<?php /* Smarty version Smarty-3.0.6, created on 2018-04-12 16:14:13
         compiled from "/home/wwwroot/default/dangjian2/temp/dangwei/report/reportAll.htm" */ ?>
<?php /*%%SmartyHeaderCode:21469621685acf15557dc456-93027618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c09ee3a7ecc14515b45e4257e032c633cc4a9fc3' => 
    array (
      0 => '/home/wwwroot/default/dangjian2/temp/dangwei/report/reportAll.htm',
      1 => 1517066265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21469621685acf15557dc456-93027618',
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
	<div class="form-div">
		<form action="" name="searchForm" onsubmit="">
			<input type="text" onclick="return select_time()" name="starttime" placeholder="请选择开始时间" value="<?php echo $_smarty_tpl->getVariable('starttime')->value;?>
" size="15" />-
			<input type="text" onclick="return select_time()" name="endtime" placeholder="请选择结束时间" value="<?php echo $_smarty_tpl->getVariable('endtime')->value;?>
" size="15" />
			<input type="submit" value="搜索" class="button" />
			<a href="report.php?action=export&starttime=<?php echo $_smarty_tpl->getVariable('starttime')->value;?>
&endtime=<?php echo $_smarty_tpl->getVariable('endtime')->value;?>
" style="height: 19px;background: #DDDDDD; border: 1px #DDDDDD solid;padding: 2px 8px 0px;display: inline-block;">导出</a>
		</form>
	</div>
<form name="frm" action="report.php" method="post" enctype="multipart/form-data">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1">
	<tr>
		<td class="label">党费缴纳金额：</td>
		<td colspan="6"><input type="text" name="info[money]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['money'];?>
" size="32" />元</td>
	</tr>
	<tr>
		<td class="label">缴纳党费人数：</td>
		<td colspan="6"><input type="text" name="info[num]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['num'];?>
" size="32" />位</td>
	</tr>
	<tr>
		<td class="label">使用党建经费：</td>
		<td colspan="6"><input type="text" name="info[use_funds]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['use_funds'];?>
" size="32" />元</td>
	</tr>
	<tr>
      <td class="label">使用党费：</td>
	  <td colspan="6"><input type="text" name="info[use_money]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['use_money'];?>
" size="32" />元</td>
    </tr>
	<tr>
		<td class="label">获得荣誉（国家级）：</td>
		<td colspan="6"><input type="text" name="info[honor_country]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_country'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">获得荣誉（省部级）：</td>
		<td colspan="6"><input type="text" name="info[honor_province]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_province'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">获得荣誉（市厅级）：</td>
		<td colspan="6"><input type="text" name="info[honor_city]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['honor_city'];?>
" size="32" />个</td>
	</tr>
	<tr>
		<td class="label">稿件发布（国家级）：</td>
		<td colspan="6"><input type="text" name="info[file_country]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_country'];?>
" size="32" />篇</td>
	</tr>
	<tr>
		<td class="label">稿件发布（省部级）：</td>
		<td colspan="6"><input type="text" name="info[file_province]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_province'];?>
" size="32" />篇</td>
	</tr>
	<tr>
		<td class="label">稿件发布（市厅级）：</td>
		<td colspan="6"><input type="text" name="info[file_city]" readonly="readonly" value="<?php echo $_smarty_tpl->getVariable('report')->value['file_city'];?>
" size="32" />篇</td>
	</tr>


    <tr>
      <td colspan="2" align="center"><a href="report.php?action=report_list&starttime=<?php echo $_smarty_tpl->getVariable('starttime')->value;?>
&endtime=<?php echo $_smarty_tpl->getVariable('endtime')->value;?>
">查询具体报表</a></td>
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
