<?php
   namespace App\Controller;
   use App\Controller\AppController;
   use Cake\ORM\TableRegistry;
   use Cake\Datasource\ConnectionManager;
   use Cake\Auth\DefaultPasswordHasher;

   class UsersController extends AppController{
      public function register(){
         if($this->request->is('post')){
            $username = $this->request->data('username');
            $hashPswdObj = new DefaultPasswordHasher;
            $password = $hashPswdObj->hash($this->request->data('password'));
            $users_table = TableRegistry::get('users');
            $users = $users_table->newEntity();
            $users->username = $username;
            $users->password = $password;

            if($users_table->save($users))
               return $this -> redirect(['Controller' => 'Users', 'action' => 'registersuccess']);
            else {
               // Show some error
            }
         }
      }

      public function registersuccess() {

      }
   }
?>