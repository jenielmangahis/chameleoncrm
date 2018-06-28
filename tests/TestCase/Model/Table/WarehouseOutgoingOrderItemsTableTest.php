<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseOutgoingOrderItemsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseOutgoingOrderItemsTable Test Case
 */
class WarehouseOutgoingOrderItemsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseOutgoingOrderItemsTable
     */
    public $WarehouseOutgoingOrderItems;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_outgoing_order_items',
        'app.warehouse_incoming_orders',
        'app.providers',
        'app.warehouse',
        'app.companies',
        'app.inventories',
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
        $config = TableRegistry::exists('WarehouseOutgoingOrderItems') ? [] : ['className' => 'App\Model\Table\WarehouseOutgoingOrderItemsTable'];
        $this->WarehouseOutgoingOrderItems = TableRegistry::get('WarehouseOutgoingOrderItems', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseOutgoingOrderItems);

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
