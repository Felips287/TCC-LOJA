<?php

namespace App\Classes;

class Session{
	
	public static function start(){
		if(session_status() != PHP_SESSION_ACTIVE){
			session_start();
		}
	}

}