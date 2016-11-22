<?php
	require 'C:\xampp\htdocs\mysqli\config\confgi.php';
	class conexion extends mysqli
		{
			public function __construct()
				{
					parent::__construct(HOST, USER_NAME, PASS, DB_NAME);
					$this->set_charset('utf8');
					$this->connect_error ? die('Error al conectar') : '';
					//var_dump($this->get_charset());
				}
		}
	//$db = new conexion();
?>