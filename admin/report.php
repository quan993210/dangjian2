<?php
/**
 * Created by PhpStorm.
 * User: xkq
 * Date: 2018/1/22 0022
 * Time: 21:28
 */
set_include_path(dirname(dirname(__FILE__)));
include_once("inc/init.php");

$action = crequest("action");
$action = $action == '' ? 'list' : $action;

switch ($action)
{
    case "list":
        report_list();
        break;
    case "add_report":
        add_report();
        break;
    case "do_add_report":
        do_add_report();
        break;
    case "mod_report":
        mod_report();
        break;
    case "do_mod_report":
        do_mod_report();
        break;
    case "del_report":
        del_report();
        break;
    case "del_sel_report":
        del_sel_report();
        break;

}

/*------------------------------------------------------ */
//-- 新闻列表
/*------------------------------------------------------ */
function report_list()
{
    global $db, $smarty;

    //搜索条件
    $adminid  = $_SESSION["admin_id"];
    $con = "WHERE status = 1 and adminid = $adminid";
    //关键字
    $keyword = crequest('keyword');
    $starttime = crequest('starttime');
    $endtime = crequest('endtime');
    $smarty->assign('endtime', $endtime);
    $smarty->assign('starttime', $starttime);
    if (!empty($keyword))
    {
        $con .= " AND title like '{%$keyword%}' ";
    }
    if (!empty($starttime))
    {
        $con .= " AND time >= '{$starttime}' ";
    }
    if (!empty($endtime))
    {
        $con .= " AND time <= '{$endtime}' ";
    }
    //排序字段
    $order 	 	 = 'ORDER BY id DESC';

    //列表信息
    $now_page 	= irequest('page');
    $now_page 	= $now_page == 0 ? 1 : $now_page;
    $page_size 	= 20;
    $start    	= ($now_page - 1) * $page_size;
    $sql 		= "SELECT * FROM report {$con} {$order} LIMIT {$start}, {$page_size}";
    $arr 		= $db->get_all($sql);

    $sql 		= "SELECT COUNT(id) FROM report {$con}";
    $total 		= $db->get_one($sql);
    $page     	= new page(array('total'=>$total, 'page_size'=>$page_size));

    $smarty->assign('report_list'  ,   $arr);
    $smarty->assign('pageshow'  ,   $page->show(6));
    $smarty->assign('now_page'  ,   $page->now_page);

    $smarty->assign('page_title', '报表列表');
    $smarty->display('report/report_list.htm');
}

/*------------------------------------------------------ */
//-- 添加新闻
/*------------------------------------------------------ */
function add_report()
{
    global $smarty;
    $smarty->assign('action', 'do_add_report');
    $smarty->assign('page_title', '添加报表');
    $smarty->display('report/report.htm');
}

/*------------------------------------------------------ */
//-- 添加新闻
/*------------------------------------------------------ */
function do_add_report()
{
    global $db;
    $adminid  = $_SESSION["admin_id"];
    $info = $_POST['info'];
    $info['add_time']	= time();
    $info['add_time_format']	= now_time();
    $info['adminid'] = $adminid;
    $sql = "SELECT * FROM report WHERE adminid = '{$adminid}' and time='{$info['time']}'";
    $report = $db->get_row($sql);
    if($report){
        alert_back('同时间段报表只能提交一次');
    }
    $reportid = $db->insert('report',$info);
    $aid  = $_SESSION['admin_id'];
    $text = '添加报表，添加报表ID：' . $reportid;
    operate_log($aid, 'report', 1, $text);

    $url_to = "report.php?action=list";
    url_locate($url_to, '添加成功');
}

/*------------------------------------------------------ */
//-- 修改新闻
/*------------------------------------------------------ */
function mod_report()
{
    global $db, $smarty;

    $id  = irequest('id');
    $sql = "SELECT * FROM report WHERE id = '{$id}'";
    $row = $db->get_row($sql);

    $smarty->assign('report', $row);

    $now_page = irequest('now_page');
    $smarty->assign('now_page', $now_page);

    $smarty->assign('action', 'do_mod_report');
    $smarty->assign('page_title', '报表详情');
    $smarty->display('report/report.htm');
}

/*------------------------------------------------------ */
//-- 修改新闻
/*------------------------------------------------------ */
/*function do_mod_report()
{
    global $db;
    $info = $_POST['info'];
    $lables = $_POST['lables'];
    $info['lables'] = implode(',',$lables);
    check_null($info['title'], 			'标题');
    $id = irequest('id');
    $db->update('report',$info,"id='{$id}'");
    unset($_SESSION['image1'],$_SESSION['image2'],$_SESSION['image3']);
    $aid  = $_SESSION['admin_id'];
    $text = '修改新闻，修改新闻ID：' . $id;
    operate_log($aid, 'report', 2, $text);

    $now_page = irequest('now_page');
    $url_to = "report.php?action=list&page={$now_page}";
    url_locate($url_to, '修改成功');
}*/

/*------------------------------------------------------ */
//-- 删除新闻
/*------------------------------------------------------ */
function del_report()
{
    global $db;

    $id  = irequest('id');
    /*$sql = "SELECT cover FROM report WHERE id = '{$id}'";
    $row = $db->get_row($sql);
    del_img($row['cover']);*/

    /*$sql = "DELETE FROM report WHERE id = '{$id}'";
    $db->query($sql);*/

    $update_col = "is_delete = '1'";
    $sql = "UPDATE report SET {$update_col} WHERE id = '{$id}'";
    $db->query($sql);

    $aid  = $_SESSION['admin_id'];
    $text = '删除新闻，删除新闻ID：' . $id;
    operate_log($aid, 'report', 3, $text);

    $now_page = irequest('now_page');
    $url_to = "report.php?action=list&page={$now_page}";
    href_locate($url_to);
}

/*------------------------------------------------------ */
//-- 批量删除新闻
/*------------------------------------------------------ */
function del_sel_report()
{
    global $db;
    $id = crequest('checkboxes');

    if ($id == '')
        alert_back('请选中需要删除的选项');

    /*$sql = "SELECT cover FROM report WHERE id IN ({$id})";
    $imgs_all = $db->get_all($sql);
    for ($i = 0; $i < count($imgs_all); $i++)
    {
        $cover = $imgs_all[$i]['cover'];
        del_img($cover);
    }*/

    $sql = "SELECT * FROM report WHERE id IN ({$id})";
    $report_all = $db->get_all($sql);
    $update_col = "is_delete = '1'";
    foreach($report_all as $key=>$val){
        $sql = "UPDATE report SET {$update_col} WHERE id = '{$val['id']}'";
        $db->query($sql);
    }

    /*	$sql = "DELETE FROM report WHERE id IN ({$id})";
        $db->query($sql);*/

    $aid  = $_SESSION['admin_id'];
    $text = '批量删除新闻，批量删除新闻ID：' . $id;
    operate_log($aid, 'report', 4, $text);

    $now_page = irequest('now_page');
    $url_to = "report.php?action=list&page={$now_page}";
    href_locate($url_to);
}

