<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersoldTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersoldTable Test Case
 */
class UsersoldTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersoldTable
     */
    public $Usersold;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usersold',
        'app.groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Usersold') ? [] : ['className' => UsersoldTable::class];
        $this->Usersold = TableRegistry::getTableLocator()->get('Usersold', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usersold);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
