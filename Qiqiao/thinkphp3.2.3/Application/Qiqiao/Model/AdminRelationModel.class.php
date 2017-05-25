<?php
namespace Admin\Model;
use Think\Model\RelationModel;

Class AdminRelationModel extends RelationModel{
    protected $tableName = 'admin';

	Protected $_link = array(
         'role' => array(
         	'mapping_type' => MANY_TO_MANY,
         	//'class_name' => 'admin',
         	'foreign_key' => 'user_id',
         	'relation_foreign_key' => 'role_id',
         	'relation_table' => 'qiq_role_user'
         	//'mapping_fields' => 'id,name,remark'
         	)
		);
}


?>