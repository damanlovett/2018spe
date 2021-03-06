<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserEmailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserEmailsTable Test Case
 */
class UserEmailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserEmailsTable
     */
    public $UserEmails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_emails',
        'app.user_groups',
        'app.scheduled_emails',
        'app.user_email_recipients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UserEmails') ? [] : ['className' => UserEmailsTable::class];
        $this->UserEmails = TableRegistry::getTableLocator()->get('UserEmails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserEmails);

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
