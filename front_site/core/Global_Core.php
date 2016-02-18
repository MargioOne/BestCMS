<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 18.02.2016
 * Time: 13:07
 * Project: BeesCMS
 */
class core{
    public $classnew;

    function __construct()
    {
        $this->rout();
    }

    public function rout(){
        if (!empty($_GET['option'])) {
            $control = trim(strip_tags($_GET['option']));
        } else {
            $control = 'main_controller';
        }

        if(file_exists(SITEPATCH."core/controllers/".$control.".php")){
            include(SITEPATCH."core/controllers/".$control.".php");
            $this->classnew = new $control;
        }else{
            exit ();
        };
    }
}