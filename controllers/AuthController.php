<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller{
    public function login(){
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request){
        $user = new User();
        if($request->isPost()){
            $user->loadData($request->getBody());

            if($user->validate() && $user->save()){
                return 'Success';
            }
// echo '<pre>';
// var_dump($registerModel->errors);
// echo '</pre>';
// exit;
            return $this->render('register', [
                'model' => $registerModel,
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }

    

}
?>