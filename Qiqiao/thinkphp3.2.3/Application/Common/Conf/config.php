<?php
return array(
	//'配置项'=>'配置值'
	/* 数据缓存设置 */
    'DATA_CACHE_PREFIX'    => 'qiq_', // 缓存前缀
    'DATA_CACHE_TYPE'      => 'File', // 数据缓存类型
     /* 去除html标志 */
    'URL_HTML_SUFFIX' => '',

    'DEFAULT_FILTER'        => 'htmlspecialchars,trim',     //表单过滤
    'URL_CASE_INSENSITIVE'  =>  true,  //url不区分大小写
    'MODULE_ALLOW_LIST'    =>    array('Home','Qiqiao'),
	
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'qiqiao',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PREFIX'             =>  'qiq_',    // 数据库表前缀
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8

    'WEB_VERSION'           =>  '1.0.0',
    'UPDATE_URL'            =>  'www.qiqiao.com',
    'APPKEY'                =>  '23624789',
    'SECRETKEY'             =>  'ebb6245e37faea90458b91b427d0c2f2',


    /*RBAC验证*/
    /*
    'RBAC_SUPERADMIN' => 'admin',  //超级管理员
    'ADMIN_AUTH_KEY' =>'superadmin', //超级管理员识别
    'USER_AUTH_ON' => true,  //开启认证
    'USER_AUTH_TYPE' => 1,  //1登录验证2实时验证
    'USER_AUTH_KEY' => 'uid',  //用户认证识别号
    'NOT_AUTH_MODULE' => '',  //无需验证的控制器
    'NOT_AUTH_ACTION' => '',  //无需验证的动作
    'RBAC_ROLE_TABLE' => 'qiq_role',       //角色表
    'RBAC_USER_TABLE' => 'qiq_role_user', //中间表
    'RBAC_ACCESS_TABLE' => 'qiq_access', //权限表名称
    'RBAC_NODE_TABLE' => 'qiq_node', //节点表名称
    'USER_AUTH_MODEL'    =>'UserRelation',    //用户表qiq_admin
    */
    

    /* Auth类配置文件 */
    'AUTH_CONFIG'=>array(
        'AUTH_ON' => true, //认证开关
        'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'qiq_auth_group', //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'qiq_auth_group_access', //用户组明细表
        'AUTH_RULE' => 'qiq_auth_rule', //权限规则表
        'AUTH_USER' => 'qiq_admin'//用户信息表
    ),

	
	/* 模板相关配置 */
	'TMPL_PARSE_STRING' => ARRAY(
		'__IMG__' => __ROOT__ . '/Public/img',
		'__CSS__' => __ROOT__ . '/Public/css',
		'__JS__' => __ROOT__  . '/Public/js',
	)
);