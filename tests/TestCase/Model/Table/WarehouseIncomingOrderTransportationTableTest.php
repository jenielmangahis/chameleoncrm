<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseIncomingOrderTransportationTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseIncomingOrderTransportationTable Test Case
 */
class WarehouseIncomingOrderTransportationTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseIncomingOrderTransportationTable
     */
    public $WarehouseIncomingOrderTransportation;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_incoming_order_transportation',
        'app.warehouse_incoming_orders',
        'app.providers',
        'app.warehouse_outgoing_orders',
        'app.warehouse',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.company_users',
        'app.companies',
        'app.inventories',
        'app.warehouse_inventories',
        'app.warehouse_facilities',
        'app.options_warehouse_facilities',
        'app.warehouse_item_types',
        'app.options_warehouse_item_types',
        'app.warehouse_outgoing_order_items',
        'app.warehouse_incoming_order_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WarehouseIncomingOrderTransportation') ? [] : ['className' => 'App\Model\Table\WarehouseIncomingOrderTransportationTable'];
        $this->WarehouseIncomingOrderTransportation = TableRegistry::get('WarehouseIncomingOrderTransportation', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseIncomingOrderTransportation);

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
