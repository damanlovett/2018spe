<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MyFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MyFilesTable Test Case
 */
class MyFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MyFilesTable
     */
    public $MyFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.my_files',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('MyFiles') ? [] : ['className' => MyFilesTable::class];
        $this->MyFiles = TableRegistry::getTableLocator()->get('MyFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MyFiles);

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
