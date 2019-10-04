<?php
//View Class For Common View
class View
{
	
	function __construct()
	{
		// $this->view = new View();
		// echo "SALMAN FROM VIEW";
	}

	function load($file, $data=[], $data2=[], $data3=[], $data4=[], $data5=[], $data6=[], $data7=[], $data8=[], $data9=[]){
		require 'views/layout/header.php';
		require 'views/layout/navbar.php';
		require 'views/'.$file.'.php';
		require 'views/layout/footer.php';
	}

	function admin($file, $data=[], $data2=[], $data3=[], $data4=[], $data5=[], $data6=[], $data7=[], $data8=[], $data9=[]){
		require 'views/layout/admin/header.php';
		require 'views/layout/admin/topbar.php';
		require 'views/layout/admin/sidebar.php';
		require 'views/'.$file.'.php';
		require 'views/layout/admin/footer.php';
	}
}