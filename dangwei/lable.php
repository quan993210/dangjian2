<?php
/**
 * Created by PhpStorm.
 * User: xkq
 * Date: 2017/11/6
 * Time: 9:03
 * 岗位招聘
 */
set_include_path(dirname(dirname(__FILE__)));
include_once("inc/init.php");
if (!session_id()) session_start();
$action = crequest("action");
$action = $action == '' ? 'list' : $action;

switch ($action)
{
    case "list":
        position_list();
        break;
    case "add_position":
        add_position();
        break;
    case "do_add_position":
        do_add_position();
        break;
    case "mod_position":
        mod_position();
        break;
    case "do_mod_position":
        do_mod_position();
        break;
    case "del_position":
        del_position();
        break;
    case "del_sel_position":
        del_sel_position();
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
function position_list()
{
    global $db, $smarty;
    //搜索条件
    $schoolid = $_COOKIE['schoolid'];
    $con = "WHERE is_delete=0 and schoolid='{$schoolid}'";
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
    $order 	 	= 'ORDER BY status ASC, is_top ASC ,id DESC';
    //列表信息
    $now_page 	= irequest('page');
    $now_page 	= $now_page == 0 ? 1 : $now_page;
    $page_size 	= 30;
    $start    	= ($now_page - 1) * $page_size;
    $sql 		= "SELECT * FROM position_info {$con} {$order} LIMIT {$start},{$page_size}";
    $arr 		= $db->get_all($sql);

    foreach($arr as $key=>$val){
        $school = get_school_name($val['schoolid']);
        $arr[$key]['schoolname'] = $school['name'];
        //期望工作
        $position_work = get_system_setting_value($val['positionid']);
        $arr[$key]['position_work'] = $position_work['value'];
        //期望薪资
        $salary = get_system_setting_value($val['salaryid']);
        $arr[$key]['salary'] = $salary['value'];
        //学历
        $education = get_system_setting_value($val['educationid']);
        $arr[$key]['education'] = $education['value'];
        //工作经验
        $working_years = get_system_setting_value($val['working_years_id']);
        $arr[$key]['working_years'] = $working_years['value'];

        $sql 		= "SELECT COUNT(id) FROM position_apply WHERE positionid = '{$val['id']}' and status =1";
        $arr[$key]['apply_total'] 		= $db->get_one($sql);



    }
    $sql 		= "SELECT COUNT(id) FROM position_info {$con}";
    $total 		= $db->get_one($sql);
    $page     	= new page(array('total'=>$total, 'page_size'=>$page_size));
    $smarty->assign('position_list',$arr);
    $smarty->assign('pageshow',$page->show(6));
    $smarty->assign('now_page',$page->now_page);

    $smarty->assign('page_title', '岗位招聘列表');
    $smarty->display('position/position_list.htm');
}

/*------------------------------------------------------ */
//-- 添加岗位
/*------------------------------------------------------ */
function add_position()
{
    global $smarty, $db;
    $schoolid = $_COOKIE['schoolid'];
    $sql = "SELECT id,name FROM school WHERE is_delete = 0 and id= '{$schoolid}'  ORDER BY id ASC";
    $school = $db->get_row($sql);
    $smarty->assign('school', $school);
    $smarty->assign('position_work', get_system_setting(1));
    $smarty->assign('salary', get_system_setting(2));
    $smarty->assign('education', get_system_setting(4));
    $smarty->assign('working_years', get_system_setting(5));
    $smarty->assign('action', 'do_add_position');
    $smarty->assign('page_title', '添加幼教机构');
    $smarty->display('position/position.htm');
}

/*------------------------------------------------------ */
//-- 添加岗位
/*------------------------------------------------------ */
function do_add_position()
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
    $id = $db->insert('position_info',$data);
    if($id){
        $info['count_released'] = $school['count_released'] + 1;
        $db->update('school',$info,"id = '{$data['schoolid']}'");
        $aid  = $_SESSION['admin_id'];
        $text = '添加幼教机构，添加幼教机构ID：' . $id;
        operate_log($aid, 'position_info', 1, $text);
        $url_to = "position.php?action=list";
        url_locate($url_to, '添加成功');
    }else{
        $url_to = "position.php?action=list";
        url_locate($url_to, '添加失败');
    }

}

/*------------------------------------------------------ */
//-- 修改岗位
/*------------------------------------------------------ */
function mod_position()
{
    global $db, $smarty;
    $id = irequest('id');
    $sql = "SELECT * FROM position_info WHERE id = '{$id}' and is_delete =0";
    $position = $db->get_row($sql);
    $smarty->assign('position', $position);
    $schoolid = $_COOKIE['schoolid'];
    $sql = "SELECT id,name FROM school WHERE is_delete = 0 and id= '{$schoolid}'  ORDER BY id ASC";
    $school = $db->get_row($sql);
    $smarty->assign('school', $school);
    $smarty->assign('position_work', get_system_setting(1));
    $smarty->assign('salary', get_system_setting(2));
    $smarty->assign('education', get_system_setting(4));
    $smarty->assign('working_years', get_system_setting(5));
    $smarty->assign('url_path', URL_PATH);
    $smarty->assign('now_page', irequest('now_page'));
    $smarty->assign('action', 'do_mod_position');
    $smarty->assign('page_title', '修改');
    $smarty->display('position/position.htm');
}

/*------------------------------------------------------ */
//-- 修改岗位
/*------------------------------------------------------ */
function do_mod_position()
{
    global $db;
    $id 	  	= irequest('id');

    $data=$_POST['info'];
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
    $db->update('position_info',$data,"id=$id");
    $aid  = $_SESSION['admin_id'];
    $text = '修改幼教机构，修改幼教机构ID：' . $id;
    operate_log($aid, 'position', 2, $text);
    $now_page = irequest('now_page');
    $url_to = "position.php?action=list&page={$now_page}";
    url_locate($url_to, '修改成功');
}

/*------------------------------------------------------ */
//-- 删除岗位
/*------------------------------------------------------ */
function del_position()
{
    global $db;
    $id = irequest('id');
    $update_col = "is_delete = '1'";
    $sql = "UPDATE position_info SET {$update_col} WHERE id = '{$id}'";
    $db->query($sql);
    $aid  = $_SESSION['admin_id'];
    $text = '删除幼教机构，删除幼教机构ID：' . $id;
    operate_log($aid, 'position', 3, $text);
    $now_page = irequest('now_page');
    $url_to = "position.php?action=list&page={$now_page}";
    href_locate($url_to);
}

/*------------------------------------------------------ */
//-- 批量删除岗位
/*------------------------------------------------------ */
function del_sel_position()
{
    global $db;
    $id = crequest('checkboxes');
    if (empty($id))alert_back('请选中需要删除的选项');
    $sql = "SELECT * FROM position_info WHERE id IN ({$id}) and is_delete =0";
    $position_all = $db->get_all($sql);
    $update_col = "is_delete = '1'";
    foreach($position_all as $key=>$val){
        $sql = "UPDATE position_info SET {$update_col} WHERE id = '{$val['id']}'";
        $db->query($sql);
    }
    $aid  = $_SESSION['admin_id'];
    $text = '批量删除会员，批量删除会员ID：' . $id;
    operate_log($aid, 'position', 4, $text);
    $now_page = irequest('now_page');
    $url_to = "position.php?action=list&page={$now_page}";
    href_locate($url_to);
}

function mod_shelves(){
    global $db;
    $status = intval(trim($_GET['status']));
    $id = intval(trim($_GET['id']));
    $sql = "UPDATE position_info SET status='{$status}' WHERE id = '{$id}'";
    $db->query($sql);
    $now_page = irequest('now_page');
    $url_to = "position.php?action=list&page={$now_page}";
    url_locate($url_to, '操作成功');
}


function get_school()
{
    global $db;
    $sql = "SELECT id,name FROM school WHERE is_delete = 0  ORDER BY id ASC";
    $school = $db->get_all($sql);
    if(empty($school)){
        alert_null('请先添加幼教机构');
    }
    return $school;
}

function get_system_setting($system_setting_id)
{
    global $db;
    $sql = "SELECT * FROM system_setting_value WHERE system_setting_id ='{$system_setting_id}' ORDER BY id ASC";
    $res = $db->get_all($sql);
    if(empty($res)){
        if($system_setting_id == 1){
            alert_null('请先添加系统期望职位');
        }elseif($system_setting_id == 2){
            alert_null('请先添加系统期望薪资范围');
        }elseif($system_setting_id == 4){
            alert_null('请先添加系统学历');
        }elseif($system_setting_id == 5){
            alert_null('请先添加系统工作经验');
        }
    }
    return $res;
}

function alert_null($msg){
    echo "<SCRIPT LANGUAGE='JavaScript'>";

    echo "alert('$msg');";

    echo "history.back();";

    echo "</SCRIPT>";

    die;
}



?>

