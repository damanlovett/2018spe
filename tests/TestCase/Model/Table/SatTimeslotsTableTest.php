<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SatTimeslotsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SatTimeslotsTable Test Case
 */
class SatTimeslotsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SatTimeslotsTable
     */
    public $SatTimeslots;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.sat_timeslots',
        'app.employers',
        'app.sat_schedules',
        'app.users',
        'app.jobs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('SatTimeslots') ? [] : ['className' => SatTimeslotsTable::class];
        $this->SatTimeslots = TableRegistry::getTableLocator()->get('SatTimeslots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SatTimeslots);

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
