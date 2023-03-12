<?php
namespace vendor\core\base;

class View extends \vendor\core\base\Controller{


    public $route = [];

    //текущий вид
    //$var string
    public $view;

    //текущий шаблон
    public $layout;

    public function __construct($route, $layout = '', $view = ''){
         $this->route = $route;
        // $this->layout = $layout ?: LAYOUT;
        // $this->view = $view;*/
      //    $this->route = $route;
          if($layout === false){
            $this->layout = false;
          }else{
            $this->layout = $layout ?: LAYOUT;
          }
         $this->view = $view;
    }

    public function render(){
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if(is_file($file_view)){
           require $file_view;
        }else{
           echo "<p>не найден вид $file_view</p>";
        }
        $content = ob_get_clean();

        $file_layout = APP . "/views/layouts/{$this->layout}.php";
        if(is_file($file_layout)){
         require $file_layout;
        }
        else
        {
        echo "<p>не найден шаблон $file_layout</p>";
        }
        }
   }