<?php

Class UserRelation extends RelationModel{
	Protected $tableName = 'admin';
	Protected $_link = array(
         'role' => array(
         	'mapping_type' => MANY_TO_MANY,
         	'foreign_key' => 'user_id',
         	'relation_key' => 'role_id',
         	'relation_table' => 'qiq_role_user'
         	)
		);
}


?>