<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TmpEmailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TmpEmailsTable Test Case
 */
class TmpEmailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TmpEmailsTable
     */
    public $TmpEmails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.tmp_emails'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('TmpEmails') ? [] : ['className' => TmpEmailsTable::class];
        $this->TmpEmails = TableRegistry::getTableLocator()->get('TmpEmails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TmpEmails);

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
