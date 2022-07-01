<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller{
    public function showUsers(){
        $params = [
            'name' => 'Anh Pham Phu',
        ];
        return $this->render('users', $params);
    }
    public function handleUsers(Request $request){
        $body = $request->getBody();
        var_dump($body);
    }
}

?>