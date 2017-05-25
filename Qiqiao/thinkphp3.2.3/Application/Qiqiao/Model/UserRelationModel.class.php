<?php
namespace Qiqiao\Model;
use Think\Model\RelationModel;

Class UserRelationModel extends RelationModel{
	protected $tableName = 'admin'; 

	Protected $_link = array(
         'role' => array(
         	'mapping_type' => self::MANY_TO_MANY,
         	//'class_name' => 'role',
         	'foreign_key' => 'user_id',
         	'relation_foreign_key' => 'role_id',
         	'relation_table' => 'qiq_role_user',
         	'mapping_fields' => 'id,name,remark'
         	)
		);
}


?>