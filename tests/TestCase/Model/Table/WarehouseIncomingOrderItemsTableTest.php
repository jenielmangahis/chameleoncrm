<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseIncomingOrderItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseIncomingOrderItemsTable Test Case
 */
class WarehouseIncomingOrderItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseIncomingOrderItemsTable
     */
    public $WarehouseIncomingOrderItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_incoming_order_items',
        'app.warehouse_incoming_orders',
        'app.providers',
        'app.warehouses',
        'app.companies',
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
        $config = TableRegistry::exists('WarehouseIncomingOrderItems') ? [] : ['className' => 'App\Model\Table\WarehouseIncomingOrderItemsTable'];
        $this->WarehouseIncomingOrderItems = TableRegistry::get('WarehouseIncomingOrderItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseIncomingOrderItems);

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
