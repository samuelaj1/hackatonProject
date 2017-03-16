<?php

namespace App\Classes;
/**
* 
*/
class CustomClass
{

	public static function checkInternet(){

		$connected = @fsockopen("www.codoxogh.com", 80); 
                                        //website, port  (try 80 or 443)
	    if ($connected){
	        $is_conn = true; //action when connected
	        fclose($connected);
	    }else{
	        $is_conn = false; //action in connection failure
	    }
	    return $is_conn;

	}
}

