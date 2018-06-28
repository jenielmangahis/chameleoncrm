<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OptionsWarehouseCapacitiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OptionsWarehouseCapacitiesTable Test Case
 */
class OptionsWarehouseCapacitiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OptionsWarehouseCapacitiesTable
     */
    public $OptionsWarehouseCapacities;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.options_warehouse_capacities'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OptionsWarehouseCapacities') ? [] : ['className' => 'App\Model\Table\OptionsWarehouseCapacitiesTable'];
        $this->OptionsWarehouseCapacities = TableRegistry::get('OptionsWarehouseCapacities', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OptionsWarehouseCapacities);

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
