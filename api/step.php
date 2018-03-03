<?php
/**
 * Created by PhpStorm.
 * User: xkq
 * Date: 2018/3/3 0003
 * Time: 16:51
 */

set_include_path(dirname(dirname(__FILE__)));
include_once("inc/init.php");
if (!session_id()) session_start();

$action = crequest("action");
$action = $action == '' ? 'add' : $action;

switch ($action)
{
    case "add_step":
        add_step();
        break;
    case "get_step":
        get_step();
        break;
}

function add_step(){
    global $db;
    if(!empty($_POST['userid'])&& !empty($_POST['adminid'])&& !empty($_POST['stepInfoList']) ) {
//        $stepInfoList = '[
//       {
//            "timestamp": 1445866601,
//            "step": 100
//        },
//        {
//            "timestamp": 1445866602,
//            "step": 100
//        }
//    ]';
//        $userid = 1;
//        $adminid = 1;
        $userid = $_POST['userid'];
        $stepInfoList = $_POST['stepInfoList'];
        $adminid = $_POST['adminid'];
        $stepInfoList = json_decode($stepInfoList,true);

        foreach($stepInfoList as $key=>$val){
            $timestamp = date('Y-m-d',$val['timestamp']);
            $timestamp = strtotime($timestamp);
            $time= date('Y-m-d',time());
            $time = strtotime($time);
            $info = array();
            $info['userid'] = $userid;
            $info['step'] = $val['step'];
            $info['timestamp'] = $timestamp;
            $info['adminid'] = $adminid;
            $info['add_time']	= time();
            $info['add_time_format']	= now_time();
            $sql = "SELECT * FROM step WHERE timestamp = '{$timestamp}'";
            $step = $db->get_row($sql);
            if($step){
                $db->update('step',$info,"id={$step['id']}");
            }else{
                $db->insert('step',$info);
            }
        }


        $sql 		= "SELECT * FROM step WHERE timestamp = '{$time}' and adminid = $adminid ORDER BY step DESC ";
        $arr 		= $db->get_all($sql);

        showapisuccess($arr);
    }else{
        showapierror('参数错误！');
    }


}

function get_step(){
    global $db;
    if(!empty($_POST['adminid']) ) {
        $time= date('Y-m-d',time());
        $time = strtotime($time);
        $adminid  = $_POST["adminid"];
        $sql 		= "SELECT * FROM step WHERE timestamp = '{$time}' and adminid = $adminid ORDER BY step DESC ";
        $arr 		= $db->get_all($sql);
        showapisuccess($arr);
    }else{
        showapierror('参数错误！');
    }
}


