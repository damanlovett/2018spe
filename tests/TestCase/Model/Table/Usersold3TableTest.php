<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\Usersold3Table;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\Usersold3Table Test Case
 */
class Usersold3TableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\Usersold3Table
     */
    public $Usersold3;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.usersold3',
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
        $config = TableRegistry::getTableLocator()->exists('Usersold3') ? [] : ['className' => Usersold3Table::class];
        $this->Usersold3 = TableRegistry::getTableLocator()->get('Usersold3', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Usersold3);

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
