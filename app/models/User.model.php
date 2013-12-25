<?php
require_once MODELS_PATH . 'App.model.php';
class UserModel extends AppModel
{
	var $primaryKey = 'id';
	
	var $table = 'itas_users';
	
	var $schema = array(
		array('name' => 'id', 'type' => 'int', 'default' => ':NULL'),
		array('name' => 'role_id', 'type' => 'int', 'default' => ''),
		array('name' => 'session_id', 'type' => 'varchar', 'default' => ''),
		array('name' => 'username', 'type' => 'varchar', 'default' => ''),
		array('name' => 'password', 'type' => 'varchar', 'default' => ''),
		array('name' => 'created', 'type' => 'datetime', 'default' => ':NOW()'),
		array('name' => 'last_login', 'type' => 'datetime', 'default' => ':NULL'),
		array('name' => 'status', 'type' => 'enum', 'default' => 'T')
	);
}
?>
