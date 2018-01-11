
<?php
/**
 * Created by PhpStorm.
 * User: xkq
 * Date: 2017/8/4 0004
 * Time: 20:49
 */
set_include_path(dirname(dirname(__FILE__)));
include_once("inc/init.php");
if (!session_id()) session_start();

$action = crequest("action");
$action = $action == '' ? 'list' : $action;

switch ($action)
{
	case "list":
		member_list();
		break;
	case "add_member":
		add_member();
		break;
	case "do_add_member":
		do_add_member();
		break;
	case "mod_member":
		mod_member();
		break;
	case "do_mod_member":
		do_mod_member();
		break;
	case "del_member":
		del_member();
		break;
	case "del_sel_member":
		del_sel_member();
		break;
}

function get_con()
{
	global $smarty;

	//文章分类

	$con= "WHERE is_delete = '0'";
	//关键字
	$keyword = crequest('keyword');
	$smarty->assign('keyword', $keyword);
	if (!empty($keyword))
	{
		$con = " AND (name like '%{$keyword}%' or brief like '%{$keyword}%' or captain like '%{$keyword}%')";
	}


	return $con;
}


function member_list()
{
	global $db, $smarty;
	$adminid  = $_SESSION["admin_id"];
	//搜索条件
	$search_cat = irequest('search_cat');
	$keyword 	= crequest('keyword');

	switch ($search_cat)
	{
		case 1:
			$con = "WHERE nickname LIKE '%{$keyword}%' and is_delete=0 and adminid = $adminid";
			break;
		case 2:
			$con = "WHERE name LIKE '%{$keyword}%' and is_delete=0 and adminid = $adminid";
			break;
		case 3:
			$con = "WHERE mobile LIKE '%{$keyword}%' and is_delete=0 and adminid = $adminid";
			break;
		default:
			$con = "WHERE is_delete=0 and adminid = $adminid";
			$search_cat = 0;
			$keyword = '';
			break;
	}

	$smarty->assign('search_cat' ,   $search_cat);
	$smarty->assign('keyword'    ,   $keyword);

	$order 	 	= 'ORDER BY userid DESC';

	//列表信息
	$now_page 	= irequest('page');
	$now_page 	= $now_page == 0 ? 1 : $now_page;
	$page_size 	= 30;
	$start    	= ($now_page - 1) * $page_size;
	$sql 		= "SELECT * FROM member {$con} {$order} LIMIT {$start},{$page_size}";
	$arr 		= $db->get_all($sql);

	$sql 		= "SELECT COUNT(userid) FROM ".PREFIX."member {$con}";
	$total 		= $db->get_one($sql);
	$page     	= new page(array('total'=>$total, 'page_size'=>$page_size));

	$smarty->assign('member_list',$arr);
	$smarty->assign('pageshow',$page->show(6));
	$smarty->assign('now_page',$page->now_page);

	$smarty->assign('page_title', '用户列表');
	$smarty->display('member/member_list.htm');
}


function add_member()
{
	global $smarty;
	$smarty->assign('info', get_member_info());
	$smarty->assign('action', 'do_add_member');
	$smarty->assign('page_title', '添加用户');
	$smarty->display('member/member.htm');
}


function do_add_member()
{
	global $db, $smarty;
	$adminid  = $_SESSION["admin_id"];
	$info = $_POST['member'];
	$info['adminid'] = $adminid;


	$info['add_time']	= time();
	$info['add_time_format']	= now_time();

	check_null($info['name']  	,   '用户名');
	check_null($info['mobile']  	,   '手机号');
	$sql = "SELECT * FROM member WHERE mobile = '{$info['mobile']}'";
	$member = $db->get_row($sql);
	if($member){
		alert_back('系统已存在该手机号，请勿重复添加！');
	}

	$id = $db->insert('member',$info);
	$aid  = $_SESSION['admin_id'];
	$text = '添加用户，添加用户ID：' . $id;
	operate_log($aid, 'member', 1, $text);

	$url_to = "member.php?action=list";
	url_locate($url_to, '添加成功');
}


function mod_member()
{
	global $db, $smarty;

	$userid = irequest('userid');
	$sql = "SELECT * FROM member WHERE userid = '{$userid}'";
	$member = $db->get_row($sql);
	$smarty->assign('member', $member);
	$smarty->assign('url_path', URL_PATH);
	$smarty->assign('info', get_member_info());
	$smarty->assign('now_page', irequest('now_page'));
	$smarty->assign('action', 'do_mod_member');
	$smarty->assign('page_title', '修改用户');
	$smarty->display('member/member.htm');
}


function do_mod_member()
{
	global $db;
	$info = $_POST['member'];

	check_null($info['name']  	,   '用户名');
	check_null($info['mobile']  	,   '手机号');
	$userid 	  	= irequest('userid');
	$sql = "SELECT * FROM member WHERE mobile = '{$info['mobile']}'";
	$member = $db->get_row($sql);
	if($member && $member['userid'] != $userid){
		alert_back('系统已存在该手机号，请勿重复添加！');
	}

	$db->update('member',$info,"userid=$userid");

	$aid  = $_SESSION['admin_id'];
	$text = '修改用户，修改用户ID：' . $userid;
	operate_log($aid, 'member', 2, $text);

	$now_page = irequest('now_page');
	$url_to = "member.php?action=list&page={$now_page}";
	url_locate($url_to, '修改成功');
}


function del_member()
{
	global $db;

	$userid = irequest('userid');
	/*$sql = "DELETE FROM member WHERE userid = '{$userid}'";
	$db->query($sql);*/

	$update_col = "is_delete = '1'";
	$sql = "UPDATE member SET {$update_col} WHERE userid = '{$userid}'";
	$db->query($sql);

	$aid  = $_SESSION['admin_id'];
	$text = '删除用户，删除用户ID：' . $userid;
	operate_log($aid, 'member', 3, $text);

	$now_page = irequest('now_page');
	$url_to = "member.php?action=list&page={$now_page}";
	href_locate($url_to);
}


function del_sel_member()
{
	global $db;

	$userid = crequest('checkboxes');
	if (empty($userid))alert_back('请选中需要删除的选项');

	/*$sql = "DELETE FROM member WHERE userid IN ({$userid})";
	$db->query($sql);*/

	$sql = "SELECT * FROM member WHERE userid IN ({$userid})";
	$member_all = $db->get_all($sql);
	$update_col = "is_delete = '1'";
	foreach($member_all as $key=>$val){
		$sql = "UPDATE member SET {$update_col} WHERE userid = '{$val['userid']}'";
		$db->query($sql);
	}

	$aid  = $_SESSION['admin_id'];
	$text = '批量删除会员，批量删除会员ID：' . $userid;
	operate_log($aid, 'member', 4, $text);

	$now_page = irequest('now_page');
	$url_to = "member.php?action=list&page={$now_page}";
	href_locate($url_to);
}


function get_member_info(){
	$info['identity'] = ['选择身份','正式党员','预备党员','积极分子','群众','发展对象'];
	$info['position'] = ['选择职位','固定党员','一般党员'];
	return $info;
}

?>

