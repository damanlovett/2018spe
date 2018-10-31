<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessTable Test Case
 */
class AccessTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessTable
     */
    public $Access;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.access'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Access') ? [] : ['className' => AccessTable::class];
        $this->Access = TableRegistry::getTableLocator()->get('Access', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Access);

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
