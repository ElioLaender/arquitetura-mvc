<?php

spl_autoload_register(function ($class_name) {

	if(file_exists("dao/access_object/". $class_name . ".php")){
		
		include_once "dao/access_object/". $class_name . ".php";

	} else if(file_exists("config/". $class_name . ".php")){

		include_once "config/". $class_name . ".php";

	} else if(file_exists("controller/". $class_name . ".php")){
		
		include_once "controller/". $class_name . ".php";

	} else if(file_exists("vendor/". $class_name . ".php")){
		
		include_once "vendor/". $class_name . ".php";
	} else if(file_exists("model/". $class_name . ".php")){
		
		include_once "model/". $class_name . ".php";

	} else if(file_exists("dao/connection_factory/". $class_name . ".php")){
		
		include_once "dao/connection_factory/". $class_name . ".php";

	} else if(file_exists("config/". $class_name . ".php")){

		include_once "config/". $class_name . ".php";

	}
    
});
