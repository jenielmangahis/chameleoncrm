<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseIncomingOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseIncomingOrdersTable Test Case
 */
class WarehouseIncomingOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseIncomingOrdersTable
     */
    public $WarehouseIncomingOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_incoming_orders',
        'app.providers',
        'app.warehouses',
        'app.companies',
        'app.warehouse_incoming_order_items',
        'app.warehouse_outgoing_order_items'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WarehouseIncomingOrders') ? [] : ['className' => 'App\Model\Table\WarehouseIncomingOrdersTable'];
        $this->WarehouseIncomingOrders = TableRegistry::get('WarehouseIncomingOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseIncomingOrders);

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
