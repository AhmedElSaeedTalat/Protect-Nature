<?php
class App{
  public $controller="home";
  public $method ="index";
  public $params = [];
  public function __construct(){	
	$url = explode("/",filter_var($_REQUEST['url'],FILTER_SANITIZE_URL));
	if(file_exists("Controllers/".$url[0].".php")){
	   require "Controllers/".$url[0].".php";
	   $this->controller = $url[0];
	   unset($url[0]);
	   $controller = new $this->controller;
	}
	else{
		require "Controllers/".$this->controller.".php";
	}
  	
 	
 	if(method_exists($controller, $url[1])){
 		$this->method = $url[1];
 		unset($url[1]);
 	}
 	$this->params = array_values($url);
 	call_user_func_array([$this->controller,$this->method], $this->params);
}
}