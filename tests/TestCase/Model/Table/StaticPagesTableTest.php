<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaticPagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaticPagesTable Test Case
 */
class StaticPagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StaticPagesTable
     */
    public $StaticPages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.static_pages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StaticPages') ? [] : ['className' => StaticPagesTable::class];
        $this->StaticPages = TableRegistry::getTableLocator()->get('StaticPages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StaticPages);

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
