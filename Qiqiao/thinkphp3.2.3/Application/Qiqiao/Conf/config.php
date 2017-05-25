<?php
return array(
	//'配置项'=>'配置值'
	/* 数据缓存设置 */
    'DATA_CACHE_PREFIX'    => 'qiq_', // 缓存前缀
    'DATA_CACHE_TYPE'      => 'File', // 数据缓存类型
     /* 去除html标志 */
    'URL_HTML_SUFFIX' => '',

	
	'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'qiqiao',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PREFIX'             =>  'qiq_',    // 数据库表前缀
    'DATA_BACKUP_PATH'      =>  'database', //备份文件地址


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

	
	/* 模板相关配置 */
	'TMPL_PARSE_STRING' => ARRAY(
		'__IMG__' => __ROOT__ . '/Public/img',
		'__CSS__' => __ROOT__ . '/Public/css',
		'__JS__' => __ROOT__  . '/Public/js',
        '__DITOR__' =>__ROOT__.'/Public/ueditor',
	)
);