<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SatSchedulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SatSchedulesTable Test Case
 */
class SatSchedulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SatSchedulesTable
     */
    public $SatSchedules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sat_schedules',
        'app.employers',
        'app.users',
        'app.jobs',
        'app.sat_timeslots'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SatSchedules') ? [] : ['className' => SatSchedulesTable::class];
        $this->SatSchedules = TableRegistry::getTableLocator()->get('SatSchedules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SatSchedules);

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
