<?php 
class app {
    
    public	 $controller ;
    public	 $method ;
    public	$params = [];
    
    function __construct( ){
        $url = $this->parseUrl();        
        $this->controllers = file_exists('../app/controllers/'.$url[0].'.php')?$url[0]:'home';
        unset($url[0]);
        require_once '../app/controllers/'.$this->controllers. '.php';
        $this->controller = new $this->controllers;
        if (isset($url[1])) {
            $this->method =method_exists($this->controller, $url[1])?$url[1]:'index';
            unset($url[1]);
        }
        
        $this->params = $url ? array_values($url): [];
        call_user_func_array([$this->controller,$this->method], $this->params);
    }
    
    public function parseUrl(){
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/') , FILTER_SANITIZE_URL) );
        }
    }
    
}