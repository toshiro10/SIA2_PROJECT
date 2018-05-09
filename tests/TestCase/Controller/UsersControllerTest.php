<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\ORM\TableRegistry;

/**
 * App\Controller\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('/users');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/users/view/1');
        // Check for a 2xx response code
        $this->assertResponseOk();
        // Assert partial response content
        $this->assertResponseContains('Lorem');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->get('/users/add');

        // Check for a 2xx response code
        $this->assertResponseOk();

        $data = [
        'id' => 15,//L'ID est autoIncrement, on peut pas le set, en tout cas pas de cette maniere, du coup, dans cet exemple, l'ID =2
        'username' => 'ken.kitchen',
        'password' => 'qwerty',
        'firstname' => 'fn',
        'lastname' => 'pd',
        'email' => 'abdellatchoindudesert@mektoub.fr'
        ];
        $this->post('/users/add', $data);

        // Check for a 2xx response code
        $this->assertResponseSuccess();

        // Assert view variables
        $users = TableRegistry::get('Users');

        $query = $users->find()
                        ->where(['username' => $data['username']]);
        $this->assertEquals(1, $query->count());

        //DEBUG
        $query2 = $users->find()
                        ->select(['id','username', 'email'])
                        ->all();
        debug($query2->toArray());
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $usersTable = TableRegistry::get('Users');
       
        //query
        $query2 = $usersTable->find()
                        ->select(['id','username', 'email'])
                        ->all();
                       // ->where(['username' => 'ken.kitchen']);
        debug($query2->toArray());


        $user = $usersTable->get(1); // Retourne l'utilisateur avec l'id 1 (Il n'y a pas d'autres utilisateurs dans la base, elle est reconstruite entre chaque appel)
        
        $user->email = 'juju@juliette.com';
        $usersTable->save($user);

            // Assert view variables
        $query = $usersTable->find()->where(['id' => 1, 'email' => 'juju@juliette.com']);
        debug($query->toArray());
        $this->assertEquals(1, $query->count()); 

    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->delete('/users/delete/1');

        // Check for a 2xx/3xx response code
        $this->assertResponseSuccess();

        $users = TableRegistry::get('Users');
        $data = $users->find()->where(['id' => 1]); //15 n'existe pas, donc j'ai mis 1
        $this->assertEquals(0, $data->count());

        //Debug
        $query2 = $users->find()
                    ->select(['id','username', 'email'])
                    ->all();
        debug($query2->toArray());
    }

    /**
     * Test registry method
     *
     * @return void
     */
    public function testRegistry()
    {
        $this->delete('/users/delete/1');

        // Check for a 2xx/3xx response code
        $this->assertResponseSuccess();

        $users = TableRegistry::get('Users');
        $data = $users->find()->where(['id' => 1]); //15 n existe pas, donc j'ai mis 1
        $this->assertEquals(0, $data->count());

        //Debug
        $query2 = $users->find()
                    ->select(['id','username', 'email'])
                    ->all();
                   // ->where(['username' => 'ken.kitchen']);
        debug($query2->toArray());
    }


}
