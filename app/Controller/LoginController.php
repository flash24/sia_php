<?php

App::uses('AppController', 'Controller');
App::uses('AuthComponent', 'Controller/Component');
App::uses('Empleado', 'Model');

class LoginController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->autoRedirect = false;
    }
//    public function index(){
//        
//    }


    public function index() {
        

         $this->layout = 'login';

        if ($this->request->is('post')) {
            
            if ($this->Auth->login()) {
                return $this->redirect(array('controller' => 'home', 'action' => 'index'));
            }

            $this->Session->setFlash(__('Nombre de usuario o contraseña invalidos, intente otra vez', 'default', array('class' => 'alert alert-warning fade in')));
        }
    }
    
     public function logout(){
        $this->Session->destroy();
        $this->redirect('/');        
    }

   

}

?>
