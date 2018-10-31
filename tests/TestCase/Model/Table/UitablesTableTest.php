<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UitablesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UitablesTable Test Case
 */
class UitablesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UitablesTable
     */
    public $Uitables;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.uitables'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Uitables') ? [] : ['className' => UitablesTable::class];
        $this->Uitables = TableRegistry::getTableLocator()->get('Uitables', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Uitables);

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
