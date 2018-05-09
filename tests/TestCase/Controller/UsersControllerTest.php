<?php
namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use Cake\TestSuite\IntegrationTestCase;

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
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
<<<<<<< HEAD
        $usersTable = TableRegistry::get('Users');
       
        //query
        $query2 = $usersTable->find()
                        ->select(['id','username', 'email'])
                        ->all();
                       // ->where(['username' => 'ken.kitchen']);
        debug($query2->toArray());


        $user = $usersTable->get(1); // Retourne l'utilisateur avec l'id 1 (Il n'y a pas d'autres utilisateurs dans la base, elle est reconstruite entre chaque appel)
        
        $user->email = 'abdellatchoindudesert@mektoub.dz';
        $usersTable->save($user);

            // Assert view variables
        $query = $usersTable->find()->where(['id' => 1, 'email' => 'abdellatchoindudesert@mektoub.dz']);
        debug($query->toArray());
        $this->assertEquals(1, $query->count()); 

=======
        $this->markTestIncomplete('Not implemented yet.');
>>>>>>> f3e655bf401ce5299febdc5caae3677e81136a47
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
<<<<<<< HEAD

    /**
     * Test registry method
     *
     * @return void
     */
    public function testRegister()
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


=======
>>>>>>> f3e655bf401ce5299febdc5caae3677e81136a47
}
