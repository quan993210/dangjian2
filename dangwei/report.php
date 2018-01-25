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
$action = $action == '' ? 'report' : $action;

switch ($action)
{
    case "report":
        report();
        break;
    case "report_list":
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


/*------------------------------------------------------
`money` decimal(10,2) DEFAULT NULL COMMENT '党费收缴金额',
  `num` int(11) DEFAULT NULL COMMENT '缴纳党费人数',
  `use_funds` decimal(10,2) DEFAULT NULL COMMENT '使用党建经费',
  `use_money` decimal(10,2) DEFAULT NULL COMMENT '使用党费',
  `paid_dues` int(11) DEFAULT NULL COMMENT '上缴党费百分比',
  `remaining_dues` int(11) DEFAULT NULL COMMENT '剩余党费百分比',
  `honor_country` int(11) DEFAULT NULL COMMENT '国家级荣誉',
  `honor_province` int(11) DEFAULT NULL COMMENT '省级荣誉',
  `honor_city` int(11) DEFAULT NULL COMMENT '市级荣誉',
  `file_country` int(11) DEFAULT NULL COMMENT '国家级稿件',
  `file_province` int(11) DEFAULT NULL COMMENT '省级稿件',
  `file_city` int(11) DEFAULT NULL COMMENT '市级稿件',
----------------------------------------------------- */
function report()
{
    global $db, $smarty;
    $where = "where status = 1";
    $starttime = crequest('starttime');
    $endtime = crequest('endtime');
    $smarty->assign('endtime', $endtime);
    $smarty->assign('starttime', $starttime);

    $time = date('Y-m',strtotime('-1 month'));

    if (!empty($starttime))
    {
        $where .= " AND time >= '{$starttime}' ";
    }
    if (!empty($endtime))
    {
        $where .= " AND time <= '{$endtime}' ";
    }
    if(empty($endtime) && empty($starttime)){
        $where.= " and time='{$time}'";
    }

    $sql = "SELECT sum(money) as money,sum(num) as num,sum(use_funds) as use_funds,sum(use_money) as use_money,sum(honor_country) as honor_country,sum(honor_province) as honor_province,sum(honor_city) as honor_city,sum(file_country) as file_country,sum(file_province) as file_province,sum(file_city) as file_city FROM report {$where}";
    $row = $db->get_row($sql);

    $smarty->assign('report', $row);

    $smarty->assign('page_title', '各党支部'.$time."报表汇总");
    $smarty->display('report/reportAll.htm');
}

/*------------------------------------------------------ */
//-- 新闻列表
/*------------------------------------------------------ */
function report_list()
{
    global $db, $smarty;

    //搜索条件
    $con = "WHERE status = 1";
    //关键字
    $starttime = crequest('starttime');
    $endtime = crequest('endtime');
    $smarty->assign('endtime', $endtime);
    $smarty->assign('starttime', $starttime);

    if (!empty($starttime))
    {
        $stime = strtotime($starttime);
        $con .= " AND tine >= '{$stime}' ";
    }
    if (!empty($endtime))
    {
        $etime = strtotime($endtime);
        $con .= " AND tine <= '{$etime}' ";
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
    foreach($arr as $key=>$val){
        $sql 		= "SELECT * FROM admin WHERE id = '{$val['adminid']}'";
        $admin = $db->get_row($sql);
        $arr[$key]['admin_name'] = $admin['userid'];
    }

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
/*function add_report()
{
    global $smarty;
    $smarty->assign('action', 'do_add_report');
    $smarty->assign('page_title', '添加报表');
    $smarty->display('report/report.htm');
}*/

/*------------------------------------------------------ */
//-- 添加新闻
/*------------------------------------------------------ */
/*function do_add_report()
{
    global $db;
    $adminid  = $_SESSION["admin_id"];
    $info = $_POST['info'];
    $time = $info['time'] = strtotime($info['time']);
    $info['add_time']	= time();
    $info['add_time_format']	= now_time();
    $info['adminid'] = $adminid;
    $sql = "SELECT * FROM report WHERE adminid = '{$adminid}' and time='{$time}'";
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
}*/

/*------------------------------------------------------ */
//-- 修改新闻
/*------------------------------------------------------ */
function mod_report()
{
    global $db, $smarty;

    $id  = irequest('id');
    $sql = "SELECT * FROM report WHERE id = '{$id}'";
    $row = $db->get_row($sql);

    $sql 		= "SELECT * FROM admin WHERE id = '{$row['adminid']}'";
    $admin = $db->get_row($sql);
    $row['admin_name'] = $admin['userid'];

    $smarty->assign('report', $row);

    $now_page = irequest('now_page');
    $smarty->assign('now_page', $now_page);

    $smarty->assign('action', 'do_mod_report');
    $smarty->assign('page_title', $row['admin_name']."党支部".$row['time']."报表详情");
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
function updatel_report()
{
    global $db;

    $id  = irequest('id');

    $update_col = "status = '0'";
    $sql = "UPDATE report SET {$update_col} WHERE id = '{$id}'";
    $db->query($sql);

    $aid  = $_SESSION['dangwei_id'];
    $text = '撤回报表，撤回报表ID：' . $id;
    dangwei_operate_log($aid, 'report', 3, $text);

    $now_page = irequest('now_page');
    $url_to = "report.php?action=list&page={$now_page}";
    href_locate($url_to);
}

/*------------------------------------------------------ */
//-- 批量删除新闻
/*------------------------------------------------------ */
//function del_sel_report()
//{
//    global $db;
//    $id = crequest('checkboxes');
//
//    if ($id == '')
//        alert_back('请选中需要删除的选项');
//
//    /*$sql = "SELECT cover FROM report WHERE id IN ({$id})";
//    $imgs_all = $db->get_all($sql);
//    for ($i = 0; $i < count($imgs_all); $i++)
//    {
//        $cover = $imgs_all[$i]['cover'];
//        del_img($cover);
//    }*/
//
//    $sql = "SELECT * FROM report WHERE id IN ({$id})";
//    $report_all = $db->get_all($sql);
//    $update_col = "is_delete = '1'";
//    foreach($report_all as $key=>$val){
//        $sql = "UPDATE report SET {$update_col} WHERE id = '{$val['id']}'";
//        $db->query($sql);
//    }
//
//    /*	$sql = "DELETE FROM report WHERE id IN ({$id})";
//        $db->query($sql);*/
//
//    $aid  = $_SESSION['admin_id'];
//    $text = '批量删除新闻，批量删除新闻ID：' . $id;
//    operate_log($aid, 'report', 4, $text);
//
//    $now_page = irequest('now_page');
//    $url_to = "report.php?action=list&page={$now_page}";
//    href_locate($url_to);
//}



