<?php
/**
 * Created by PhpStorm.
 * User: xkq
 * Date: 2017/11/10 0010
 * Time: 22:38
 */

set_include_path(dirname(dirname(__FILE__)));
include_once("inc/init.php");
if (!session_id()) session_start();
$action = crequest("action");
$action = $action == '' ? 'list' : $action;

switch ($action)
{
    case "list":
        position_apply_list();
        break;
    case "mod_position_apply":
        mod_position_apply();
        break;
    case "do_mod_position_apply":
        do_mod_position_apply();
        break;
    case "del_position_apply":
        del_position_apply();
        break;
    case "del_sel_position_apply":
        del_sel_position_apply();
        break;
    case "upload_batch_photo";
        upload_batch_photo();
        break;
    case "region";
        region();
        break;
    case "mod_shelves";
        mod_shelves();
        break;


}

/*------------------------------------------------------ */
//-- 岗位列表
/*------------------------------------------------------ */
function position_apply_list()
{
    global $db, $smarty;
    //搜索条件
    $schoolid = $_COOKIE['schoolid'];
    $con = "WHERE is_delete=0 and schoolid = '{$schoolid}'";
    $keyword 	= crequest('keyword');
    if($keyword){
        $sql 		= "SELECT id FROM system_setting_value WHERE value like '%$keyword%'";
        $job 		= $db->get_all($sql);
        if(!empty($job)){
            foreach($job as $k=>$v){
                $jobs[] = $v['id'];
                $jobid = implode(',',$jobs);
            }
        }
        $con.=" and positionid IN ({$jobid})";
    }

    $smarty->assign('keyword'    ,   $keyword);
    $order 	 	= 'ORDER BY status ASC, id DESC';
    //列表信息
    $now_page 	= irequest('page');
    $now_page 	= $now_page == 0 ? 1 : $now_page;
    $page_size 	= 30;
    $start    	= ($now_page - 1) * $page_size;
    $sql 		= "SELECT * FROM position_apply {$con} {$order} LIMIT {$start},{$page_size}";
    $arr 		= $db->get_all($sql);

    foreach($arr as $key=>$val){
        //期望工作
        $position_apply_work = get_system_setting_value($val['positionid']);
        $arr[$key]['position_apply_work'] = $position_apply_work['value'];

        $school = get_school_name($val['schoolid']);
        $arr[$key]['school'] = $school;

        //会员信息
        $sql 		= "SELECT * FROM user WHERE userid = '{$val['userid']}'";
        $user 		= $db->get_row($sql);
        $arr[$key]['user'] = $user;

        //学历
        $education = get_system_setting_value( $arr[$key]['user']['education']);
        $arr[$key]['education'] = $education['value'];

    }
    $sql 		= "SELECT COUNT(id) FROM position_apply {$con}";
    $total 		= $db->get_one($sql);
    $page     	= new page(array('total'=>$total, 'page_size'=>$page_size));
    $smarty->assign('position_apply_list',$arr);
    $smarty->assign('pageshow',$page->show(6));
    $smarty->assign('now_page',$page->now_page);

    $smarty->assign('page_title', '岗位招聘列表');
    $smarty->display('position_apply/position_apply_list.htm');
}

/*------------------------------------------------------ */
//-- 添加岗位
/*------------------------------------------------------ */
/*function add_position_apply()
{
    global $smarty;
    $smarty->assign('school', get_school());
    $smarty->assign('position_apply_work', get_system_setting(1));
    $smarty->assign('salary', get_system_setting(2));
    $smarty->assign('education', get_system_setting(4));
    $smarty->assign('working_years', get_system_setting(5));
    $smarty->assign('action', 'do_add_position_apply');
    $smarty->assign('page_title', '添加幼教机构');
    $smarty->display('position_apply/position_apply.htm');
}*/

/*------------------------------------------------------ */
//-- 添加岗位
/*------------------------------------------------------ */
/*function do_add_position_apply()
{
    global $db, $smarty;
    $data=$_POST['info'];
    $data['add_time'] = time();
    $data['add_time_format'] = now_time();
    check_null($data['schoolid']  	,   '幼教机构');

    $sql = "SELECT * FROM school WHERE id = '{$data['schoolid']}' and is_delete=0";
    $school = $db->get_row($sql);
    $data['logo'] = $school['logo'];
    $data['region'] = $school['region'];
    $data['regionid'] = $school['regionid'];
    $data['logo'] = $school['logo'];
    $data['lng'] = $school['lng'];
    $data['lat'] = $school['lat'];
    $data['school_type'] = $school['type'];
    $id = $db->insert('position_apply',$data);
    if($id){
        $info['count_released'] = $school['count_released'] + 1;
        $db->update('school',$info,"id = '{$data['schoolid']}'");
        $aid  = $_SESSION['admin_id'];
        $text = '添加幼教机构，添加幼教机构ID：' . $id;
        operate_log($aid, 'position_apply', 1, $text);
        $url_to = "position_apply.php?action=list";
        url_locate($url_to, '添加成功');
    }else{
        $url_to = "position_apply.php?action=list";
        url_locate($url_to, '添加失败');
    }

}*/

/*------------------------------------------------------ */
//-- 修改岗位
/*------------------------------------------------------ */
function mod_position_apply()
{
    global $db, $smarty;
    $id = irequest('id');
    $sql = "SELECT * FROM position_apply WHERE id = '{$id}' and is_delete =0";
    $position_apply = $db->get_row($sql);
    //期望工作
    $position_apply_work = get_system_setting_value($position_apply['positionid']);
    $position_apply['position_apply_work'] = $position_apply_work['value'];

    $school = get_school_name($position_apply['schoolid']);
    $position_apply['school'] = $school;

    //会员信息
    $sql 		= "SELECT * FROM user WHERE userid = '{$position_apply['userid']}'";
    $user 		= $db->get_row($sql);
    $position_apply['user'] = $user;

    //期望薪资
    $salary = get_system_setting_value($position_apply['user']['salary']);
    $position_apply['salary'] = $salary['value'];
    //学历
    $education = get_system_setting_value($position_apply['user']['education']);
    $position_apply['education'] = $education['value'];
    //工作经验
    $working_years = get_system_setting_value($position_apply['user']['working_years']);
    $position_apply['working_years'] = $working_years['value'];

    //地区
    $sql 		= "SELECT * FROM areas WHERE areaid = '{$position_apply['user']['region']}'";
    $areas 		= $db->get_row($sql);
    $position_apply['region'] = $areas['joinname'];

    $smarty->assign('position_apply', $position_apply);
    $smarty->assign('url_path', URL_PATH);
    $smarty->assign('now_page', irequest('now_page'));
    $smarty->assign('action', 'do_mod_position_apply');
    $smarty->assign('page_title', '修改');
    $smarty->display('position_apply/position_apply.htm');
}

/*------------------------------------------------------ */
//-- 修改岗位
/*------------------------------------------------------ */
function do_mod_position_apply()
{
    global $db;
    $id 	  	= irequest('id');

    $data=$_POST['info'];
    $db->update('position_apply',$data,"id=$id");
    $aid  = $_SESSION['admin_id'];
    $text = '修改幼教机构，修改幼教机构ID：' . $id;
    operate_log($aid, 'position_apply', 2, $text);
    $now_page = irequest('now_page');
    $url_to = "position_apply.php?action=list&page={$now_page}";
    url_locate($url_to, '已处理');
}

/*------------------------------------------------------ */
//-- 删除岗位
/*------------------------------------------------------ */
function del_position_apply()
{
    global $db;
    $id = irequest('id');
    $update_col = "is_delete = '1'";
    $sql = "UPDATE position_apply SET {$update_col} WHERE id = '{$id}'";
    $db->query($sql);
    $aid  = $_SESSION['admin_id'];
    $text = '删除幼教机构，删除幼教机构ID：' . $id;
    operate_log($aid, 'position_apply', 3, $text);
    $now_page = irequest('now_page');
    $url_to = "position_apply.php?action=list&page={$now_page}";
    href_locate($url_to);
}

/*------------------------------------------------------ */
//-- 批量删除岗位
/*------------------------------------------------------ */
function del_sel_position_apply()
{
    global $db;
    $id = crequest('checkboxes');
    if (empty($id))alert_back('请选中需要删除的选项');
    $sql = "SELECT * FROM position_apply WHERE id IN ({$id}) and is_delete =0";
    $position_apply_all = $db->get_all($sql);
    $update_col = "is_delete = '1'";
    foreach($position_apply_all as $key=>$val){
        $sql = "UPDATE position_apply SET {$update_col} WHERE id = '{$val['id']}'";
        $db->query($sql);
    }
    $aid  = $_SESSION['admin_id'];
    $text = '批量删除会员，批量删除会员ID：' . $id;
    operate_log($aid, 'position_apply', 4, $text);
    $now_page = irequest('now_page');
    $url_to = "position_apply.php?action=list&page={$now_page}";
    href_locate($url_to);
}
