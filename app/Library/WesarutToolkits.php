<?php

namespace App\Library;


class WesarutToolkits {
	
	public static function hello($name){
		return "Hello $name";
	}

	public function bye($name){
		return "Good Bye $name";
	}

	public static function genPath($path){
		return 'http://' . $_SERVER['SERVER_NAME'] . "/cookklow/$path";
	}

}

?>