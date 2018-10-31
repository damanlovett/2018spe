<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GroupsPermissionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GroupsPermissionsTable Test Case
 */
class GroupsPermissionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GroupsPermissionsTable
     */
    public $GroupsPermissions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.groups_permissions',
        'app.groups',
        'app.permissions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GroupsPermissions') ? [] : ['className' => GroupsPermissionsTable::class];
        $this->GroupsPermissions = TableRegistry::getTableLocator()->get('GroupsPermissions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GroupsPermissions);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
