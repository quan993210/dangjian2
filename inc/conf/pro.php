<?php
define('IN_APP', true);

//数据库信息配置
define("DB_HOST", 'rm-uf67c488j8l36xkjmo.mysql.rds.aliyuncs.com');
define("DB_NAME", 'dangjian2');
define("DB_USER", 'dangjian');
define("DB_PASS", 'j0QluaLhcIlVSeDS');
/*define("DB_HOST", 'localhost');
define("DB_NAME", 'dangjian');
define("DB_USER", 'root');
define("DB_PASS", 'root');*/
define("PREFIX",  '');

//编码配置
define('CHAR_SET', 'utf-8');

//模板配置
define('TEMPLATE',      'smarty');
define('TEMP_PAGE', 	'temp/default');
define('TEMP_ADMIN',  	'temp/admin');
define('TEMP_COMPILE',	'temp/compiled');
define('TEMP_CACHE',	'temp/caches');
define('CACHE_TIME',	3600);
define('DEBUG_MODE',	1);
define('ADMIN_DIR', 	'admin/');
//路径配置
define('FILE_PATH', '');
define('URL_PATH', 'http://' . $_SERVER['HTTP_HOST'] . FILE_PATH);
define('ADMIN_TEMP_PATH', 'http://' . $_SERVER['HTTP_HOST'] . FILE_PATH . '/' . TEMP_ADMIN);

//网站名称
define('WEB_NAME', '南昌锦路科技有限公司');
define('SYS_NAME', '锦路网站后台管理');

?>