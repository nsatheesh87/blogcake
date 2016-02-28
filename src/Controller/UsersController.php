<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.
        $this->Auth->allow(['add', 'logout']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
           // $user = $this->Auth->identify();
            $username = $this->request->data['username'];
            $password = $this->request->data['password'];

            $user = [
            'username' => 'admin',
            'password' => 'admin',
          ];
            if($username == 'admin' && $password == 'admin') {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
           
            $this->Flash->set('Invalid username or password, try again', ['key' => 'auth']);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

}