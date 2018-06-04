<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AuthorsArticlesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AuthorsArticlesTable Test Case
 */
class AuthorsArticlesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AuthorsArticlesTable
     */
    public $AuthorsArticles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.authors_articles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AuthorsArticles') ? [] : ['className' => AuthorsArticlesTable::class];
        $this->AuthorsArticles = TableRegistry::get('AuthorsArticles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AuthorsArticles);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
