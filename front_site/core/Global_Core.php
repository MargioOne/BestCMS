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
    public $filecss;

    function __construct()
    {
        $this->rout();
        $this->what_css();
    }

    public function rout(){
        if (!empty($_GET['page'])) {
            $control = trim(strip_tags($_GET['page']));
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
    function what_css(){
        if(!empty($_GET['page'])||$_GET['page'] = 'post')
        {
            $this->filecss = CSSPOST;
        }
        elseif($_GET['page'] = 'about'){
            $this->filecss = CSSABOUT;
        }
    }

}
