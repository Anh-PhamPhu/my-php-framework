<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{
    public function showUsers(){
        $this->setLayout('mainLayouts');
        $params = [
            'name' => 'Anh Pham Phu',
        ];
        return $this->render('users', $params);
    }
    public function handleUsers(Request $request){
        $this->setLayout('mainLayouts');
        $body = $request->getBody();
        var_dump($body);
    }
}

?>