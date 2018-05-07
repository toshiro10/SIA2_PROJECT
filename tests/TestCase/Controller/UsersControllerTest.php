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
        'id' => 15,
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
        $query = $users->find()->where(['username' => $data['username']]);
        $this->assertEquals(1, $query->count());
    }

    /**
     * Test edit method
     *
     * @return void
     */
   /* public function testEdit()
    {
       
     
      $users_table = TableRegistry::get('users')->find();
      $users = $users_table->where(['id'=>15]);
      var_dump($users);
      $modif = TableRegistry::set('Abdel',$users->username);

      $this->assertEquals(1, $users_table->count()); 
      

    }*/

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
        $data = $users->find()->where(['id' => 15]);
        $this->assertEquals(0, $data->count());
    }
}
