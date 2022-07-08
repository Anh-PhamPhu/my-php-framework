<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{
    public function showUsers(){
        $this->setLayout('mainLayouts');
        return $this->render('users');
    }
    public function handleUsers(Request $request){
        $this->setLayout('mainLayouts');
        $body = $request->getBody();
        var_dump($body);
    }
}

?>