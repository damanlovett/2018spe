<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserEmailSignaturesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserEmailSignaturesTable Test Case
 */
class UserEmailSignaturesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserEmailSignaturesTable
     */
    public $UserEmailSignatures;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_email_signatures',
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
        $config = TableRegistry::getTableLocator()->exists('UserEmailSignatures') ? [] : ['className' => UserEmailSignaturesTable::class];
        $this->UserEmailSignatures = TableRegistry::getTableLocator()->get('UserEmailSignatures', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserEmailSignatures);

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
