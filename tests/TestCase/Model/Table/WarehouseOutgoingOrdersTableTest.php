<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseOutgoingOrdersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseOutgoingOrdersTable Test Case
 */
class WarehouseOutgoingOrdersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WarehouseOutgoingOrdersTable
     */
    public $WarehouseOutgoingOrders;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse_outgoing_orders',
        'app.providers',
        'app.warehouse_incoming_orders',
        'app.warehouse',
        'app.companies',
        'app.inventories',
        'app.warehouse_incoming_order_items',
        'app.warehouse_outgoing_order_items',
        'app.users',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.provider_users',
        'app.company_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WarehouseOutgoingOrders') ? [] : ['className' => 'App\Model\Table\WarehouseOutgoingOrdersTable'];
        $this->WarehouseOutgoingOrders = TableRegistry::get('WarehouseOutgoingOrders', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WarehouseOutgoingOrders);

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
