<?php

namespace App\Library;

// NECESSARRY
use Auth;
// NECESSARRY

class WesarutToolkits {

	public static function genPath($path){
		return 'http://' . $_SERVER['SERVER_NAME'] . "/cookklow/$path";
	}


}

?>